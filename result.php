<?php
$text = $_GET['testo']
$badword = $_GET['badword']
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
        <p>
            <?php echo $text ?>
        </p>
        <!-- stampo la badword (secondo metodo) -->
        <p>
            <?= $badword ?>
        </p>

    </div>
</body>
</html>