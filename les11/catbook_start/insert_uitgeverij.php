<?php
$current = "insert_uitgeverij.php";
require_once("includes/header.php");
require_once("includes/nav.php");
require_once("functies/uitgeverij.php");

if(isset($_POST['new'])){


}

?>
<div class="container">
	<div class="row">
		<form role="form" class="col-md-9 go-right" action="insert_uitgeverij.php" method="post" enctype="multipart/form-data">
			<h2>Voeg uitgeverij toe</h2>
			<div class="form-group">
				<input id="bedrijfsnaam" name="bedrijfsnaam" type="text" class="form-control" required>
				<label for="bedrijfsnaam">Bedrijfsnaam</label>
			</div>
			<div class="form-group">
				<input id="stad" name="stad" type="text" class="form-control" required>
				<label for="stad">Stad</label>
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
	<a class="btn btn-primary" href="uitgevers.php">Overzicht uitgevers</a>
</div>
<?php require_once("includes/footer.php"); ?>
