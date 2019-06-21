<?php 

use Phalcon\Loader;
use Phalcon\Di\FactoryDefault;

use Phalcon\Mvc\View;
use Phalcon\Mvc\Url as UrlProvider;
use Phalcon\Mvc\Application;

use Phalcon\Flash\Direct as FlashDirect;


define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', BASE_PATH . '/app');


$loader = new Loader();
$loader->registerDirs([
	APP_PATH . '/controllers/',
	APP_PATH . '/models/',
]);

$loader->register();

$di = new FactoryDefault();

$di->set('view', function () {
	$view = new View();
	$view->setViewsDir(APP_PATH . '/views/');
	return $view;
});

$di->set('url', function () {
	$url = new UrlProvider();
	$url->setBaseUri('/');
	return $url;
});

$di->set('flash', function () {
	$flash = new FlashDirect([
		'error' => 'alert alert-danger',
		'success' => 'alert alert-success',
		'notice' => 'alert alert-notice',
		'warning' => 'alert alert-warning'
	]);
	return $flash;
});

$application = new Application($di);

try{
	$response = $application->handle();
	$response->send();	
} catch (\Exception $e) {
	echo "<h2>" . $e->getMessage() . "</h2>";
}