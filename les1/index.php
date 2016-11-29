<?php

echo "Hello World <br>";

//STRING
$str = "Dit is een string, tekst <br>";
//INTEGER
$intNew = 8;
//FLOAT
$float = 1.5;
//BOOLEAN
$bool = true;
$bool = false;

var_dump($intNew);

//Break en new line - escape karakters
$strNew = "Dit is een string \n met escape ";
echo nl2br($strNew);

//Variabel interpolatie
$naamStudent = "Kris";
echo "<br> Hello {$naamStudent}, alles goed? ";

echo "<br> Hello " . $naamStudent . ", alles goed?";

/*
Oefening 1:

Maak een nieuw bestand aan: oef1.php 
Maak de html-startstructuur 
Maak de volgende variabelen aan: Naam, Voornaam, Leeftijd, Woonplaats
*/

//ARRAY

$a = array("Geel", "Groen", "Paars");
$b =["Geel", "Groen", "Paars"];

echo $a[0] . "<br>";
echo $a[1] . "<br>";
echo $a[2] . "<br>";

$a = [
    "0" => "Geel",
    "1" => "Groen",
    "2" => "Paars",
];

$kleuren = [
    "kleur 1" => "Geel",
    "kleur 2" => "Groen",
    "kleur 3" => "Paars",
];

echo $kleuren["kleur 1"] . "<br>";
echo $kleuren["kleur 2"] . "<br>";
echo $kleuren["kleur 3"] . "<br>";