<?php
use Phalcon\Loader;
use Phalcon\Di\FactoryDefault();
// Define some absolute path constants to aid in locating resources
define('BASE_PATH', dirname(__DIR__). '/');
define('APP_PATH', BASE_PATH. 'app/');
// Register AutoLoaders
$loader = new Loader();
$loader->registerDirs(
    [
        APP_PATH. 'controllers/',
        APP_PATH. 'models/',
    ]
)->register();
// Create a di
$di = new FactoryDefault();
// Setup the view component
$di->set('view', function () {
    $view = new \Phalcon\Mvc\View();
    $view->setViewsDir(APP_PATH. 'views');
    return $view;
});
$di->set('url', function () {
    $url = new \Phalcon\Mvc\Url();
    $url->setBaseUri('/cms/');
    return $url;
});
$application = new \Phalcon\Mvc\Application($di);
try {
    // Handle the request
    $response = $application->handle();
    $response->send();
} catch (\Exception $e) {
    echo 'Exception: ', $e->getMessage();
}
