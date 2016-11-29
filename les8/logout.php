<?php
session_start();

//UNSET session 
session_unset();

//DESTROY SESSION 
session_destroy();

header("Location: login.php");
?>