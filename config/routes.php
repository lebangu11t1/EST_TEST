<?php

$controllers = array(
    'works' => [
        'index',
        'create',
        'error',
        'showCreate',
        'showEdit',
        'edit',
        'delete'
    ],
);

if (!array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
    $controller = 'works';
    $action     = 'error';
}

include_once('controllers/' . $controller . 'Controller.php');
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();