<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .active{
            background:yellow;
        }
    </style>
</head>
<body>
    <?php

$navigation = ['index' => 'Home', 'about' => 'Over ons', 'portfolio' => 'Portfolio', 'contact' => 'Contacteer ons'];
$currentUrl = $_SERVER['PHP_SELF'];
foreach($navigation as $url => $pageName){
    if($currentUrl == "/cmp_di/oefeningen/navigation/".$url.".php"){
        echo "<h1>{$pageName}</h1>";
    }
}
$html = "<ul>";
foreach($navigation as $url => $pageName){
    if($currentUrl == "/cmp_di/oefeningen/navigation/".$url.".php"){
       $html .= "<li class='active'><a href='./{$url}.php'>{$pageName}</a></li>";

    }else{
        $html .= "<li><a href='./{$url}.php'>{$pageName}</a></li>";
    }
}
$html .= "</ul>";
echo $html;

?>
</body>
</html>