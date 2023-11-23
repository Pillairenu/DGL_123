<?php
//$uri = str_replace('/DGL_123/milestone_3/', '', $_SERVER['REQUEST_URI']);
$uri =parse_url($_SERVER['REQUEST_URI'])['path'];



$routes=[

    '/DGL_123/milestone_3/'=>'controllers/index.php',
    '/DGL_123/milestone_3/signin'=>'controllers/signin.php',
    '/DGL_123/milestone_3/signup'=>'controllers/signup.php',
    '/DGL_123/milestone_3/rooms'=>'controllers/rooms.php',
    '/DGL_123/milestone_3/house'=>'controllers/house.php',
    '/DGL_123/milestone_3/apartment'=>'controllers/apartment.php',
    '/DGL_123/milestone_3/room-details'=>'controllers/room-details.php',
    '/DGL_123/milestone_3/favorite'=>'controllers/favorite.php',
    '/DGL_123/milestone_3/property'=>'controllers/add_property.php',
    '/DGL_123/milestone_3/bookings'=>'controllers/view_bookings.php',
    '/DGL_123/milestone_3/logout'=>'controllers/logout.php'


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