<?php

// Routing
// Traitement des URLs et appel des actions

// 1. On recupère le controller via l'URL
if(!empty($_GET['controller']))
{
    $controller = $_GET['controller'];
}
else
{
    $controller = 'home'; // Contrôleur par défaut
}

// 2. On inclut le fichier de controller
$controllerClassName =  ucfirst($controller) . 'Controller'; // ex : HomeController
$controllerFilename = $controllerClassName . '.php'; // ex : HomeController.php

if(file_exists('../src/Controllers/' . $controllerFilename)){ // On vérifie que le fichier de controller existe
    require '../src/Controllers/' . $controllerFilename;
}
else
{
    require '../src/Controllers/ErrorController.php';
    $controllerInstance = new ErrorController();
    $controllerInstance->errorNotFound();
    exit;
}

// 3. On recupère l'action via l'URL
if(!empty($_GET['action']))
{
    $action = $_GET['action']; 
}
else
{
    $action = 'index'; // Action par défaut
}

// 4. On appel l'action
if(class_exists($controllerClassName) && method_exists($controllerClassName,$action))
{   
    $controllerInstance = new $controllerClassName();
    $controllerInstance->$action(); 
}
else
{
    require '../src/Controllers/ErrorController.php';
    $controllerInstance = new ErrorController();
    $controllerInstance->errorNotFound();
    exit;
}
