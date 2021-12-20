<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 24px;
        }

        input {
            margin: 5px 0 25px;
            width: 12%;
        }

        input:last-child {
            width: auto;
        }

        label:first-child {
            margin-top: 30px;
        }

        div:last-child {
            display: flex;
            justify-content: center;
            font-size: 20px;
            font-weight: 600;
        }
    </style>
    <?php

    // Snack#2
    // Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"

    /*
    
    --DONE  1. Creo un form con metodo "GET" => <form method="get">
        --DONE  1.1 Creo un input per il name, uno per l'email e un altro per l'età => <input type="x" id="x" name="x">
    --DONE  2. Creo una condizione per ogni inputbox
        --DONE  2.1 Riguardo al nome utilizzo la funzione "strlen" che mi restituisce la lunghezza della stringa, quindi => if (strlen($name > 3))
            --DONE  2.1.1 Se la condizione è vera, mi ritornerà true, altrimenti false.
        --DONE  2.2 Riguardo all'email utilizzo la funzione "str_contains" (che è disponibile dalla versione 8.0 di PHP), quindi => if ((str_contains($mail, '@')) && (str_contains($mail, '.')))
            --DONE  2.1.1 Se la condizione è vera, mi ritornerà true, altrimenti false.
        --DONE  2.3 Riguardo all'età utilizzo la funzione "is_numeric" che mi restituisce True (1) se il valore è un numero o una stringa contenente un numero, quindi => if (is_numeric($age))
            --DONE  2.1.1 Se la condizione è vera, mi ritornerà true, altrimenti false.
    --DONE  3. Una volta verificato il tutto dovrò fare un ulteriore condizione e controllare se la variabile $result sia true o false => if ($result == true)
        --DONE  3.1 Se $result è true, stamperò a schermo: "Accesso riuscito".
        --DONE  3.2 Se $result è false, stamperò a schermo: "Accesso negato".
        

    */
    
    $name = $_GET['name'];
    $mail = $_GET['email'];
    $age = $_GET['age'];
    $resultName = false;
    $resultMail = false;
    $resultAge = false;

    ?>
</head>
<body>
    <div> <!-- Versione avanzata -->
        <form action="" method="get">
            <label for="">Inserisci il tuo nome</label>
            <input type="text" id="name" name="name"> <!-- name -->
            <label for="">Inserisci la tua email</label>
            <input type="email" id="email" name="email"> <!-- email -->
            <label for="">Inserisci i tuoi anni</label>
            <input type="number" id="age" name="age"> <!-- age -->
            <input type="submit"> <!-- Button submit -->
        </form>
    </div>
    <div>
        <?php
            if (strlen($name) > 3) {
                $resultName = true;
            }
            
            if ((str_contains($mail, '@')) && (str_contains($mail, '.'))) { // (str_contains) Versione PHP minima 8.0
                $resultMail = true;
            }

            if (is_numeric($age)) { // La funzione is_numeric() controlla se una variabile è un numero o una stringa numerica. | restituisce true (1) se la variabile è un numero
                $resultAge = true;
            }

            if ($resultName == true && $resultMail == true && $resultAge == true) {
                echo 'Accesso riuscito';
            } else {
                echo 'Accesso negato';
            }
        ?>
    </div>
</body>
</html>