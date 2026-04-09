<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Crousty Movies - Ajouter un genre</title>
	<link rel="icon" href="img/croutsy.png" type="image/png">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php
	include('include/entete.php');
	$liste_genres = '';
	foreach ($genres as $genre) {
		$liste_genres .= $genre['libelle'] . ', ';
	}
	?>

	<section class="section-formulaire">
		<h2>Ajouter un nouveau genre</h2>
		<form method="post" action="ajouter_genre.php">
			<div class="formulaire-groupe">
				<label for="libelle">Si votre genre n'est pas dans la liste suivante :<br><?php echo $liste_genres; ?><br>ajoutez-le :</label>
				<input type="text" id="libelle" name="libelle" placeholder="Ex : Aventure" required>
			</div>
			<div class="formulaire-groupe">
				<label for="Description">Description</label>
				<textarea id="Description" name="Description" placeholder="Description du genre..."></textarea>
			</div>
			<input type="submit" class="btn-valider" value="Ajouter le genre">
		</form>
	</section>

	<?php include('include/pied.php'); ?>
	</body>
</html>