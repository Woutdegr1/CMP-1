<?php
//REGEX
/*
[abcde..] - Any character between the brackets
[A-Z] - Any character from uppercase A to uppercase Z
[a-z] - Any character from lowercase a to lowercase z
[A-z ]- Any character from uppercase A to lowercase z
*/
$email = "rutsaert@gmail.com";
$patroon = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

if(preg_match($patroon, $email)){
echo "valid email <br>";
}else{
    echo "invalid email <br>";

}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // invalid emailaddress
    echo "invalid email<br>";
}else{
    echo "valid email<br>";
}