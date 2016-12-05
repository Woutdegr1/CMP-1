<?php

if(isset($_POST["upload"])){
    //Geklikt op upload-btn
    var_dump($_FILES);
    $target_dir = "uploads/";
    $target_file = $target_dir . $_FILES["profielfoto"]["name"];
    move_uploaded_file($_FILES["profielfoto"]["tmp_name"], $target_file);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form action="imgupload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="profielfoto">
        <input type="submit" value="Upload Profielfoto" name="upload">
    </form>

</body>
</html>