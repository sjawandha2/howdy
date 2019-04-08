<?php
/**
 * Name: Sukhveer S Jawandha
* 4/8/2019
* 328/howdy/index.php
 */

//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require autoload file
require_once ('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /' , function (){
    echo '<h1>Hello Howdy</h1>';
});


//Run Fat-Free
$f3->run();