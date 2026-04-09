<?php
include('include/db.php');

// On récupère le nom du genre depuis le formulaire
$libelle = $_POST['libelle'];

// Validation : le libellé ne doit pas être vide
if (strlen($libelle) == 0) {
    echo '<p>Le nom du genre est obligatoire. <a href="nouveau_genre.php">Retour</a></p>';
} else {
    // On insère le nouveau genre dans la base de données
    $sth = $dbh->prepare('INSERT INTO genre (libelle,description) VALUES (:libelle, :description)');
    $values = array('libelle' => $libelle, 'description' => $_POST['Description']);
    $sth->execute($values);

    // On redirige vers la page d'ajout d'un film
    header('Location: nouveau_film.php');
    exit();
}
?>