<?php include('db.php'); ?>

<?php
// On récupère tous les genres pour le sous-menu
$sth = $dbh->prepare('SELECT * FROM genre ORDER BY libelle');
$sth->execute();
$genres = $sth->fetchAll();
?>

<nav class="menu">
  <ul>
    <li><a href="index.php">Page d'accueil</a></li>
    <li><a href="#">Genres</a></li>
    <li><a href="categorie.php?cat=nouveaux">Nouveautés</a></li>
    <li><a href="categorie.php?cat=notes">Mieux notés</a></li>
  </ul>
  <button class="Ajout2Film" data-label="Ajouter un film !" href="nouveau_film.php">
</nav>