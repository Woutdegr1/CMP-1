<?php 

/*CONDITIONAL STATEMENT
 IF 
 IF ELSE
 IF ELSEIF ELSE 
 SWITCH
*/


$leeftijd = 19;

if($leeftijd < 18){
    echo "Jij bent jonger dan 18, geen toegang!!";
}else{
    echo "Welkom!";
}

if($leeftijd < 18 && $leeftijd > 25){

}
if($leeftijd < 18 and $leeftijd > 25){
    
}

//IF ELSEIF ELSE
$favoKleur = "groen";

if($favoKleur == "groen"){
 echo "<br>Je favo kleur is groen";
}elseif($favoKleur == "rood"){
    echo "<br>Je favo kleur is rood";
}else{
    echo "<br>Je favo kleur is niet groen 
            of rood maar {$favoKleur}";
}
// SWITCH
$favoKleur = "groen";

switch($favoKleur){
    case "rood":
        echo "kleurtje rood";
        break;
    case "groen":
        echo "kleurtje groen";
        break;    
    case "geel":
        echo "kleurtje geel";
        break;
    case "blauw":
        echo "kleurtje blauw";
        break; 
     default:
         echo   "Het is een ander kleur: {$favoKleur}";  
};
