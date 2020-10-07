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

use WHMCS\Database\Capsule;

//add_hook('AfterCronJob', 1, function($vars)
add_hook('AdminAreaHeadOutput', 1, function($vars)
{
    if ($_GET['a'])
    {

    require_once('core/Watchdog_Admin/Settings.php');
    $data = new Settings();
    $data = $data->listing();
    if (!$data['checkFrequency']): return; endif;
    $data['lastRun'] = ($data['lastRun'] ? $data['lastRun'] : date('Y-m-d H:i:s'));

    $version = Capsule::select(Capsule::raw('SELECT value FROM tblconfiguration WHERE setting = "Version" LIMIT 1'))[0]->value;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://raw.githubusercontent.com/Katamaze/WHMCS-Watchdog/main/checksum/' . $version . '.json');
    curl_setopt($ch, CURLOPT_GET, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    $response = curl_exec($ch);
    $response = json_decode($response, true);
    
    echo "<pre>";
    print_r($response);
    echo "</pre>";
    

    }
});