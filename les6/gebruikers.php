<?php

require 'connectie.php';

$sql = 'SELECT * FROM gebruikers';

try{
    $result = $db->query($sql);
    foreach ($result as $row){
        echo $row['voornaam'] . "<br>";
    }
}catch(PDOexception $e){
 echo "Error: " . $e;
}