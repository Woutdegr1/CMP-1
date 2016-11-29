<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .cube{
            width:2%;
            height:50px;
            background:red;
            display:inline-block;
        }
    </style>
</head>
<body>
    <?php
        $kleur=0;
        for($teller=0; $teller < 50; $teller++){
            echo "<div class='cube' 
                    style='background:rgb({$kleur},{$kleur},{$kleur});'></div>";
            $kleur +=5; //$kleur = $kleur + 5;
        }
    ?>
</body>
</html>