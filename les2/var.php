<?php

//ENNUMERATIEVE ARRAY
$kleuren = array("Geel","Groen","Blauw");
$kleuren  = ["Geel","Groen","Blauw"];
$kleuren[] = "Zwart";

var_dump($kleuren);

echo "<br>" . $kleuren[0] . "<br>";

//ASSOCIATIEVE ARRAY
$kleurenReeks = [
    "kleur 1" => "Geel",
    "kleur 2" => "Groen",
 ];
echo "<br> Ons tweede kleur is {$kleurenReeks["kleur 2"]} <br>";

$kleurenReeks["kleur 2"] = "blauw";

echo "<br> Ons tweede kleur is {$kleurenReeks["kleur 2"]} <br>";
