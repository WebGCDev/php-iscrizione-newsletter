<?php
include __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN link/script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- /Bootstrap CDN link -->
    <title>PHP Iscrizione Newsletter</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for="mail">Inserisci qui la tua e-mail</label>
        <input type="text" id="mail" name="mail">
        <button class="btn btn-info">Invia</button>
        <p><?php echo $joinmail ?></p>
    </form>
</body>

</html>