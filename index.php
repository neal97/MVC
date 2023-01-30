<?php

require_once('./utils/autoload.php');


// instances
$controller = new controller\Controller;
$livre = new livreController\LivreController;

// ROUTE

$route = isset($_GET['route']) ? $_GET['route'] : NULL;

// ROUTEUR

switch($route)
{
    case 'livre':
       $livre->index();
        break;
     
     default:
     $controller->index();
    break;
}