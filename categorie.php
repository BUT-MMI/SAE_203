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

		$cat_genre = false;

		if ($_GET['cat'] == 'nouveaux') { // On trie les films par ordre d'ajout
			$sth = $dbh->prepare('SELECT film.idfilm, film.titre, film.annee, film.affiche, genre.libelle, AVG(commentaire.note) AS moyenne_note FROM film
								INNER JOIN genre ON film.idgenre = genre.idgenre
								LEFT JOIN commentaire ON commentaire.idfilm = film.idfilm
								GROUP BY film.idfilm, film.titre, film.annee, film.affiche, genre.libelle
								ORDER BY idfilm DESC LIMIT 10');
			$sth->execute();
			$films = $sth->fetchAll();

		} else if ($_GET['cat'] == 'notes') { // On trie les films par les meilleures notes.
			$sth = $dbh->prepare('SELECT film.idfilm, film.titre, film.annee, film.affiche, genre.libelle, AVG(commentaire.note) AS moyenne_note FROM film
								INNER JOIN genre ON film.idgenre = genre.idgenre
								INNER JOIN commentaire ON commentaire.idfilm = film.idfilm
								GROUP BY film.idfilm, film.titre, film.annee, film.affiche, genre.libelle
								ORDER BY moyenne_note DESC LIMIT 10');
			$sth->execute();
			$films = $sth->fetchAll();

		} else { // On ne récupère que les films du genre choisi
			$cat_genre = true; // On utilise cette variable plus tard pour ne pas afficher le genre dans les cartes de films (pour pas avoir de répétition du style "action - action - action")
			$sth = $dbh->prepare('SELECT film.idfilm, film.titre, film.annee, film.affiche, genre.libelle, AVG(commentaire.note) AS moyenne_note FROM film
								INNER JOIN genre ON film.idgenre = genre.idgenre
								LEFT JOIN commentaire ON commentaire.idfilm = film.idfilm
								WHERE genre.libelle = :libelle
								GROUP BY film.idfilm, film.titre, film.annee, film.affiche, genre.libelle');
			$values = array('libelle' => $_GET['cat']);
			$sth->execute($values);
			$films = $sth->fetchAll();
		}

		if ($cat_genre === true) {
			$sth = $dbh->prepare('SELECT libelle, description FROM genre
								WHERE libelle = :libelle');
				$values = array('libelle' => $_GET['cat']);
				$sth->execute($values);
				$genre = $sth->fetch();
				echo '<h2 class="titre-section">' . htmlspecialchars($genre['libelle']) . '</h2>';
				echo '<div class="genre-description">';
				echo '<p>' . htmlspecialchars($genre['description']) . '</p>';
				echo '</div>';

		} else if ($_GET['cat'] == 'nouveaux') {
			echo '<h2 class="titre-section">Nouveautés</h2>';

		} else if ($_GET['cat'] == 'notes') {
			echo '<h2 class="titre-section">Mieux notés</h2>';
		}

		?>

		<section class="grille-films">
			<?php foreach ($films as $film) { ?>
				<article class="carte-film">
					<a href="film.php?id=<?php echo $film['idfilm']; ?>">
						<img src="<?php echo $film['affiche']; ?>" alt="Affiche de <?php echo $film['titre']; ?>">
						<div class="infos-carte">
							<p class="titre-film"><?php echo $film['titre']; ?></p>
							<div class="carte-meta">
								<span class="badge-note"><?php echo number_format($film['moyenne_note'], 1)."🍗"; ?></span>
								<span class="carte-annee"><?php echo htmlspecialchars($film['annee']); ?></span>
								<?php if ($cat_genre === false) { ?>
									<span class="badge-genre"><?php echo htmlspecialchars($film['libelle']); ?></span>
								<?php } ?>
							</div>
						</div>
					</a>
				</article>
			<?php } ?>
		</section>

		<?php include('include/pied.php'); ?>

	</body>
</html>