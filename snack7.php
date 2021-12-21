<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        div, h2 {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 22px;
        }

        h2 {
            margin: 15px 0;
            font-size: 30px;
        }

        span {
            margin: 10px 0;
        }
    </style>
    <?php

    // Snack#7
    // Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

    $school = [
        'Mario Lombardo' => [ 2, 5, 6, 7, 4, 6 ],
        'Luca Romano' => [ 6, 6, 10, 8, 5, 7 ],
        'Martina Mangogna' => [ 2, 4, 5, 2, 6, 8 ],
        'Giovanni Massi' => [ 10, 9, 8, 10, 9, 10 ],
        'Barbara Linate' => [ 7, 7, 5, 8, 5, 6 ],
        'Filippo Mangione' => [ 3, 6, 4, 6, 5, 9 ],

        // [ Altra possibilità di struttura dati
        //     'name' => 'Mario',
        //     'lastname' => 'Lombardo',
        //     'scores' => [ 2, 5, 6, 7, 4, 6 ]
        // ],
    ];

    $names = array_keys($school);

    ?>
</head>
<body>
    
    <h2>Alunni</h2>

    <div>

    <?php

        for ($i=0; $i < count($names); $i++) { 

            $name = $names[$i];
            $scores = $school[$name];

            $avg = 0;

            for ($y=0; $y < count($scores); $y++) { 

                $score = $scores[$y];
                $avg += $score;
            }
            $avg /= count($scores);

            echo '<span>' . $name . ': ' .round($avg, 1) . '/10 </span> <br>';
        }

    ?>

    </div>

</body>
</html>