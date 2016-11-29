<?php

/* CONDITIONAL STATEMENTS
- IF  .... ELSE 
- IF ELSEIF ELSE 
- SWITCH 
*/

$var = 21;
if($var < 10){
    echo "De waarde is kleiner dan 10 <br>";
}else{
    echo "De waarde is groter dan 10 <br>";
};

if($var < 10){
    echo "De waarde is kleiner dan 10 <br>";
}elseif($var < 20){
    echo "De waarde is kleinder 
    dan 20 maar groter dan 10 <br>";
}else{
    echo "De waarde is groter dan 20 <br>";
};

//Switch 
$favoKleur = "geel";

switch($favoKleur){
    case "rood":
    echo "Je favo kleur is {$favoKleur} <br>";
    break;
    case "blauw":
    echo "Je favo kleur is {$favoKleur} <br>";
    break;
    case "groen":
    echo "Je favo kleur is {$favoKleur} <br>";
    break;
    case "zwart":
    echo "Je favo kleur is {$favoKleur} <br>";
    break;
    default:
    echo "Geen van de bovenstaanden";
}

///Applications/MAMP/logs/php_error.log