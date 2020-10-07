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

class Settings
{
    function __construct()
    {
        if ($_POST['setting']): $this->save(); endif;
    }

    function listing()
    {
        foreach (Capsule::select(Capsule::raw('SELECT setting, value FROM tbladdonmodules WHERE module = "Watchdog"')) as $v)
        {
            if (in_array($v->setting, array('actionsTaken', 'recipients')))
            {
                if ($v->setting == 'actionsTaken')
                {
                    foreach (json_decode($v->value, true) as $key)
                    {
                        $output[$v->setting][$key] = true;
                    }

                    continue;
                }
                else
                {
                    $v->value = json_decode($v->value, true);
                    $v->value = implode(PHP_EOL, $v->value);
                }
            }

            $output[$v->setting] = $v->value;
        }

        return $output;
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