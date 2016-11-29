<?php
session_start();
if(isset($_POST["login"])){
    //KLIK OP LOGIN KNOP
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "rutsaert" && $password == "boezeidekoe"){
        //LOGIN
        $_SESSION["user"] = $username;
        //Melding
        echo "login is een succes!";
    }else{
        //LOGIN FAILED
        echo "Invalid login";
    }
}else{
    //GEEN KLIK OP LOGIN KNOP
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
    <p>Username:
        <input type="text" name="username" required></p>
    <p>Password:
        <input type="password" name="password" required></p>
    <input type="submit" name="login" value="Login">
    </form>
</body>
</html>