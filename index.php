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

echo $_SERVER['REQUEST_URI'];
require "views/index.view.php";
