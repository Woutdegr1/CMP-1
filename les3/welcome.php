<?php
        $voornaam = $_POST['voornaam'];

         if(!empty($voornaam)){
                echo $voornaam . "<br>";
            }else{
                echo "Vul een naam in <br>";
            }