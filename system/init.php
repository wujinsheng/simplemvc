<?php

// DIR
define('DIR_APPLICATION', APP_ROOT.'/app/');
define('DIR_SYSTEM', APP_ROOT.'/system/');
define('DIR_LANGUAGE', APP_ROOT.'/app/language/');
define('DIR_TEMPLATE', APP_ROOT.'/app/view/theme/');

// Error Reporting
error_reporting(E_ALL);

if (!ini_get('date.timezone')) {
	date_default_timezone_set('UTC');
}

// Autoloader
function autoload($class) {
	$file = DIR_SYSTEM . 'library/' . str_replace('\\', '/', strtolower($class)) . '.php';

	if (file_exists($file)) {
		include(($file));

		return true;
	} else {
		return false;
	}
}

spl_autoload_register('autoload');
spl_autoload_extensions('.php');

// Core engine
require_once( (DIR_SYSTEM . 'core/action.php'));
require_once( (DIR_SYSTEM . 'core/controller.php'));

require_once( (DIR_SYSTEM . 'core/front.php'));
require_once( (DIR_SYSTEM . 'core/loader.php'));
require_once( (DIR_SYSTEM . 'core/model.php'));
require_once( (DIR_SYSTEM . 'core/bus.php'));

// Helper
