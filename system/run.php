<?php
// Bus
$bus = new Bus();

// Loader
$loader = new Loader($bus);
$bus->set('load', $loader);

// Config
$config = new Config();
$bus->set('config', $config);

// Database
$dbconfig = array(
	'server' => DB_HOSTNAME,
	'username' => DB_USERNAME,
	'password' => DB_PASSWORD,
	'database_name' => DB_DATABASE,
	'charset' => 'utf8',
	'database_type' => 'mysql'
);
$medoo = new Medoo($dbconfig);
$bus->set('db', $medoo);

// Request
$request = new Request();
$bus->set('request', $request);

// Response
$response = new Response();
$response->addHeader('Content-Type: text/html; charset=utf-8');
$response->setCompression($config->get('config_compression'));
$bus->set('response', $response);

// Front Controller
$controller = new Front($bus);

// Router
if (isset($request->get['route'])) {
	$action = new Action($request->get['route']);
} else {
	$action = new Action('common/home');
}

// Dispatch
$controller->dispatch($action, new Action('error/not_found'));

// Output
$response->output();
