<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Crousty Movies - Accueil</title>
    <link rel="icon" href="img/croutsy.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include('include/entete.php'); ?>

    <?php
    // On récupère tous les films avec leur genre
    $sth = $dbh->prepare('SELECT film.*, genre.libelle, AVG(commentaire.note) AS moyenne_note FROM film
                        INNER JOIN genre ON film.idgenre = genre.idgenre
                        LEFT JOIN commentaire ON commentaire.idfilm = film.idfilm
                        GROUP BY film.idfilm, film.titre, film.annee, film.affiche, genre.libelle
                        ORDER BY film.idfilm');
    $sth->execute();
    $result = $sth->fetchAll();
    ?>

    <h2 class="titre-section">Tous les films</h2>

    <section class="grille-films">
        <?php foreach ($result as $row) { ?>
            <article class="carte-film">
                <a href="film.php?id=<?php echo $row['idfilm']; ?>">
                    <?php if (!empty($row['affiche'])) { ?>
                        <img src="<?php echo $row['affiche']; ?>" alt="Affiche de <?php echo $row['titre']; ?>">
                    <?php } else { ?>
                        <img src="img\image-innacessible.png" alt="Pas d'affiche">
                    <?php } ?>
                    <div class="infos-carte">
                        <p class="titre-film"><?php echo htmlspecialchars($row['titre']); ?></p>
                        <div class="carte-meta">
                            <span class="badge-note"><?php echo number_format($row['moyenne_note'], 1)."🍗"; ?></span>
                            <span class="carte-annee"><?php echo htmlspecialchars($row['annee']); ?></span>
                            <span class="badge-genre"><?php echo htmlspecialchars($row['libelle']); ?></span>
                        </div>
                    </div>
                </a>
            </article>
        <?php } ?>
    </section>

    <?php include('include/pied.php'); ?>
</body>
</html>