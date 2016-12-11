<?php
$current = "insert_boek.php";
require_once("includes/header.php");
require_once("includes/nav.php");
require_once("functies/boeken.php");

if(isset($_POST['new'])){


}

?>

<div class="container">
    <div class="row">
		<form role="form" class="col-md-9 go-right" action="insert_boek.php" method="post" enctype="multipart/form-data">
			<h2>Voeg Boek toe</h2>
		<div class="form-group">
			<input id="titel" name="titel" type="text" class="form-control" required>
			<label for="titel">Titel</label>
		</div>
		<div class="form-group">
			<input id="uitgavejaar" name="uitgavejaar" type="text" class="form-control" required >
			<label for="uitgavejaar">Uitgavejaar</label>
		</div>
		<div class="form-group">
			<select name="auteur" id="auteur">
				<option selected="selected">Auteur</option>
				<?php
					$auteurs = selectAllAuteurs();
					foreach($auteurs as $auteur) { ?>
					<option value="<?php echo $auteur['auteur_id']; ?>">
					<?php echo $auteur['voornaam'] . " " . $auteur['familienaam']; ?>
					</option>
				<?php
					} ?>
			</select>
		</div>
		<div class="form-group">
			<select name="uitgeverij" id="uitgeverij">
				<option selected="selected">Uitgevrij</option>
				<?php
					$uitgevers = selectAllUitgevers();
					foreach($uitgevers as $uitgeverij) { ?>
					<option value="<?php echo $uitgeverij['uitgeverij_id']; ?>">
					<?php echo $uitgeverij['bedrijfsnaam']; ?>
					</option>
				<?php
					} ?>
			</select>
		</div>

		<div class="form-group">
			<input id="omslag" name="omslag" type="file" class="form-control"  >
			<label for="omslag">Omslag</label>
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
