<?php

//Error Reporting On
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Requires the autoload
require_once('vendor/autoload.php');

//Creates an instance of the Base class
$f3 = Base::instance();

//Creates the route
$f3->route('GET /', function (){
    echo "Howdy!";
});

//Runs Fat-Free
$f3->run();

?>