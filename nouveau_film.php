<!--
Page avec le formulaire pour ajouter un nouveau film. Cette page ne contient que
la barre de menu et un long formulaire pour entrer les données.
Remarquez que, pour ajouter l'affiche et la bande annonce, il faudra fournir
une adresse URL.
-->

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
/* Importez le fichier « entete.php » dans le dossier « include » pour la barre de 
 * menu.
 *
 * Voici un exemple incomplet pour le formulaire :
 */
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