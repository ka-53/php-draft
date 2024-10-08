<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>draft</title>
</head>
<body>
    <h1>bests footballer 2010-2020</h1>

    <?php 
        $footballer = [
            ["number" => 1, "name" => "C Ronaldo", "team" => "Real Madrid"],  
            ["number" => 2, "name" => "L Messi", "team" => "Barselona"],
            ["number" => 3, "name" => "L Modric", "team" => "Real Madrid"],
            ["number" => 4, "name" => "S Ramos", "team" => "Real Madrid"],
            ["number" => 5, "name" => "A Iniesta", "team" => "Barselona"],
            ["number" => 6, "name" => "KBD", "team" => "Man City"],
            ["number" => 7, "name" => "Neymar", "team" => "PSJ"],
            ["number" => 8, "name" => "H Kane", "team" => "Tottenhem H"],
            ["number" => 9, "name" => "T Kross", "team" => "Real Madrid"],
            ["number" => 10, "name" => "T Muller", "team" => "Bayern"],
        ];

        function filter($footballer) {
            $x = [];
            foreach ($footballer as $f){
                if ($f["number"] == 1 || $f["number"] == 2 || $f["number"] == 3){
                $x [] = $f;
            }
            }
            return $x;
        }
     ?>
<ul>
    <?php foreach (filter($footballer) as $f): ?>
        
            <li>
                    <?php echo $f["name"] . ' - ' . $f["team"]; ?>
            </li>
    <?php endforeach; ?>
</ul>   
</body>
</html>
