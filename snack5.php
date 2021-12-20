<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
    <?php

    // Snack#5
    // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

    /* 
    
    --DONE  1. Creo una variabile che conterrà il testo => $text = 'x';
    --DONE  2. Utilizzo "explode()" per separare il testo ad ogni delimitatore che sarà il "." => explode('.', $text);
        --DONE  2.1 Utilizzo un ciclo che mi scorre all'interno della variabile che conterrà i vari paragrafi => for ($i = 0; $i < count($newText); $i++);
        --DONE  2.2 Stampo a schermo i nuovi paragrafi delimitati dal "." => echo '<p>' . $newText[$i] . '</p>';

    */

    $text = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quasi aliquid saepe et at, nulla voluptatum minima commodi consectetur eveniet ratione totam necessitatibus obcaecati unde, placeat doloremque vel soluta modi? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, facilis fugiat est, maiores hic rerum reprehenderit. voluptatibus molestiae culpa perspiciatis recusandae quasi expedita minima velit rem! Eius esse quos eveniet? Lorem ipsum, dolor sit amet consectetur. adipisicing elit. Ullam neque porro doloremque sapiente dolorum accusantium blanditiis voluptas aut fugiat iure optio aperiam nulla saepe provident, voluptatibus voluptate et quis doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe tempore voluptate placeat! Quibusdam unde eos magnam sint nisi architecto accusamus, quis vero culpa quod, quaerat modi delectus odit ut molestiae. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quasi aliquid saepe et at, nulla voluptatum minima commodi consectetur eveniet ratione totam necessitatibus obcaecati unde, placeat doloremque vel soluta modi? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, facilis fugiat est, maiores hic rerum reprehenderit. voluptatibus molestiae culpa perspiciatis recusandae quasi expedita. minima velit rem! Eius esse quos eveniet? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam neque porro doloremque sapiente dolorum accusantium blanditiis voluptas aut fugiat iure optio aperiam nulla saepe provident, voluptatibus voluptate et quis doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe tempore voluptate placeat! Quibusdam unde eos magnam sint nisi architecto accusamus, quis vero culpa quod, quaerat modi delectus odit ut molestiae. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque quasi aliquid saepe et at, nulla voluptatum minima commodi consectetur eveniet ratione totam necessitatibus obcaecati unde, placeat doloremque vel soluta modi? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, facilis fugiat est, maiores hic rerum reprehenderit. voluptatibus molestiae culpa perspiciatis recusandae quasi expedita minima. velit rem! Eius esse quos eveniet? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam neque porro doloremque sapiente dolorum accusantium blanditiis voluptas aut fugiat iure optio aperiam nulla saepe provident, voluptatibus voluptate et quis doloribus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe tempore voluptate placeat! Quibusdam unde eos magnam sint nisi architecto accusamus, quis vero culpa quod, quaerat modi delectus odit ut molestiae.'

    ?>
</head>
<body>
    
    <div>
        <?php

           $newText = explode('.', $text);
           
            for ($i = 0; $i < count($newText); $i++) { 
                echo '<p>' . $newText[$i] . '</p>';
            }

        ?>
    </div>

</body>
</html>