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

if ($_GET['cat'] == 'nouveaux') {	
	$sth = $dbh->prepare('SELECT idfilm, titre, annee, affiche FROM film ORDER BY idfilm DESC'); // préparer la requête SQL
	$sth->execute();
	$films = $sth->fetchAll();
} else if ($_GET['cat'] == 'notes') {
	$sth = $dbh->prepare('SELECT idfilm, titre, annee, affiche FROM film 
						INNER JOIN commentaire ON film.idfilm = commentaire.idfilm
						GROUP BY film.idfilm
						ORDER BY AVG(commentaire.note) DESC'); // préparer la requête SQL
	$sth->execute();
	$films = $sth->fetchAll();
} else {
	$sth = $dbh->prepare('SELECT idfilm, titre, annee, affiche FROM film WHERE genre = ;

 * 1. Si c'est les nouveautés, faites une requête SQL qui affiche les N derniers
 *    films ajoutés
 * 2. Sinon, mais que c'est les mieux notés, faites une requête SQL qui affiche 
 *    les N films les mieux notés
 * 3. Sinon, alors c'est un genre. Dans ce cas, faites une requête SQL qui prend 
 *    tous les films dans cette catégorie.
?>
</body>
</html>