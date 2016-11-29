<?php

/* LOOPS
- FOR 
- FOREACH 
- WHILE 
- DO... WHILE  
*/


$var = 1;
while($var < 5){
    echo "teller:{$var} <br>";
    $var++; // Zelfde als: $var = $var + 1
    //$var--; --> het zelfde als: $var = $var - 1;
}

$var = 6;
do{
    echo "teller:{$var} <br>";
    $var++;
}while($var < 5);

echo "<br>";

//FOR 
for ($i=0; $i < 5; $i++) { 
   echo "Forloop - teller:{$i} <br>";
};

$films = ["Titanic","Boondocksaints","Fight Club"];

foreach($films as $waarde){
    echo $waarde . "<br>";
};

$films = [
    "Film 1" => "Titanic",
    "Film 2" =>"Boondocksaints",
    "Film 3" => "Fight Club",
   ];

foreach($films as $key => $film){
    echo $key . ": " . $film . "<br>";
};

//FUNCTIONS 

function geefBerichtWeer(){
    echo "bericht <br>";
};

geefBerichtWeer();
geefBerichtWeer();

function telOp($x, $y){
    $som = $x + $y;
    return $som;
}

$resultaat = telOp(5,4);
echo $resultaat;
$resultaat = telOp(21,45);
echo "<br>". $resultaat;

echo "<br>".gettype($resultaat);