

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
   
<ul>
    <?php foreach (f($footballer) as $x): ?>
        <li>
            <?php echo $x["name"] . " - " . $x["age"]; ?>
        </li>
        <?php endforeach; ?>


</ul>

</body>
</html>