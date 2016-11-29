<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $_SESSION["naam"] = "Evelien";
        $_SESSION["woonplaats"] = "Melle";
        echo "sessies zijn aangemaakt.";
    ?>
</body>
</html>