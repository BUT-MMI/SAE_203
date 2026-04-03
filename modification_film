<?php
/* Page pour valider et traiter les données du formulaire de modification d'un film.
 *
 * Similaire à ajouter_film.php mais avec une requête UPDATE au lieu de INSERT.
 * L'identifiant du film se trouve dans $_POST['id_film'].
 */

include('include/db.php');

/* On récupère toutes les données du formulaire */
$id_film = $_POST['id_film'];
$titre = $_POST['titre'];
$annee = $_POST['annee'];
$duree = $_POST['duree'];
$realisateur = $_POST['realisateur'];
$acteurs = $_POST['acteurs'];
$resume = $_POST['resume'];
$id_genre = $_POST['genre'];
$affiche = $_POST['affiche'];
$bande_annonce = $_POST['bande_annonce'];

/* Validation des données */
$erreur = false;

if (strlen($titre) == 0) {
    echo '<p>Le titre est obligatoire. <a href="modifier_film.php?id=' . $id_film . '">Retour</a></p>';
    $erreur = true;
}
if (strlen($realisateur) == 0) {
    echo '<p>Le réalisateur est obligatoire. <a href="modifier_film.php?id=' . $id_film . '">Retour</a></p>';
    $erreur = true;
}
if (!is_numeric($annee) || $annee < 1888 || $annee > 2100) {
    echo '<p>L\'année n\'est pas valide. <a href="modifier_film.php?id=' . $id_film . '">Retour</a></p>';
    $erreur = true;
}

/* Si tout est bon, on met à jour le film dans la base de données */
if (!$erreur) {
    $sth = $dbh->prepare('UPDATE film SET
        titre        = :titre,
        annee        = :annee,
        duree        = :duree,
        realisateur  = :realisateur,
        acteurs      = :acteurs,
        resume       = :resume,
        affiche      = :affiche,
        bandeannonce = :bande_annonce,
        idgenre      = :id_genre
        WHERE idfilm = :id_film');

    $values = array(
        'titre' => $titre,
        'annee' => $annee,
        'duree' => $duree,
        'realisateur' => $realisateur,
        'acteurs' => $acteurs,
        'resume' => $resume,
        'affiche' => $affiche,
        'bande_annonce' => $bande_annonce,
        'id_genre' => $id_genre,
        'id_film' => $id_film
    );
    $sth->execute($values);

    /* On redirige vers la page du film une fois la modification faite */
    header('Location: film.php?id=' . $id_film);
    exit();
}
