<?php 
$current = "insert_student.php";
require_once("includes/header.php"); 
require_once("includes/nav.php"); 

if(isset($_POST['new'])){
	//GEKLIKT OP EDITKNOP
	require("connectie.php");

	$target_dir = "profilepictures/";
    $target_file = $target_dir ."profilepic_". $_FILES["profilepicture"]["name"];
    move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $target_file);

	$naam = $_POST["naam"];
	$familienaam = $_POST["familienaam"];
	$email = $_POST["email"];
	$profilepicture_name = "profilepic_" . basename($_FILES["profilepicture"]["name"]);
	
	try{
		$stmt = $db->prepare("INSERT INTO students 
                        (naam, familienaam, email, profilepicture)
                        VALUES
                        (:naam, :familienaam, :email, :profilepicture)");
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":familienaam", $familienaam);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":profilepicture", $profilepicture_name);

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
		<form role="form" class="col-md-9 go-right" action="insert_student.php" method="post" enctype="multipart/form-data">
			<h2>Edit Student</h2>
		<div class="form-group">
			<input id="naam" name="naam" type="text" class="form-control" required>
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
			<input id="profilepicture" name="profilepicture" type="file" class="form-control"  >
			<label for="profilepicture">Profielfoto</label>
		</div>

		<div class="form-group">
			<input id="new" name="new" type="submit" class="form-control" value="Maak nieuwe aan">
			
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