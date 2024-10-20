<?php
require 'functions.php';

$a = $_SERVER['REQUEST_URI'];


if ($a === "/draft/" || $a === "/draft/index" || $a === "/draft/index/") {
    require "controllers/index.php";
} else if ($a === "/draft/about" || $a === "/draft/about/") {
    require "controllers/about.php";
} else if ($a === "/draft/contact" || $a === "/draft/contact/") {
    require "controllers/contact.php";
} else {
    echo "error";
}
