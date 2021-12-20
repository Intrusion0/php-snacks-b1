<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
    <style>

        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        span {
            color: blue;
            font-weight: 900;
        }
    </style>
    <?php

    // Snack#4
    // Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
    
    /* 
    
    --DONE  1. Creo un array vuoto => $numRandom = [];
    --DONE  2. Genero 15 numeri casuali e univoci
        --DONE  2.1 Utilizzo un ciclo while che verrà eseguito finchè non l'array non conterrà 15 numeri random univoci. => while ();
        --DONE  2.2 Creo una condizione all'interno del ciclo while per controllare se il numero è univoco => if (!in_array($number, $numRandom))
            --DONE  2.3 Se è vero, quindi il numero sarà univoco e successivamente lo pusho all'interno dell'array creato precedentemente => $numRandom[] = $number;

    */

    $numRandom = [];

    ?>
</head>
<body>
    
    <h1>15 numeri casuali univoci</h1>
    
    <?php

        while (count($numRandom) < 15) {
            $number = rand(1, 100);

            if (!in_array($number, $numRandom)) {
                $numRandom[] = $number;
            }
        }
        
        for ($i = 0; $i < count($numRandom); $i++) { 
            echo '<div>Numero ' . $i . ': <span>' . $numRandom[$i] . '</span>' . '</div><br>';
        }

    ?>

</body>
</html>