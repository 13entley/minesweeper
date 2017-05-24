<?php
/**
 * Created by PhpStorm.
 * User: 13entley
 * Date: 5/24/17
 * Time: 11:30 AM
 */

//    request class
class request
{
    public static function get($name, $default = null)
    {
//        if(isset($_REQUEST[$name]))
//        {
//            return $_REQUEST[$name];
//        }
//        else
//        {
//            return $default;
//        }
        return array_key_exists($name, $_REQUEST) ? $_REQUEST[$name] : $default;
    }
}