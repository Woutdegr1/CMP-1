<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump($_SESSION);
        echo "<p>Welkom " . $_SESSION["naam"] . "</p>";
        echo "<p>" . $_SESSION["woonplaats"] . "</p>";
    ?>
</body>
</html>