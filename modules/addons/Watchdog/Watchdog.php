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

if (!defined('WHMCS')) die('This file cannot be accessed directly');

use WHMCS\Database\Capsule;

function Watchdog_config()
{
	$configarray = array(
		"name" => "Watchdog",
	    "description" => 'Detect compromised files of WHMCS that could potentially threaten your core install',
		"version" => "ALPHA 1",
		"author" => "<a href=\"http://katamaze.com\" target=\"_blank\" title=\"katamaze.com\"><img src=\"../modules/addons/Watchdog/images/katamaze.png\"></a>",
		"fields" => array());

	return $configarray;
}

function Watchdog_activate()
{
    try
    {
        Capsule::schema()->create('wd_whitelist', function ($table) { $table->string('file', '260'); $table->primary('file'); });
        Capsule::table('tbladdonmodules')->insert(['module' => 'Watchdog', 'setting' => 'checkFrequency', 'value' => '']);
        Capsule::table('tbladdonmodules')->insert(['module' => 'Watchdog', 'setting' => 'actionsTaken', 'value' => '']);
        Capsule::table('tbladdonmodules')->insert(['module' => 'Watchdog', 'setting' => 'recipients', 'value' => '']);
        Capsule::table('tbladdonmodules')->insert(['module' => 'Watchdog', 'setting' => 'lastRun', 'value' => '']);

        return array('status' => 'success', 'description' => 'This is a demo module only');
    }
    catch (\Exception $e)
    {
        return array('status' => "error", 'description' => 'Unable to create mod_addonexample: ' . $e->getMessage());
    }
}

function Watchdog_deactivate()
{
    try
    {
        Capsule::schema()->dropIfExists('wd_whitelist');

        return array('status' => 'success', 'description' => 'This is a demo module only.');
    }
    catch (\Exception $e)
    {
        return array("status" => "error", "description" => "Unable to drop mod_addonexample: {$e->getMessage()}");
    }
}

function Watchdog_upgrade($vars)
{

}

function Watchdog_output($vars)
{
	$smarty = new Smarty();
	$smarty->caching = false;
	$smarty->compile_dir = $GLOBALS['templates_compiledir'];
	$smarty->setTemplateDir(array(0 => '../modules/addons/Watchdog/templates/Admin'));
	$smarty->assign('modulelink', $vars['modulelink']);
	$smarty->assign('_ADDONLANG', $vars['_lang']);

	if (!$_GET['view'] OR $_GET['view'] == 'Dashboard')
	{
	    require_once('core/Watchdog_Admin/Dashboard.php');
	    $data = new Dashboard();

	    $smarty->assign('data', $data->listing());
	    $smarty->display(dirname(__FILE__) . '/templates/Admin/Header.tpl');
	    $smarty->display(dirname(__FILE__) . '/templates/Admin/Dashboard.tpl');
	    $smarty->display(dirname(__FILE__) . '/templates/Admin/Footer.tpl');
	}
	elseif ($_GET['view'] == 'Whitelist')
	{
	    require_once('core/Watchdog_Admin/Whitelist.php');
	    $data = new Whitelist();

	    $smarty->assign('data', $data->listing());
	    $smarty->display(dirname(__FILE__) . '/templates/Admin/Header.tpl');
	    $smarty->display(dirname(__FILE__) . '/templates/Admin/Whitelist.tpl');
	    $smarty->display(dirname(__FILE__) . '/templates/Admin/Footer.tpl');
	}
	elseif ($_GET['view'] == 'Settings')
	{
	    require_once('core/Watchdog_Admin/Settings.php');
	    $data = new Settings();

	    $smarty->assign('data', $data->listing());
	    $smarty->display(dirname(__FILE__) . '/templates/Admin/Header.tpl');
	    $smarty->display(dirname(__FILE__) . '/templates/Admin/Settings.tpl');
	    $smarty->display(dirname(__FILE__) . '/templates/Admin/Footer.tpl');
	}
}