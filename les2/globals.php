<?php

$x = 7;
$y = 10;

function telOp(){
   /* global $x;
    global $y; */
    $x = $GLOBALS['x'];
    $y = $GLOBALS['y'];
    $som = $x + $y;
    return $som;
}


echo telOp();
echo "<br>";

echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_NAME']. "<br>";
echo $_SERVER['HTTP_HOST']. "<br>";

?>

<a href="globals.php?campus=mariakerke&school=Artevelde"> TEST GET </a>
 <?php 
 //echo $_GET['campus']; 
 if(isset($_GET['campus'])){
     echo "Mijn campus is {$_GET['campus']} op de school {$_GET['school']}";
 }
 ?>


 <form method="post" action="formulier.php">
    Naam : <input type="text" name="straat">
    <input type="submit">
 </form>

