<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>POST en GET</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Naam: <input type="text" name="voornaam">
    <input type="submit">
</form>

    <?php 
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $voornaam = $_POST['voornaam'];

            if(!empty($voornaam)){
                echo $voornaam . "<br>";
            }else{
                echo "Vul een naam in <br>";
            }
        } 
    ?>

    <a href="postget.php?campus=Mariakerke&school=Artevelde">LINK GET</a>
    <?php
    if(isset($_GET['campus'])){
        echo "<br>Mijn campus: {$_GET['campus']} <br>
            Mijn school: {$_GET['school']} ";
    }
    //if(!empty($_GET['campus'])){}
    ?>
</body>
</html>