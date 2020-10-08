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

class Dashboard
{
    function __construct()
    {
        if ($_POST['inspect'] AND $_POST['path']): $this->inspect(); endif;
    }

    function listing()
    {
        foreach (Capsule::select(Capsule::raw('SELECT path, detected, expected, status FROM wd_audit')) as $v)
        {
            $output['fileSystem'][$v->status][] = $v;
        }

        foreach (Capsule::select(Capsule::raw('SELECT status, COUNT(path) AS total FROM wd_audit GROUP BY status')) as $v)
        {
            $output['statistics'][$v->status] = $v->total;
        }

        return $output;
    }

    function inspect()
    {
        $output = Capsule::select(Capsule::raw('SELECT path, detected, expected, status FROM wd_audit WHERE path = "' . $_POST['path'] . '" LIMIT 1'))[0];

        header('Content-Type: application/json');
        echo json_encode($output);
        die();
    }

    function save()
    {
        if (in_array($_POST['setting'], array('actionsTaken')))
        {
            $_POST['value'] = json_encode($_POST['value']);
        }
        elseif (in_array($_POST['setting'], array('recipients')))
        {
            $_POST['value'] = explode(PHP_EOL, $_POST['value']);
            
            foreach ($_POST['value'] as $k => $v)
            {
                $v = trim($v);
                
                if (!filter_var($v, FILTER_VALIDATE_EMAIL))
                {
                    header('Location: addonmodules.php?module=Watchdog&view=Settings&heading=' . $_POST['heading'] . '&error=invalidemail');
                    die();
                }
                
                $_POST['value'][$k] = trim($v);
            }
            
            $_POST['value'] = json_encode(array_unique($_POST['value']));
        }
        elseif (in_array($_POST['setting'], array('checkFrequency')) AND (!is_int((int) $_POST['value'])))
        {
            header('Location: addonmodules.php?module=Watchdog&view=Settings&heading=' . $_POST['heading'] . '&error=integear');
        }
        
        Capsule::table('tbladdonmodules')->where('setting', $_POST['setting'])->update(['value' => $_POST['value']]);
        
        header('Location: addonmodules.php?module=Watchdog&view=Settings&heading=' . $_POST['heading']);
        die();
    }
}