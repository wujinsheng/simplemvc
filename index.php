<?
// Application version;
define("VERSION", 1.0);

// Check PHP Version
if (version_compare(phpversion(), '5.4.0', '<') == true) {
	exit('You need to use PHP5.4+ for this application to work!');
}

//	App root directory
define('APP_ROOT', dirname(__FILE__));

// Configuration
if (is_file('app/config.php')) {
	require_once('app/config.php');
}
else die('no config file!');


// Initial
require_once( 'system/init.php');

// Run
require_once(DIR_SYSTEM . 'run.php');