<?php
$host = 'localhost';
$port = '3306';
$dbname = 'r25012763';
$user = 'r25012763';
$pass = 'secret';

// Connexion à la base de données MySQL
try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";

    $dbh = new PDO($dsn, $user, $pass);

    // Configuration des erreurs et du mode de récupération
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Configuration pour MySQL
    $dbh->exec("SET NAMES utf8mb4");

} catch (PDOException $e) {
    die("Erreur de connexion à MySQL : " . $e->getMessage());
}

// Inclusion des fonctions utilitaires
require_once __DIR__ . '/utils.php';
?>