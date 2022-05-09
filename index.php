<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start session
//session_start();

//Require the autoload File
require_once ('vendor/autoload.php');

//Create an instance of the base class
$f3 = Base::instance();
//echo gettype($f3); example of what type is $f3

//Define a default route /- root directory of the project
$f3->route('GET /', function(){
    echo "My Pets";
    $view = new Template();
    echo $view->render('views/pet-home.html');
});
//$f3->route('GET / order',function(){
//    echo "Order page";
//
//    $view = new Template();
//    echo $view->render('views/pet-order.html');
//});

//$f3->route('GET|POST / order2',function($f3){
//    // echo "Order page";
//    var_dump($_POST);
//    $_SESSION['pet'] = $_POST['pet'];
//    $_SESSION['color'] = $_POST['color'];
//
//
//    $view = new Template();
//    echo $view->render('views/pet-order2.html');
//
//});
//Run fat free
$f3->run();