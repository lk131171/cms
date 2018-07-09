<?php
use phalcon\Loader;
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

