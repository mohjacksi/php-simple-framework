<?php

/* 
    bootstrap:
        1.load config
        2.make database connection
        3.make query builder
        returns query builder
*/

require('core/bootstrap.php');

// Router object to have it for redirecting URI to our controllers
$router = new Router;

// Load our routes associative array
// require('routes.php'); -> changed to line 29

// Get the URI from our $_SERVER variable with trim '/'

/* 
    Calling direct function on the $uri we have
    then find it's controller from $router
    when we get the Controller name, then 'require' it!
*/
// require $router->direct($uri); -> changed to line 29

require Router::load('routes.php')
    ->direct(Request::uri());
