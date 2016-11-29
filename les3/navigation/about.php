<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <style>
        .active{
            background:yellow;
        }
    </style>
</head>
<body>

<?php
$navigation = [
    'index' => 'Home', 
    'about' => 'Over ons', 
    'portfolio' => 'Portfolio', 
    'contact' => 'Contacteer ons'
    ];

$currentUrl = $_SERVER['PHP_SELF'];

$html = "<ul>";
foreach($navigation as $url => $paginaNaam){
    if($currentUrl == "/cmp_di/les3/navigation/" . $url . ".php"){
        $html .= "<li class='active'><a href='./{$url}.php'> {$paginaNaam} </a>";
    }else{
        $html .= "<li><a href='./{$url}.php'> {$paginaNaam} </a>";
    }
}
$html .= "</ul>";
echo $html;


?>
    
</body>
</html>