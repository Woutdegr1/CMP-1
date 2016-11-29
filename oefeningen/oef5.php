<?php

$x=0;
$y=1;
$z=0;

for($i=0; $i < 10; $i++){
    echo "{$z}<br>";
    $x =$y;
    $y = $z;
    $z = $x + $y;  
}