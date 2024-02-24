<?php
$text = $_GET['testo'];
$badword = $_GET['badword'];
$full_text= $text . $badword;

$text_lenght= strlen($full_text);
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
            <h2>Paragrafo</h2>
            <p>
                <?php echo $full_text ?>
            </p>

            <p>
                <h3>Lunghezza: </h3>
                <?= $text_lenght ?>
            </p>

        </div>

        <!-- stampo la badword (secondo metodo) -->
        <div class="container mb-3">
            <h2>Badword</h2>
            <p>
                <?= $badword ?>
            </p>
        </div>

    </div>
</body>
</html>