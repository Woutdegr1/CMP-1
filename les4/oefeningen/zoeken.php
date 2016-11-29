<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Zoekformulier</title>
</head>
<body>
    <form action="zoeken.php" method="get">
        <p>Zoeken</p><input type="text" name="zoekterm">
        <input type="submit">
    </form>
    <?php
          if($_SERVER['REQUEST_METHOD'] == "GET"){
              $zoekterm = $_GET['zoekterm'];
              if(!empty($zoekterm)){
                    echo $zoekterm;
              }
          }
    ?>
</body>
</html>