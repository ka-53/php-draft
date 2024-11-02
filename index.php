<?php
require 'functions.php';
require 'Database.php';


$db = new DataBase();
$posts = $db->query("select *  from users");



foreach ($posts as $p){
    echo "<li>" . htmlspecialchars($p['title']) . "</li>";
}

