<?php

/**
 * Watchdog
 *
 * @package     WHMCS
 * @copyright   Katamaze
 * @link        https://katamaze.com
 * @author      Davide Mantenuto <info@katamaze.com>
 *
 */

namespace WHMCS\Module\Addon\Watchdog;

use WHMCS\Database\Capsule;

class Audit
{
    function __construct()
    {
        $this->env = $this->setEnv();
    }

    function setEnv()
    {
        include_once('configuration.php');

        $output->adminPath = ($customadminpath ? $customadminpath : 'admin');
        $output->downloadsPath = ($downloads_dir ? $downloads_dir : 'downloads');
        $output->cronsDir = ($crons_dir ? $crons_dir : 'crons');
        $output->rootDir = ROOTDIR;

        return $output;
    }

    function ScanDir($dir, &$output = array())
    {
        if ($dir): $files = scandir($dir); endif;

        if ($files)
        {
            foreach ($files as $key => $value)
            {
                $path = realpath($dir . DIRECTORY_SEPARATOR . $value);

                if (!is_dir($path))
                {
                    if (pathinfo($value, PATHINFO_EXTENSION) == 'php')
                    {
                        $output[str_replace($this->env->rootDir . '/', '', $path)] = md5_file($path);
                    }
                }
                elseif ($value != '.' && $value != '..')
                {
                    $this->ScanDir($path, $output);
                    //$output[] = $path; // Skip directories
                }
            }
        }

        return $output;
    }

    function Checksum($FileSystem, $mode)
    {
        foreach ($FileSystem as $file)
        {
            if ($mode == 'whmcs')
            {
                $filename = str_replace($this->WHMCS_ROOT, '', $file);
            }
            elseif ($mode == 'downloads')
            {
                $filename = str_replace($this->DOWNLOADS_ROOT, '', $file);
            }

            $output[$filename] = md5_file($file);
        }

        return $output;
    }

    function run($data)
    {
        if (!$this->env->rootDir): logActivity('Watchdog: Can\'t locate ROOTDIR - Operation interrupted'); endif;
        $fileSystem = $this->ScanDir($this->env->rootDir . '/modules/addons/Watchdog');
        $expectedFiles = count($data['checksum']);
        $foundFiles = count($fileSystem);
        logActivity('Watchdog: Expecting ' . $expectedFiles . ' files. Found ' . $foundFiles . ' files. Potential Intruders ' . ($foundFiles - $expectedFiles));

        foreach ($fileSystem as $path => $checksum)
        {
            $file = str_replace($this->env->rootDir, '', $path);

            if (strlen($path) >= '260')
            {
                // Toolong
                $output[] = array('path' => substr($path, 0, 260), 'detected' => $checksum, 'status' => '1');
            }
            elseif (!$data['checksum'][$path])
            {
                // Intruder
                $output[] = array('path' => $path, 'detected' => $checksum, 'status' => '2');
            }
            elseif ($checksum !== $data['checksum'][$path])
            {
                // Corrupted
                $output[] = array('path' => $path, 'detected' => $checksum, 'expected' => $data['checksum'][$path], 'status' => '3');
            }
        }

        // Missing
        foreach (array_diff_key($data['checksum'], $fileSystem) as $path => $checksum)
        {
            $output[] = array('path' => $path, 'detected' => $checksum, 'status' => '4');
        }

        echo "<pre>";
        print_r($output);
        echo "</pre>";

        die();
        
        Capsule::table('wd_audit')->insert($output);

        die();

            foreach ($whmcs as $file => $verify)
            {
                if (!$md5[$file])
                {
                    if (!$exceptions[$file])
                    {
                        $warnings['whmcs']['intruder'][] = array('file' => $file, 'detected' => $verify);
                    }
                }
                elseif ($verify !== $md5[$file])
                {
                    $warnings['whmcs']['checksum'][] = array('file' => $file, 'detected' => $verify, 'stored' => $md5[$file]);
                }
                
                if ($exceptions[$file])
                {
                    if ($verify !== $exceptions[$file])
                    {
                        $warnings['whmcs']['checksum'][] = array('file' => $file, 'detected' => $verify, 'stored' => $md5[$file]);
                    }
                }
            }

        
        if ($this->DOWNLOADS_ROOT)
        {
            foreach (scandir($this->DOWNLOADS_ROOT) as $achive)
            {
                if (!in_array($achive, array('.', '..')))
                {
                    $downloads[] = $this->DOWNLOADS_ROOT . $achive;
                }
            }
            
            $downloads = $this->Checksum($downloads, 'downloads');
            
            if (file_exists($this->CHECKSUM_ROOT . 'overrides' . DIRECTORY_SEPARATOR . 'downloads.php'))
            {
                include($this->CHECKSUM_ROOT . 'overrides' . DIRECTORY_SEPARATOR . 'downloads.php');
            }
            
            include ('WatchDog/downloads.php');
            
            foreach ($downloads as $file => $verify)
            {
                if (!$md5[$file])
                {
                    if (!$exceptions[$file])
                    {
                        $warnings['downloads']['intruder'][] = array('file' => $file, 'detected' => $verify);
                        $rename = true;
                    }
                }
                elseif ($verify !== $md5[$file])
                {
                    $warnings['downloads']['checksum'][] = array('file' => $file, 'detected' => $verify, 'stored' => $md5[$file]);
                    $rename = true;
                }
                
                if ($exceptions[$file])
                {
                    if ($verify !== $exceptions[$file])
                    {
                        $warnings['downloads']['checksum'][] = array('file' => $file, 'detected' => $verify, 'stored' => $md5[$file]);
                    }
                }
                else
                {
                    if ($rename)
                    {
                        if (substr( $file, 0, 2 ) !== "__")
                        {
                            rename($this->DOWNLOADS_ROOT . $file, $this->DOWNLOADS_ROOT . '__' . $file);
                        }
                    }
                }
                
                unset($rename);
            }
        }
        
        if ($warnings AND $this->NOTIFY_EMAIL): $this->Notify($warnings); endif;
        
        return $warnings;
    }
}