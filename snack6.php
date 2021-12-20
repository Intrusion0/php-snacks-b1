<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <style>

        * {
            margin: 0;
            padding:  0;
            box-sizing: border-box;
        }
        .teachers {
            background-color: gray;
        }

        .pm {
            background-color: green;
        }

        span {
            display: block;
            text-align: center;
            font-weight: 600;
            font-size: 30px;
            padding: 15px 0;
            border: solid 1px #fff;
        }
    </style>
    <?php

    // Snack#6
    // Utilizzare questo array: https://pastebin.com/CkX3680A . Stampiamo il nostro array mettendo gli insegnati in un rettangolo grigio e i PM in un rettangolo verde.

    
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    $keys = array_keys($db);

    ?>
</head>
<body>
    
    <?php

    for ($i = 0; $i < count($keys); $i++) { 
        $key = $keys[$i];
        $value = $db[$key];

        for ($j = 0; $j < count($value); $j++) { 

            if ($key == 'teachers') {
                echo '<div class="teachers"><span>' . $value[$j]['name'] . ' ' . $value[$j]['lastname'] . '</span></div>';
            } 
            
            if ($key == 'pm') {
                echo '<div class="pm"><span>' . $value[$j]['name'] . ' ' . $value[$j]['lastname'] . '</span></div>';
            }
        }
    }

    ?>

</body>
</html>