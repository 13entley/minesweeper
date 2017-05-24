<?php
/**
 * Created by PhpStorm.
 * User: 13entley
 * Date: 5/24/17
 * Time: 3:13 PM
 */

$routes = [
    // for the array of routes

    //route to games list
    'games' =>
        [
    'controller' => 'gamesController',
    'action' => 'listing'
        ],

    //route to homepage
    'homepage' =>
        [
            'controller'=> 'indexController',
            'action' => 'index'
        ]
];