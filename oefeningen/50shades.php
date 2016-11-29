<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>50 Shades - Oefening</title>
    <style>
        .cube{
            width:2%;
            height:50px;
            display:inline-block;
        }
    </style>
</head>
<body>

<?php 
    $rgb = 0;
    for($i=0; $i<50; $i++){
        echo "<div class='cube' style='background:rgb({$rgb},{$rgb},{$rgb})'></div>";
        $rgb += 5;
    }
    ?>
    
</body>
</html>