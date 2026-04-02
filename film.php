<?php
require_once 'include/db.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php 
include 'include/entete.php';

  $sth = $dbh->prepare('SELECT titre, annee, affiche FROM film WHERE idfilm = :id'); // préparer la requête SQL
  $values = array('id' => $_GET['id']);
	$sth->execute($values);
	$film = $sth->fetch();

?>
    <img src="<?= htmlspecialchars($film['affiche']) ?>" alt="affiche"
						style="width: 200px; height: auto;"><br>
    <?php echo htmlspecialchars($film['titre']) . ' <br> ' . htmlspecialchars($film['annee']) . ' <br><br>'; ?>

  <form method="post" action="ajouter_commentaire.php">
    Nom : <input type="text" name="nom"><br>
    Note : <input type="number" name="note"><br>
    Message : <textarea name="message"></textarea><br>
    <input type="hidden" name="id_film" value="<?= htmlspecialchars($_GET['id']) ?>"> <!-- Avec PHP, donnez la bonne valeur à l'attribut value -->
    <input type="submit" value="Envoyer">
  </form>
</body>
</html>