<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION['naam'])){
        echo $_SESSION['naam'];
    }else{
        echo "Sessie bestaat nog niet";
    }
    ?>
</body>
</html>