<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>
   top best films ever
</h1>

<?php

$film = [
            [
                    "name" => "Citizen Kane",
                    "year" => 1941,
                    "diretor" => "Orson Welles"
            ],
        ["name" => "The Godfather", "year" => 1972,"diretor" => "Francis Ford Coppola"],
        ["name" => "Casablanca", "year" => 1942,"diretor" => "Michael Curtizs"],
        ["name" => "The Lord of the Rings", "year" => 2003,"diretor" => "Peter Jackson"],
        ["name" => "Inception", "year" => 2010,"diretor" => "Christopher Nolan"],
        ["name" => "The Dark Knight", "year" => 2008,"diretor" => "Christopher Nolan"],
        ["name" => "Spirited Away", "year" => 2001,"diretor" => "Hayao Miyazaki"],
        ["name" => "There Will Be Blood", "year" => 2007,"diretor" => "Paul Thomas Anderson"],
        ["name" => "No Country for Old Men", "year" => 2007,"diretor" => "Joel and Ethan Coen"],
        ["name" => "The Social Network", "year" => 2010,"diretor" => "David Fincher"],
        ["name" => "Parasite", "year" => 2019,"diretor" => "Bong Joon-ho"],
        ["name" => "Mad Max: Fury Road", "year" => 2015,"diretor" => "George Miller"],
];

$filter = function ($film){
    $filterfilms = [];

    foreach ($film as $films) :
        if ($films["diretor"] === "Christopher Nolan"):
            $filterfilms [] = $films;
        endif;
        endforeach;

        return $filterfilms;
};




?>
<ul>
    <?php foreach ($filter($film) as $films) : // $films - это массив, содержащий данные о фильмах ?>
        <?php if ($films["year"] >= 2000): ?>
            <li>
                <?php echo $films["name"] . ' ' . $films["year"]; ?>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>



</body>
</html>
