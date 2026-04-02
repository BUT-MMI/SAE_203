<?php
require_once 'include/db.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
include 'include/entete.php';
?>
	<form method="post" action="ajouter_film.php">
		...<br>
		Genre : <select name="genre">
			<!-- Affichez les options avec PHP -->
		</select>
		<a href="nouveau_genre.php">Un autre genre ?</a><br>
		Affiche (URL) <input type="url" name="affiche"><br>
		Bande annonce (URL) <input type="url" name="bande_annonce"><br>
		...<br>
	</form>
</body>
</html>