<?php

$navigation = ['index' => 'Home', 'about' => 'Over ons', 'portfolio' => 'Portfolio', 'contact' => 'Contacteer ons'];


foreach($navigation as $paginaNaam){
    echo  $paginaNaam . "<br>";
}

foreach($navigation as $url => $paginaNaam){
    echo  $url .  " -> " .$paginaNaam . "<br>";
}