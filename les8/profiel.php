<?php
session_start();

if(isset($_SESSION['username'])){
    //JE BENT INGELOGD
}else{
    //JE NIET BENT INGELOGD: REDIRECT TO LOGIN
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Profiel Pagina</h1>
    <p> Welkom <?php echo $_SESSION['username'] ?> </p>
</body>
</html>