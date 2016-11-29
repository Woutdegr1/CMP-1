<?php

$bands = array("Pink","Greenday","Madonna","NERD");

$randomBand = $bands[array_rand($bands)];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php echo "Random band: {$randomBand}"; ?>
</body>
</html>