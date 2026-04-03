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

if ($_GET['cat'] == 'nouveaux') {	
	$sth = $dbh->prepare('SELECT idfilm, titre, annee, affiche, genre.libelle FROM film 
						INNER JOIN genre ON film.idgenre = genre.idgenre
						ORDER BY idfilm DESC');
	$sth->execute();
	$films = $sth->fetchAll();
} else if ($_GET['cat'] == 'notes') {
	$sth = $dbh->prepare('SELECT film.idfilm, film.titre, film.annee, film.affiche, genre.libelle, AVG(commentaire.note) AS moyenne_note FROM film
					INNER JOIN genre ON film.idgenre = genre.idgenre
					LEFT JOIN commentaire ON commentaire.idfilm = film.idfilm
					GROUP BY film.idfilm, film.titre, film.annee, film.affiche, genre.libelle
					ORDER BY moyenne_note DESC'); 

	$sth->execute();
	$films = $sth->fetchAll();
} else {
	$cat_genre = true;
	$sth = $dbh->prepare('SELECT idfilm, titre, annee, affiche, genre.libelle FROM film
						INNER JOIN genre ON film.idgenre = genre.idgenre
						WHERE genre.libelle = :libelle');
    $values = array('libelle' => $_GET['cat']);
	$sth->execute($values);
	$films = $sth->fetchAll();
}

?>

<h2 class="titre-section">Tous les films</h2>

    <section class="grille-films">
        <?php foreach ($films as $film) { ?>
            <article class="carte-film">
                <a href="film.php?id=<?php echo $film['idfilm']; ?>">
                    <?php if (!empty($film['affiche'])) { ?>
                        <img src="<?php echo $film['affiche']; ?>" alt="Affiche de <?php echo $film['titre']; ?>">
                    <?php } else { ?>
                        <img src="img\image-innacessible.png" alt="Pas d'affiche">
                    <?php } ?>
                    <div class="infos-carte">
                        <p class="titre-film"><?php echo $film['titre']; ?></p>
                        <p class="annee-film"><?php echo $film['annee']; ?></p>
                        <?php if ($cat_genre===false) { ?>
                            <p class="genre-film"><?php echo $film['libelle']; ?></p>
                        <?php } ?>
                    </div>
                </a>
            </article>
        <?php } ?>
    </section>

</body>
</html>