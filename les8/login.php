<?php

session_start();

if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "evelien" && $password == "boezeidekoe"){
        $_SESSION["username"] = $username;
        echo "sessie aangemaakt, welkom {$username}";
    }
    else{
        echo "error: invalid login";
    }
}else{
    // NIET GEKLIKT OP LOGIN
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="POST">
        <p>Username:</p>
        <p> <input type="text" name="username" required> </p>
        <p>Password:</p>
        <p><input type="password" name="password" required> </p>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>