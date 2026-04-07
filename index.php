<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Crousti Movies - Accueil</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include('include/entete.php');
    ?>

    <?php
    // On récupère tous les films avec leur genre
    $sth = $dbh->prepare('SELECT film.*, genre.libelle FROM film JOIN genre ON film.idgenre = genre.idgenre ORDER BY film.titre');
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
                        <p class="titre-film"><?php echo $row['titre']; ?></p>
                        <p class="annee-film"><?php echo $row['annee']; ?></p>
                        <p class="genre-film"><?php echo $row['libelle']; ?></p>
                    </div>
                </a>
            </article>
        <?php } ?>
    </section>

    <?php include('include/pied.php'); ?>
</body>
</html>