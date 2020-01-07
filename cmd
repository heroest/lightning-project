<?php

require 'vendor/autoload.php';
define('BASE_PATH', dirname(__FILE__));

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    throw new ErrorException($errstr, $errno, E_RECOVERABLE_ERROR, $errfile, $errline);
});

use Lightning\Console\Application;

$app = new Application();
$app->setApp('App\\', BASE_PATH . '/app');
$app->run();
