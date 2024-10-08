<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="stylex.css">
</head>
<body>
    <h1> Footballers</h1>

    <?php 
    $footballer = [ 
        ["name" => "C Ronaldo", "age" => 39, "club" => "Al Nasr", "national" => "Portugal"],
        ["name" => "L Messi", "age" => 36, "club" => "Inter Maiami", "national" => "Argentina"],
        ["name" => "Neymar", "age" => 34, "club" => "Arabia", "national" => "Brazil"],
        ["name" => "Holland", "age" => 23, "club" => "Man City", "national" => "Norway"],
        ["name" => "Mbappe", "age" => 25, "club" => "Real Madrid", "national" => "France"],
    ];

    function f($footballer){
        return $footballer;

    }

    ?>
<ul>
    <?php foreach (f($footballer) as $x): ?>
        <li>
            <?php echo $x["name"] . " - " . $x["age"]; ?>
        </li>
        <?php endforeach; ?>


</ul>

</body>
</html>