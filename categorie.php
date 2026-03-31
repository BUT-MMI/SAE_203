<!--
Page d'une catégorie. La structure est semblable à la page index.php, mais vous 
devez filtrer les films à afficher. Utilisez la méthode get et une requête SQL
pour filtrer ces films.
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
/* Importez le fichier « entete.php » dans le dossier « include » pour la barre 
 * de menu.
 */

/* Ensuite, utilisez la méthode get pour savoir quelle catégorie il faut afficher :
 * 1. Si c'est les nouveautés, faites une requête SQL qui affiche les N derniers
 *    films ajoutés
 * 2. Sinon, mais que c'est les mieux notés, faites une requête SQL qui affiche 
 *    les N films les mieux notés
 * 3. Sinon, alors c'est un genre. Dans ce cas, faites une requête SQL qui prend 
 *    tous les films dans cette catégorie.
 *
 * Par exemple :
 * if ($_GET['cat'] == 'nouveaux') {
 *	  afficher les nouveautés
 * } elseif (les mieux notés) {
 *	  afficher les mieux notés
 * } else {
 *	  afficher les films du genre $_GET['cat']
 * }
 */
?>
</body>
</html>