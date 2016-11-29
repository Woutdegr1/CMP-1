<?php

require_once 'connectie.php';

try{
    $sql = $db->query('SELECT * FROM studenten');
    //var_dump($sql);
    foreach($sql as $row){
        echo $row['voornaam']." ". $row['familienaam'] . "<br>";
    }

}
catch(PDOexception $e){
    die( "Error" . $e->getMessage() );
}