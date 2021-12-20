<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
    <style>

        body {
            display: flex;
            justify-content: center;
        }

        div {
            margin: 10px 0;
            font-weight: 600;
            font-size: 25px;
        }
        span {
            display: block;
            font-weight: 400;
            font-size: 20px;
        }

        h2 {
            font-size: 30px;
        }
    </style>
    <?php

    // Snack#3
    // Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. => Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z

    /*

    --DONE  1. Creo l'array di array => $posts = [ 'x' => ['y' => 'z'] ];
    --DONE  2. Creo un ciclo che scorre all'interno dell'array principale => for ($i = 0; $i < count($posts); $i++);
        --DONE  2.1 Mi trovo le chiavi tramite => array_keys($posts);
        --DONE  2.2 Stampo la chiave che indica la data => echo '<h2>' . $key . '</h2><br>';
    --DONE  3. Successivamente creo un ciclo che mi scorre all'interno dell'array che contiene il post => for ($j = 0; $j < count($value) ; $j++)
        --DONE  3.1 Mi trovo le chiavi anche qui con => array_keys($keyPost);
    --DONE  4. Una volta trovate le chiavi all'interno dell'ultimo array, mi estrapolo il valore tramite un altro ciclo => for ($a = 0; $a < count($valuePost); $a++)
        --DONE 4.1 Una volta estrapolato la chiave mi stampo il contenuto => $details = $keyPost[$nameKeyPost];
        --DONE 4.2 Stampo il contenuto => echo '<span>' . $nameKeyPost . ': ' . $details . '</span><br>';

    */

    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Luca Bentiveglia',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Mario Lombardo',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Giovanni Rossi',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Vittorio Glorioso',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Filippo Mangione',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    $keys = array_keys($posts);

    ?>
</head>
<body>
    <div>
        <?php

            for ($i = 0; $i < count($keys); $i++) { 
                $key = $keys[$i];
                $value = $posts[$key];
                echo '<h2>' . $key . '</h2> <br>';

                for ($j = 0; $j < count($value) ; $j++) { 
                    $keyPost = $value[$j];

                    $valuePost = array_keys($keyPost);
                    echo '<div>' . 'Post n: ' . $j + 1 . '</div> <br>';

                    for ($a = 0; $a < count($valuePost); $a++) { 
                        $nameKeyPost = $valuePost[$a];
                        $details = $keyPost[$nameKeyPost];
                        echo '<span>' . $nameKeyPost . ': ' . $details . '</span> <br>';
                    }
                }

                
                
            }
            
        ?>
    </div>
</body>
</html>