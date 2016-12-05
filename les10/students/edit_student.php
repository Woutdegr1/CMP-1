<?php 
$current = "studenten.php";
require_once("includes/header.php"); 
require_once("includes/nav.php"); 

if(isset($_POST['edit'])){
	//GEKLIKT OP EDITKNOP
	require("connectie.php");

	$naam = $_POST["naam"];
	$familienaam = $_POST["familienaam"];
	$email = $_POST["email"];
	$id = $_POST["userid"];

	try{
		$stmt = $db->prepare("UPDATE students 
							SET naam=:naam, familienaam=:familienaam, email=:email
							WHERE id=:id");
		$stmt->bindParam(":naam", $naam);
		$stmt->bindParam(":familienaam", $familienaam);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":id", $id);

		$stmt->execute();
		$message = "SUCCES";
		 //CONNECTIE SLUITEN
        $db = null;


	}catch(PDOExeption $e)
	{
		$message = $e;
	}
	



}

if(isset($_GET['edit_id']) && !empty($_GET['edit_id'])){
	//EDIT_ID BESTAAT,JUIJ
	$id = $_GET['edit_id'];

	//GEGEVENS OPROEPEN WAAR ID HET ZELFDE IS
	require("connectie.php");
	$stmt = $db->prepare("SELECT * FROM students WHERE id=:sid");
	$stmt->bindParam(":sid",$id);
	$stmt->execute();
	$result = $stmt->fetch();
	//EXTRACTEN VAN GEGEVENS
	extract($result);
	 //CONNECTIE SLUITEN
	$db = null;
}



?>

<div class="container">
    <div class="row">
		<form role="form" class="col-md-9 go-right" action="edit_student.php" method="post">
			<h2>Edit Student</h2>
		<div class="form-group">
			<input id="naam" name="naam" type="text" class="form-control" required value="<?php echo $naam; ?>">
			<label for="naam">Naam</label>
		</div>
		<div class="form-group">
			<input id="familienaam" name="familienaam" type="text" class="form-control" required value="<?php echo $familienaam; ?>">
			<label for="familienaam">Familienaam</label>
		</div>
        <div class="form-group">
			<input id="email" name="email" type="email" class="form-control" required value="<?php echo $email; ?>">
			<label for="email">Email</label>
		</div>
		<div class="form-group">
			<input id="userid" name="userid" type="text" class="form-control" required  readonly value="<?php echo $id; ?>">
			<label for="userid">Student ID</label>
		</div>
		<div class="form-group">
			<input id="edit" name="edit" type="submit" class="form-control" value="Edit">
			
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