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

/* Utilisez la méthode get pour savoir quel film afficher. Vous devrez utiliser
 * la valeur de $_GET['id'] pour faire une requête SQL.
 *
 * De même, affichez tous les commentaires de ce film avec : auteur, note, commentaire,
 * bouton pour le supprimer, date, etc.
 *
 * Enfin, ajoutez un formulaire pour insérer un nouveau commentaire. Voici un
 * exemple incomplet :
 */
?>
  <form method="post" action="ajouter_commentaire.php">
    Nom : <input type="text" name="nom"><br>
    Note : <input type="number" name="note"><br>
    Message : <textarea name="message"></textarea><br>
    <input type="hidden" name="id_film" value="1"> <!-- Avec PHP, donnez la bonne valeur à l'attribut value -->
    <input type="submit" value="Envoyer">
  </form>
</body>
</html>