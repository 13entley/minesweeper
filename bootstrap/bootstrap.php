<?php
/**
 * Created by PhpStorm.
 * User: 13entley
 * Date: 5/24/17
 * Time: 11:01 AM
 */
//defining constants

define('SYSTEM_DIR', __DIR__ . '/..'); // defines the root folder of application
define('PUBLIC_DIR', SYSTEM_DIR . '/public'); // the publicly accessible folder
define('VENDOR_DIR', SYSTEM_DIR .'/vendor'); // the folder for vendor modules
define('APP_DIR', SYSTEM_DIR .'/app');// the code for our application
define('ROUTES_DIR', SYSTEM_DIR .'/routes'); // contains lists of routes

// require all necessary libraries
require_once VENDOR_DIR.'/codingbootcamp/tinymvc/request.php';

