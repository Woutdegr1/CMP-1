<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Insert data!</title>
</head>
<body>
    <form action="insertform.php" method="post">
        <p> Familienaam: <input type="text" name="familienaam"> </p>
        <p> Voornaam:  <input type="text" name="vnaam"> </p>
        <p> Email: <input type="text" name="email"> </p>
        <p> Bericht <textarea rows="4" cols="50" name="bericht"></textarea> </p>
        <input type="submit">
    </form>
</body>
</html>

<?php
    require 'connectie.php'; 

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $naam = $_POST['vnaam'];
        $familienaam = $_POST['familienaam'];
        $email = $_POST['email'];
        $bericht = $_POST['bericht'];

        try{
            $sql = "INSERT INTO gegevens (voornaam, familienaam, email, bericht)
                    VALUES ('$naam', '$familienaam', '$email', '$bericht')
                    ";
            $db->query($sql);
            $lastId = $db->LastInsertId();
            echo "Laatst toegevoegde id:" . $lastId;       

        }catch(PDOException $e){
            echo "ERROR:" . $e->getMessage();
        }


    }

?>
