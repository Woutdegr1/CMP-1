<?php
//FUNCTIES

function schrijfBericht(){
    echo "Dit is een bericht <br>";
}

schrijfBericht();
schrijfBericht();

function schrijfBerichtAanStudent($naam){
    echo "Hallo Student: {$naam}<br>";
}


schrijfBerichtAanStudent("Jonas");
schrijfBerichtAanStudent("Marc");

function telOp($x,$y){
    $z = $x + $y;
    return $z;
}

$uitkomst = telOp(5,9);
echo $uitkomst;