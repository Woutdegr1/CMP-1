<?php

$navigation = [
    'index' => 'Home', 
    'about' => 'Over ons', 
    'portfolio' => 'Portfolio', 
    'contact' => 'Contacteer ons'
    ];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
    .active{
        background:yellow;
    }
    </style>
</head>
<body>
    <?php
        $html = "<ul>";
        $current = $_SERVER['PHP_SELF'];

        foreach($navigation as $url => $titel){
            if($current == "/cmp_vrij/les4/oefeningen/navigatie/".$url.".php"){

                $html .= "<li class='active'>
                            <a href='{$url}.php'>{$titel}</a>
                            </li>";
            }else{
                $html .= "<li>
                            <a href='{$url}.php'>{$titel}</a>
                            </li>";
            }
        }
        $html .= "</ul>";
        echo $html;
    ?>
</body>
</html>
