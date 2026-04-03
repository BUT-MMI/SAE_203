<?php include('db.php'); ?>

<?php
// On récupère tous les genres pour le sous-menu
$sth = $dbh->prepare('SELECT * FROM genre ORDER BY libelle');
$sth->execute();
$genres = $sth->fetchAll();
?>

<div class="header-wrapper">
  <header>
 
    <!-- GAUCHE : Logo + Nom du site -->
    <a class="logo" href="index.php">
      <!-- Remplace le src par ton logo si tu en as un -->
      <img src="img\croutsy.png" alt="Logo" />
      <span>Crousty Movies</span>
    </a>
 
    <!-- CENTRE : Menu de navigation -->
    <nav>
      <!-- Menu déroulant Genres -->
      <div class="dropdown">
        <button href="categorie.php" class="dropdown-btn">
          Genres <span class="arrow">▼</span>
        </button>
        <div class="dropdown-menu">

          <?php foreach ($genres as $genre): ?>
            <a href="categorie.php?cat=<?= urlencode($genre['libelle']) ?>">
              <?= htmlspecialchars($genre['libelle']) ?>
            </a>
          <?php endforeach; ?> <!-- Créer une boucle sans jsp pourquoi -->
            
        </div>
      </div>
 
      <a href="categorie.php?cat=nouveaux">Nouveautés</a>
      <a href="categorie.php?cat=notes">Mieux notés</a>
 
    </nav>
    <!-- DROITE : Bouton ajouter un film -->
    <button class="Ajout2Film" data-label="Ajouter un film !" href="nouveau_film.php" role="button"></button>
 
  </header>
  </div>