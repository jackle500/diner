<?php
/*
 * Huy Le
 * January 2024
 *  https://huyle.greenriverdev.com/328/diner/
 * This is my CONTROLLER for the Diner App
 * */

//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

    echo "My Diner";

//Require the autoload file
require_once ('vendor/autoload.php');

//Instantiate Fat-Free framework (F3)
$f3 = Base::instance(); //static method

//define a default route
$f3->route('GET /', function(){
   echo"My Diner";
});
//run fat-free
$f3->run();

