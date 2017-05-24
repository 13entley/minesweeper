<?php
require '../bootstrap/bootstrap.php';

//
//echo PUBLIC_DIR.'<br>';
//echo __DIR__.'<br>';
//echo __FILE__.'<br>';
//echo __LINE__.'<br>';


echo request::get('route', '404<br>');


echo 'I will be playing '. request::get('name', 'with my hands');


