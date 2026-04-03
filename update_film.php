<?php
/* Page pour valider et traiter les données du formulaire de modification d'un film.
 *
 * Similaire à ajouter_film.php mais avec une requête UPDATE au lieu de INSERT.
 * L'identifiant du film se trouve dans $_POST['id_film'].
 */

include('include/db.php');
include('include/utils.php');

// On récupère toutes les données du formulaire
$id_film = $_POST['id_film'];
$titre = $_POST['titre'];
$annee = $_POST['annee'];
$duree = $_POST['duree'];
$realisateur = $_POST['realisateur'];
$acteurs = $_POST['acteurs'];
$resume = $_POST['resume'];
$id_genre = $_POST['genre'];
$affiche = $_POST['affiche'];
$bande_annonce = getYouTubeEmbedUrl($_POST['bande_annonce']);

// Validation des données
$erreur = false;

if (!is_string($titre) || strlen($titre) < 1 || strlen($titre) > 200) {
    echo '<p>La taille du titre n\'est pas valide. Pensez à respecter les contraintes de longueur.</p>';
    $erreur = true;
}
if (!is_string($realisateur) || strlen($realisateur) < 2 || strlen($realisateur) > 100) {
    echo '<p>Le nombre de caractère entré pour le réalisateur n\'est pas valide.</p>';
    $erreur = true;
}
if (!is_numeric($annee) || $annee < 1888 || $annee > 2027) {
    echo '<p>L\'année n\'est pas valide.</p>';
    $erreur = true;
}

if (strlen($affiche) == 0) {
    echo '<p>L\'affiche est obligatoire.</p>';
    $erreur = true;
}

if (!is_string($acteurs) || strlen($acteurs) < 2 || strlen($acteurs) > 1000) {
    echo '<p>Veuillez rentrer un nombre de caractère valide.</p>';
    $erreur = true;
}

if (strlen($bande_annonce) == 0) {
    echo '<p>La bande-annonce est obligatoire.</p>';
    $erreur = true;
}

if (!is_numeric($duree) || $duree < 1 || $duree > 1000) {
    echo '<p>La durée n\'est pas valide.</p>';
    $erreur = true;
}

if (!is_string($resume) || strlen($resume) < 30 || strlen($resume) > 400) {
    echo '<p>La taille du résumé n\'est pas valide. Pensez à respecter les contraintes de longueur.</p>';
    $erreur = true;
}

if ($erreur) {
    echo '<a href="nouveau_film.php">Retour</a>';
}

// Si tout est bon, on met à jour le film dans la base de données
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

    // On redirige vers la page du film une fois la modification faite
    header('Location: film.php?id=' . $id_film);
    exit();
}
