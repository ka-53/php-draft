<?php
function dd($x){
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";

    die();
}

function url($x){
    return $_SERVER['REQUEST_URI'] === "/$x";
}
