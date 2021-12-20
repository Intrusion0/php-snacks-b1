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
            'home team' => 'Anadolu Efes',
            'visiting team' => 'Stella Rossa',
            'home team points' => 75,
            'visiting team points' => 53
        ],
        [
            'home team' => 'Zalgiris',
            'visiting team' => 'Olimpia Milano',
            'home team points' => 78,
            'visiting team points' => 92
        ],
        [
            'home team' => 'ALBA Berlino',
            'visiting team' => 'Monaco',
            'home team points' => 66,
            'visiting team points' => 53
        ],
        [
            'home team' => 'Zenit',
            'visiting team' => 'Maccabi Tel Aviv',
            'home team points' => 90,
            'visiting team points' => 93
        ],
        [
            'home team' => 'Panathinaikos',
            'visiting team' => 'Olympiacos',
            'home team points' => 81,
            'visiting team points' => 78
        ],
        [
            'home team' => 'Lyon-Villeurbanne',
            'visiting team' => 'Fenerbahce',
            'home team points' => 82,
            'visiting team points' => 85
        ],
        [
            'home team' => 'Barcellona',
            'visiting team' => 'Unics',
            'home team points' => 73,
            'visiting team points' => 75
        ],
        [
            'home team' => 'Bayern Monaco',
            'visiting team' => 'Baskonia',
            'home team points' => 74,
            'visiting team points' => 85
        ],
        [
            'home team' => 'Real Madrid',
            'visiting team' => 'CSKA',
            'home team points' => 89,
            'visiting team points' => 54
        ],
    ];


    ?>
</head>
<body>
    
    <h1>Eurolega giornata 20 di 37</h1>

    <?php

        for ($i=0; $i < count($euroLega); $i++) { 
            echo '<div>' . $euroLega[$i]['home team'] . ' - ' . $euroLega[$i]['visiting team'] . ' | ' . $euroLega[$i]['home team points'] . '-' . $euroLega[$i]['visiting team points'] . '</div>';
        }

    ?>

</body>
</html>