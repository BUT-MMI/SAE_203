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
	$sth = $dbh->prepare('SELECT film.idfilm, titre, annee, affiche FROM film 
						INNER JOIN commentaire ON film.idfilm = commentaire.idfilm
						GROUP BY film.idfilm
						ORDER BY AVG(commentaire.note) DESC'); // préparer la requête SQL
	$sth->execute();
	$films = $sth->fetchAll();
} else {
	$sth = $dbh->prepare('SELECT idfilm, titre, annee, affiche FROM film
						INNER JOIN genre ON film.idgenre = genre.idgenre
						WHERE genre.libelle = :libelle');
    $values = array('libelle' => $_GET['cat']);
	$sth->execute($values);
	$films = $sth->fetchAll();
}

?>

<main style="display: flex; flex-wrap: wrap; justify-content: center;">
		<?php foreach ($films as $film): ?>
			<div class="film" style="text-align: center; margin: 20px; flex-basis: 300px;">
				<a href="film.php?id=<?= htmlspecialchars($film['idfilm']) ?>">
					<img src="<?= htmlspecialchars($film['affiche']) ?>" alt="<?= htmlspecialchars($film['titre']) ?>"
						style="width: 200px; height: auto;"><br>
					<?= htmlspecialchars($film['titre']) ?> - <?= htmlspecialchars($film['annee']) ?>
				</a>
			</div>
		<?php endforeach; ?>
	</main>

</body>
</html>