<?php 
$current = "insert_student.php";
require_once("includes/header.php"); 
require_once("includes/nav.php"); 

if(isset($_POST['new'])){
	//GEKLIKT OP EDITKNOP
	require("connectie.php");

	$naam = $_POST["naam"];
	$familienaam = $_POST["familienaam"];
	$email = $_POST["email"];

	try{
		$stmt = $db->prepare("INSERT INTO students 
                        (naam, familienaam, email)
                        VALUES
                        (:naam, :familienaam, :email)");
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":familienaam", $familienaam);
		$stmt->bindParam(":email", $email);

		$stmt->execute();
		$message = "SUCCES";
		 //CONNECTIE SLUITEN
        $db = null;


	}catch(PDOExeption $e)
	{
		$message = $e;
	}
	
}




?>

<div class="container">
    <div class="row">
		<form role="form" class="col-md-9 go-right" action="insert_student.php" method="post">
			<h2>Edit Student</h2>
		<div class="form-group">
			<input id="naam" name="naam" type="text" class="form-control" required >
			<label for="naam">Naam</label>
		</div>
		<div class="form-group">
			<input id="familienaam" name="familienaam" type="text" class="form-control" required >
			<label for="familienaam">Familienaam</label>
		</div>
        <div class="form-group">
			<input id="email" name="email" type="email" class="form-control" required >
			<label for="email">Email</label>
		</div>
		
		<div class="form-group">
			<input id="new" name="new" type="submit" class="form-control" value="Voeg Toe">
			
		</div>
		</form>
        <?php 
        if(!empty($message)){
            echo "<p class='bg-success' >{$message}</p>";
        }
        ?>
		
       
	</div>
	<a class="btn btn-primary" href="studenten.php">Overzicht studenten</a>
</div>
 
<?php require_once("includes/footer.php"); ?>