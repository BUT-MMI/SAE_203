<!--
Page de modification d'un film. Similaire à nouveau_film.php mais :
- On récupère l'ID du film avec $_GET['id']
- On pré-remplit le formulaire avec les données existantes du film
- Le formulaire envoie vers update_film.php
-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Crousti Movies - Modifier un film</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    /* On inclut le menu (qui contient aussi la connexion à la BDD) */
    include('include/entete.php');
    ?>

    <?php
    /* On récupère l'ID du film depuis l'URL (?id=...) */
    $id_film = $_GET['id'];

    /* On fait une requête pour récupérer les données du film */
    $sth = $dbh->prepare('SELECT * FROM film WHERE idfilm = :id');
    $values = array('id' => $id_film);
    $sth->execute($values);
    $film = $sth->fetch();

    /* On récupère la liste des genres pour la liste déroulante */
    $sth = $dbh->prepare('SELECT * FROM genre ORDER BY libelle');
    $sth->execute();
    $genres = $sth->fetchAll();
    ?>

    <section class="section-formulaire">
        <h2>Modifier le film</h2>

        <!-- Le formulaire envoie vers update_film.php -->
        <form method="post" action="modification_film.php">

            <!-- On passe l'ID du film en champ caché pour que update_film.php sache quel film modifier -->
            <input type="hidden" name="id_film" value="<?php echo $film['idfilm']; ?>">

            <div class="formulaire-groupe">
                <label for="titre">Titre :</label>
                <!-- value="..." pré-remplit le champ avec la valeur actuelle -->
                <input type="text" id="titre" name="titre" value="<?php echo $film['titre']; ?>">
            </div>

            <div class="formulaire-groupe">
                <label for="annee">Année de sortie :</label>
                <input type="number" id="annee" name="annee" value="<?php echo $film['annee']; ?>" min="1888"
                    max="2100">
            </div>

            <div class="formulaire-groupe">
                <label for="duree">Durée (en minutes) :</label>
                <input type="number" id="duree" name="duree" value="<?php echo $film['duree']; ?>" min="1">
            </div>

            <div class="formulaire-groupe">
                <label for="realisateur">Réalisateur :</label>
                <input type="text" id="realisateur" name="realisateur" value="<?php echo $film['realisateur']; ?>">
            </div>

            <div class="formulaire-groupe">
                <label for="acteurs">Acteurs principaux :</label>
                <input type="text" id="acteurs" name="acteurs" value="<?php echo $film['acteurs']; ?>">
            </div>

            <div class="formulaire-groupe">
                <label for="resume">Résumé :</label>
                <textarea id="resume" name="resume"><?php echo $film['resume']; ?></textarea>
            </div>

            <div class="formulaire-groupe">
                <label for="genre">Genre :</label>
                <select id="genre" name="genre">
                    <?php
                    /* On génère les options dynamiquement.
                     * On marque "selected" l'option qui correspond au genre actuel du film */
                    foreach ($genres as $g) {
                        if ($g['idgenre'] == $film['idgenre']) {
                            echo '<option value="' . $g['idgenre'] . '" selected>' . $g['libelle'] . '</option>';
                        } else {
                            echo '<option value="' . $g['idgenre'] . '">' . $g['libelle'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="formulaire-groupe">
                <label for="affiche">Affiche (URL) :</label>
                <input type="url" id="affiche" name="affiche" value="<?php echo $film['affiche']; ?>">
            </div>

            <div class="formulaire-groupe">
                <label for="bande_annonce">Bande annonce (URL YouTube embed) :</label>
                <input type="url" id="bande_annonce" name="bande_annonce" value="<?php echo $film['bandeannonce']; ?>">
            </div>

            <input type="submit" class="btn-valider" value="Enregistrer les modifications">
        </form>
    </section>

    <?php include('include/pied.php'); ?>