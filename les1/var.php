<?php

$naamStudent = "Yves <br>";

 echo $naamStudent;

$naamStudent = "Jan";

echo $naamStudent; 

$str = "Hier wil ik een linefeed. \r\n Deze tekst komt later \n";
echo nl2br($str);

echo "Welkom {$naamStudent} <br>";
echo "Welkom " . $naamStudent . "<br>";

$intEen = 4;
$intTwee = 5;
$intStr = "4";

echo $intEen * $intTwee . "<br>";
echo $intStr * $intTwee . "<br>";

$bool = true;
var_dump($bool);

var_dump($intStr);
var_dump($intTwee);

# Mijn eerste commentaarregel

// Mijn tweede commentaarregel

/*
Hier komt er een blok commentaar
Om mijn code te documenteren
*/


/*
* Hier komt er een blok commentaar
* Om mijn code te documenteren
*/


//$float = 1.5;
var_dump($float);
echo "<br> Gettype:" . gettype($float) ;


