<?php
// Configuration de la base de données
$host = 'localhost';
$dbname = 'sae203';
$user = 'root';// Modifiez si nécessaire
$pass = '';// Modifiez si nécessaire



try {
    // Connexion à la base de données avec PDO
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    // Configurer PDO pour lancer des exceptions en cas d'erreur
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Définir le mode de récupération par défaut sur tableau associatif
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher un message et arrêter le script
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>