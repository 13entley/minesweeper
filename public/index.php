<?php
require '../bootstrap/bootstrap.php';

function getControllerActionFromRequest()
{    // initialize $routes as an empty array
    $routes = [];
    // includes the file with the routes
    include ROUTES_DIR. '/web.php';
    // at this point $routes includes the array from web.php

    // get the current route parameter or redirects to homepage
    $current_route = request::get('route', 'homepage');

    // if the retrieved value of $route exists within the list of $routes
    if(array_key_exists($current_route, $routes))
    {
        // return the value from $routes
        return $routes[$current_route];
    }
    else   // otherwise
    {
        // return the errorController's error404 action
        return [
            'controller' => 'errorController',
            'action' => 'error404'
        ];
     }
//    var_dump($routes);
}
// run an action of a controller
function runControllerAction($controller_name, $action_name)
{
    //display the list of games
    require APP_DIR . '/controllers/'.$controller_name.'.php';  //including the controller file
    $controller = new $controller_name();  //creating a new object and assigning it to $controller
    echo $controller->$action_name();
}

$controller_action = getControllerActionFromRequest();

var_dump($controller_action);

runControllerAction($controller_action['controller'], $controller_action['action']);


$current_route = request::get('route','404');

if($current_route == '404')
{
    require APP_DIR . '/controllers/errorController.php';  //including the controller file
    $controller = new errorController();  //creating a new object and assigning it to $controller
    echo $controller->error404();
}






//
//echo PUBLIC_DIR.'<br>';
//echo __DIR__.'<br>';
//echo __FILE__.'<br>';
//echo __LINE__.'<br>';


//echo request::get('route', '404<br>');
//
//
//echo 'I will be playing '. request::get('name', 'with my hands');
//
