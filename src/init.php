<?php

use App\System\PrimitiveRoutes;

spl_autoload_register(function ($className) {
    if (str_starts_with($className, 'App\\') === true) {
        $className = substr($className, strlen('App\\'));
    }
    $file = '/application/src/' . str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)) {
        require $file;
    } else {
        throw new Exception('Class not found: ' . $className . ' (' . $file . ')');
    }
});

error_reporting(E_ALL);
ini_set('display_errors', 1);

$route = explode('?', $_SERVER['REQUEST_URI'])[0];
try {
    PrimitiveRoutes::invokeRoute($route);
} catch (Exception $e) {
    http_response_code($e->getCode());
    echo $e->getMessage();
}
