<?php
$text = $_GET['testo'];
$badword = $_GET['badword'];

// lunghezza paragrafo
$text_lenght= strlen($text);

// testo censurato
$censored_text = str_replace($badword, '***', $text);
$censored_text_lenght = strlen($censored_text)




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    <div class="container">

        <!-- stampo il paragrafo -->
        <div class="container mb-3">
            <h2>Testo</h2>
            <p>
                <?php echo $text ?>
            </p>

            <p>
                <h3>Lunghezza: </h3>
                <?= $text_lenght ?>
            </p>

        </div>

        <hr>

        <!-- stampo il testo censurato (secondo metodo) -->
        <div class="container mb-3">
            <h2>Testo Censurato</h2>
            <p>
                <?= $censored_text ?>

            </p>
            
            <p>
                <h3>Lunghezza: </h3>
                <?= $censored_text_lenght ?>

            </p>

        </div>

    </div>
</body>
</html>