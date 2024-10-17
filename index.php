<?php
 require 'functions.php';

 //echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "<br>";


 $a = $_SERVER['REQUEST_URI'];

 if ($a === "/draft/" || $a === "/draft/index"){
    require "controllers/index.php";

 }else if($a === "/draft/about") {
    require "controllers/about.php";
 }else if($a === "/draft/contact") {
    require "controllers/contact.php";
 }else{
    echo "error";
 }
