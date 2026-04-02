<?php
require_once 'include/db.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Films - MMI Arles</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php
	/* Importez le fichier « entete.php » dans le dossier « include » pour la barre de menu. */
	include 'include/entete.php';

	/*
	 * Récupération de tous les films de la base de données.
	 */
	try {
		$sql = "SELECT idFilm, titre, annee, affiche FROM film ORDER BY titre ASC";
		$query = $db->query($sql);
		$films = $query->fetchAll();
	} catch (PDOException $e) {
		echo "Erreur lors de la récupération des films : " . $e->getMessage();
		$films = [];
	}
	?>
	<main style="display: flex; flex-wrap: wrap; justify-content: center;">
		<?php foreach ($films as $film): ?>
			<div class="film" style="text-align: center; margin: 20px; flex-basis: 300px;">
				<a href="film.php?id=<?= htmlspecialchars($film['idFilm']) ?>">
					<img src="<?= htmlspecialchars($film['affiche']) ?>" alt="<?= htmlspecialchars($film['titre']) ?>"
						style="width: 200px; height: auto;"><br>
					<?= htmlspecialchars($film['titre']) ?> - <?= htmlspecialchars($film['annee']) ?>
				</a>
			</div>
		<?php endforeach; ?>
	</main>
</body>

</html>