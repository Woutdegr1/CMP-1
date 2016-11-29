<?php 
session_start();
if(isset($_SESSION["user"])){
    //GEBRUIKER OK

}else{
    //GEBRUIKER NIET OK - REDIRECT
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Profielpagina</title>
</head>
<body>
<h1>Profielpagina</h1>
<p>Welkom <?php echo $_SESSION["user"]; ?> !</p>

<a href="logout.php">Logout</a>
    
</body>
</html>