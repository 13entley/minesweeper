<?php
/**
 * Created by PhpStorm.
 * User: 13entley
 * Date: 5/24/17
 * Time: 2:38 PM
 */

class errorController
{
    public function error404()
    {
        return '404: page not found, darling';
    }
    public function error500()
    {
        return '500: Did Tom code this website?';
    }
}

