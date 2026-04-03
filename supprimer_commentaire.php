<?php
include('include/db.php');

// On récupère l'identifiant du commentaire et du film
$id_commentaire = $_GET['id'];
$id_film = $_GET['idFilm'];

// On supprime le commentaire dans la base de données
$sth = $dbh->prepare('DELETE FROM commentaire WHERE idcommentaire = :id');
$values = array('id' => $id_commentaire);
$sth->execute($values);

// On redirige vers la page du film
header('Location: film.php?id=' . $id_film);
exit();

?>