<?php
/*
 ## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60
 */

 $macthes = [
    'match1' => [
        'homeTeam' => 'milano',
        'otherTeam' => 'vicenza',
        'homeTeamScore' => '50',
        'otherTeamScore' => '35'
    ],
    'match2' => [
        'homeTeam' => 'roma',
        'otherTeam' => 'napoli',
        'homeTeamScore' => '40',
        'otherTeamScore' => '43'
    ],
    'match3' => [
        'homeTeam' => 'rimini',
        'otherTeam' => 'bologna',
        'homeTeamScore' => '60',
        'otherTeamScore' => '30'
    ],
    'match4' => [
        'homeTeam' => 'bari',
        'otherTeam' => 'catania',
        'homeTeamScore' => '80',
        'otherTeamScore' => '80'
    ]
    ];







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>
<body>

        <div class="container">

            <h1 class="text-center mt-5">MATCH RESULTS</h1>

            <?php foreach ($macthes as $key => $value) : ?>
                <?php foreach ($value as $info => $result) : ?>
                 <?= $result; ?>
                <?php endforeach ?>
                <?php endforeach; ?>
            

        </div>
    
</body>
</html>