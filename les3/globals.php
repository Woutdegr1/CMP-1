<?php

//GLOBALS
$x = 5;
$y = 10;

function telOp(){
   /* 
    global $x;
    global $y; 
    */
    
  $som = $GLOBALS['x'] + $GLOBALS['y'];
// $som = $x + $y;
  return $som;
}

echo telOp();