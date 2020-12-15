<?php
// leggo la badword dalla query string
$name = $_GET['name'];

//titolo
$title = "Censuratore";

// paragrafo generico
$frase = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
//lunghezza paragrafo originale
$frase_lenght= strlen($frase);

// sostituisco la parola da censurare
$censored_frase = str_replace($name, '***', $frase);
//lunghezza paragrafo censurato
$censored_frase_lenght= strlen($censored_frase);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-badwords</title>
    </head>
    <body>
        <h1>
            <?php echo strtoupper($title); ?>
        </h1>

        <pre>
        <p><?php echo 'Paragrafo non censurato: '.$frase.' [Lunghezza:'.$frase_lenght.']'; ?></p>
        <p><?php echo 'Paragrafo censurato: '.$censored_frase.' [Lunghezza:'.$censored_frase_lenght.']'; ?></p>

        </pre>

    </body>
</html>
