<?php
// Configuration de Supabase (PostgreSQL)
$host = 'aws-1-eu-west-3.pooler.supabase.com';
$port   = '5432'; 
$dbname = 'postgres';
$user   = 'postgres.zpdugyojedzybursowrc';
$pass   = 'CroustyLover92I';

try {
    // Notez le changement : "pgsql:" au lieu de "mysql:"
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    
    $db = new PDO($dsn, $user, $pass);

    // Configuration des erreurs et du mode de récupération
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Optionnel : Forcer l'encodage UTF-8 (souvent par défaut sur PG)
    $db->exec("SET client_encoding TO 'UTF8'");

} catch (PDOException $e) {
    die("Erreur de connexion à Supabase : " . $e->getMessage());
}
?>