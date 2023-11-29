<?php

// Include the configuration file
include('config.php');

//$uri = str_replace('/DGL_123/milestone_3/', '', $_SERVER['REQUEST_URI']);
$uri =parse_url($_SERVER['REQUEST_URI'])['path'];



$routes=[

    $proj_root.'/'=>'controllers/index.php',
    $proj_root.'/signin'=>'controllers/signin.php',
    $proj_root.'/signup'=>'controllers/signup.php',
    $proj_root.'/rooms'=>'controllers/rooms.php',
    $proj_root.'/house'=>'controllers/house.php',
    $proj_root.'/apartment'=>'controllers/apartment.php',
    $proj_root.'/room-details'=>'controllers/room-details.php',
    $proj_root.'/favorite'=>'controllers/favorite.php',
    $proj_root.'/property'=>'controllers/add_property.php',
    $proj_root.'/bookings'=>'controllers/view_bookings.php',
    $proj_root.'/logout'=>'controllers/logout.php'


];



function routeToController($uri,$routes)
{

    if(array_key_exists($uri,$routes))
    {
        require $routes[$uri];
    }
    else
    {

        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    
    require "views/{$code}.php";
    die();
}

routeToController($uri,$routes);
?>