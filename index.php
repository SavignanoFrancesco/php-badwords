<?php
// leggo la badword dalla query string
$name = $_GET['name'];

//titolo
$title = "Censuratore";

// paragrafo generico
$frase = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

// sostituisco la parola da censurare
$censored_frase = str_replace($name, '***', $frase);

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
        <p><?php echo 'Paragrafo non censurato: '.$frase; ?></p>
        <p><?php echo 'Paragrafo censurato: '.$censored_frase; ?></p>

        </pre>

    </body>
</html>
