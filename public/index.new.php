<?php

define('BASE_PATH','../');

$controller = !empty($_GET['controller']) ? $_GET['controller'] : 'home';
$action = !empty($_GET['action']) ? $_GET['action'] : 'index';
while (true) {
    $controllerFilename = $controller . '.controller.php';
    if(!file_exists(BASE_PATH . 'src/Controllers/'. $controllerFilename))
    {
        $controller = 'error';
        $action = 'errorNotFound';
    }
    else
    {
        require BASE_PATH . 'src/Controllers/'. $controllerFilename;

        if(!function_exists($action))
        {
            $controller = 'error';
            $action = 'errorNotFound';
        }
        else
        {
            $action();
            break;
        }
    }
}




