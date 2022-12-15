<?php

require_once('Monlite.php');

$Monlite = new Monlite();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monlite</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
        if (isset($_GET['layout'])) {
            $layout = $_GET['layout'] . '.php';
            if (file_exists('layout/' . $layout)) {
                include_once('layout/' . $layout);
            } else {
                include_once('layout/aktif.php');
            }
        } else {
            include_once('layout/aktif.php');
        }
    ?>

    <?php include_once('partial/navbar.php'); ?>

    <script src="script.js"></script>

</body>

</html>