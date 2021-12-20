<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <style>
        h1, div {
            display: flex;
            justify-content: center;
        }

        div {
            margin: 15px 0;
            font-size: 22px;
        }
    </style>
    <?php

    // Snack#1
    // Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema => Olimpia Milano - Cantù | 55-60

    /* Snack#1

    --DONE  1. Creo un array contenente le partite di basket. => $euroLega = [];
        --DONE  1.1 Ogni partita (array) conterrà una squadra di casa, una squadra ospite e i loro punti. [ squadra di casa => '', squadra ospite => '', punti squadra di casa => x, punti squadra ospite => y];
    --DONE  2. Creo un ciclo che scorre all'interno dell'array contenente tutte le partite => for ($i = 0; $i < count($euroLega); $i++);
        --DONE  2.1 All'interno del ciclo stampo la partita iesima con tutte le varie informazioni => echo $euroLega[i]['squadra ospite'] e così via.

    */

    $euroLega = [
        [
            'homeTeam' => 'Anadolu Efes',
            'visiting team' => 'Stella Rossa',
            'homeTeamPoints' => 75,
            'visitingTeamPoints' => 53
        ],
        [
            'homeTeam' => 'Zalgiris',
            'visiting team' => 'Olimpia Milano',
            'homeTeamPoints' => 78,
            'visitingTeamPoints' => 92
        ],
        [
            'homeTeam' => 'ALBA Berlino',
            'visiting team' => 'Monaco',
            'homeTeamPoints' => 66,
            'visitingTeamPoints' => 53
        ],
        [
            'homeTeam' => 'Zenit',
            'visiting team' => 'Maccabi Tel Aviv',
            'homeTeamPoints' => 90,
            'visitingTeamPoints' => 93
        ],
        [
            'homeTeam' => 'Panathinaikos',
            'visiting team' => 'Olympiacos',
            'homeTeamPoints' => 81,
            'visitingTeamPoints' => 78
        ],
        [
            'homeTeam' => 'Lyon-Villeurbanne',
            'visiting team' => 'Fenerbahce',
            'homeTeamPoints' => 82,
            'visitingTeamPoints' => 85
        ],
        [
            'homeTeam' => 'Barcellona',
            'visiting team' => 'Unics',
            'homeTeamPoints' => 73,
            'visitingTeamPoints' => 75
        ],
        [
            'homeTeam' => 'Bayern Monaco',
            'visiting team' => 'Baskonia',
            'homeTeamPoints' => 74,
            'visitingTeamPoints' => 85
        ],
        [
            'homeTeam' => 'Real Madrid',
            'visiting team' => 'CSKA',
            'homeTeamPoints' => 89,
            'visitingTeamPoints' => 54
        ],
    ];


    ?>
</head>
<body>
    
    <h1>Eurolega giornata 20 di 37</h1>

    <?php

        for ($i=0; $i < count($euroLega); $i++) { 
            echo '<div>' . $euroLega[$i]['homeTeam'] . ' - ' . $euroLega[$i]['visiting team'] . ' | ' . $euroLega[$i]['homeTeamPoints'] . '-' . $euroLega[$i]['visitingTeamPoints'] . '</div>';
        }

    ?>

</body>
</html>