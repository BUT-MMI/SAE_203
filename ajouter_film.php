<?php

include('include/db.php');

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

if (!is_string($resume) || strlen($resume) < 30 || strlen($resume) > 1000) {
    echo '<p>La taille du résumé n\'est pas valide. Pensez à respecter les contraintes de longueur.</p>';
    $erreur = true;
}

if ($erreur) {
    echo '<a href="nouveau_film.php">Retour</a>';
}

// Si tout est bon, on insère le film dans la base de données
if (!$erreur) {
    $sth = $dbh->prepare('INSERT INTO film (titre, annee, duree, resume, affiche, bandeannonce, realisateur, acteurs, idgenre) VALUES (:titre, :annee, :duree, :resume, :affiche, :bande_annonce, :realisateur, :acteurs, :id_genre)');
    $values = array(
        'titre' => $titre,
        'annee' => $annee,
        'duree' => $duree,
        'resume' => $resume,
        'affiche' => $affiche,
        'bande_annonce' => $bande_annonce,
        'realisateur' => $realisateur,
        'acteurs' => $acteurs,
        'id_genre' => $id_genre
    );
    $sth->execute($values);

    // On redirige vers la page des nouveautés
    header('Location: categorie.php?cat=nouveaux');
    exit();
}