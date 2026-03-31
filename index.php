<!--
Page d'accueil avec :
 1. Un menu avec trois onglets : genre, nouveautés et mieux notés. L'onglet 
    genre contient un sous-menu avec tous les genres disponibles. Le menu 
    contient aussi un bouton pour ajouter un film (ajouter_film.php)
 2. La liste de tous les films. Chaque film est un lien cliquable vers la page
    film.php.
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
 */

/*
 * Ensuite, faites une requête SQL pour recupérer tous les films et les afficher.
 * Voici un exemple :
 */
?>
	<div>
		<a href="film.php?id=1">
			<img src="https://upload.wikimedia.org/wikipedia/en/5/52/Dune_Part_Two_poster.jpeg"><br>
			Dune, deuxième partie - 2024
		</a>
	</div>
</body>
</html>