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
use WHMCS\Module\Addon\Watchdog\Settings;
use WHMCS\Module\Addon\Watchdog\Audit;

//add_hook('AfterCronJob', 1, function($vars)
add_hook('AdminAreaHeadOutput', 1, function($vars)
{
    if ($_GET['a'])
    {

    $data = new Settings();
    $data = $data->listing();
    if (!$data['checkFrequency']): return; endif;
    $performCheck = (!$data['lastRun'] ? true : false);

    if (!$performCheck)
    {
        $date1 = new DateTime($data['lastRun']);
        $date2 = new DateTime('now');
        $interval = $date2->diff($date1);
        $interval = ($interval->days * 24) + $interval->h;
        $performCheck = ($interval >= $data['checkFrequency'] ? true : false);
    }

    logActivity('Watchdog: Integrity Check for ' . $data['WHMCSVersion'] . ' - Last Run: ' . ($data['lastRun'] ? $data['lastRun'] : 'Never'));

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://raw.githubusercontent.com/Katamaze/WHMCS-Watchdog/main/checksum/' . $data['WHMCSVersion'] . '.json');
    curl_setopt($ch, CURLOPT_GET, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    $checksum = curl_exec($ch);
    $checksum = json_decode($checksum, true);

    if ($checksum)
    {
        $audit = new Audit();
        $audit->run(array('checksum' => $checksum, 'version' => $data['WHMCSVersion']));

        logActivity('Watchdog: Completed');
    }
    else
    {
        logActivity('Watchdog: Error: Missing or corrupted JSON file for ' . $data['WHMCSVersion'] . '. Submit this error message on https://github.com/Katamaze/WHMCS-Watchdog/issues');
    }

    }
});