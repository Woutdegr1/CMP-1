<?php
$current = "insert_auteur.php";
require_once("includes/header.php");
require_once("includes/nav.php");
require_once("functies/auteur.php");

if(isset($_POST['new'])){


}

?>

<div class="container">
    <div class="row">
		<form role="form" class="col-md-9 go-right" action="insert_auteur.php" method="post" enctype="multipart/form-data">
			<h2>Voeg auteur toe</h2>
		<div class="form-group">
			<input id="voornaam" name="voornaam" type="text" class="form-control" required>
			<label for="voornaam">Voornaam</label>
		</div>
		<div class="form-group">
			<input id="familienaam" name="familienaam" type="text" class="form-control" required >
			<label for="familienaam">familienaam</label>
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
	<a class="btn btn-primary" href="boeken.php">Overzicht boeken</a>
</div>
<?php require_once("includes/footer.php"); ?>
