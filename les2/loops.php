<?php
/* LOOPS
FOR 
WHILE 
DO .... WHILE 
FOREACH
*/

//WHILE 
$x = 6;
while($x <= 5){
    echo "{$x} <br>"; 
    $x++; //het zelfde: $x = $x + 1
    //$x--; --> $x = $x - 1
}

//DO .... WHILE 
$x = 6;
do{ 
    echo "{$x} <br>"; 
    $x++;
    }while($x <= 5);

 //FOR (specifiek aantal keren uitvoeren)  

for ($i=0; $i < 5; $i++) { 
    echo $i ."<br>";
}
//FOREACH 
$hobbies = array("Tennis", "basketbal", "spelletjes spelen");

foreach ($hobbies as $hobby) {
    echo $hobby . "<br>";
};

$kleuren = [
    "kleur 1" => "Groen",
    "kleur 2" => "Geel",
    "kleur 3" => "Blauw",
    "kleur 4" => "Blauw",
];
foreach ($kleuren as $key => $kleur) {
   echo "De sleutel: {$key} <br> Het kleur: {$kleur}<br>";
};
   
