<?php
require_once '../../model/database.php';

$controller = 'utilisateur';

// FrontController
if(!isset($_REQUEST['c']))
{
    //header('Location: /foragetoure/view/accueil.php'); 
    require_once "../../controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    // Choisir le controlleur et l'action a charger
    $controller = strtolower($_REQUEST['c']);
    $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instancier le controlleur
    require_once "../../controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Appel de l'action a effectuer
    call_user_func( array( $controller, $action ) );
}