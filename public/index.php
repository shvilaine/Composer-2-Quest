<?php

require '../vendor/autoload.php';

Use Wild\App\Hello;
$hello = new Wild\App\Hello;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composer - Challenge 2</title>
</head>
<body>
    <?= $hello->talk(); ?>
</body>
</html>