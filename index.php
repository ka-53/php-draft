<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$home = 'Home';
function dd($value){
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";

    die();
}


require "views/index.view.php";
