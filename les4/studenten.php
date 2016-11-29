<?php

require_once 'connectie2.php';

$sql = "SELECT * FROM studenten";

try{
   $rows = $db->query($sql);
  
   foreach($rows as $row){
        echo $row['voornaam']." ".$row['achternaam'] ."<br>";
   }

}catch(PDOExeption $e){
    echo "ERROOOR: ".$e;
}