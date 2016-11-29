<?php

$leeftijd = 20;

if($leeftijd < 16){
   echo  "{$leeftijd} jaar is te jong voor deze film.";
  //  echo  $leeftijd . "jaar is te jong voor deze film.";
}elseif($leeftijd < 18){
    echo "{$leeftijd} jaar, je hebt ouderlijk toezicht nodig";
}else{
    echo "Je bent reeds {$leeftijd}. Geniet van de film";
}