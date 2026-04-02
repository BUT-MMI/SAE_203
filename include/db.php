<?php
// On utilise Supabase pour héberger le SQL pour pouvoir travailler avec le même SQL
// Configuration de Supabase (PostgreSQL)
$host = 'aws-1-eu-west-3.pooler.supabase.com';
$port = '5432';
$dbname = 'postgres';
$user = 'postgres.zpdugyojedzybursowrc';
$pass = 'CroustyLover92I';

// Le code suivant est celui de connexion intégré à Supabase (c'est la version forcé)
try {
    // ATTENTION - On utilise PSQL, possible erreur driver
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";

    $dbh = new PDO($dsn, $user, $pass);

    // Configuration des erreurs et du mode de récupération
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Optionnel : Forcer l'encodage UTF-8 (souvent par défaut sur PG)
    $dbh->exec("SET client_encoding TO 'UTF8'");

} catch (PDOException $e) {
    die("Erreur de connexion à Supabase : " . $e->getMessage());
}
?>



<?php
//
// Connexion à la base de données avec PDO (comme vu en cours)
// $dbh = new PDO(
//    'pgsql:host=aws-1-eu-west-3.pooler.supabase.com;port=5432;dbname=postgres',
//    'postgres.zpdugyojedzybursowrc',
//    'CroustyLover92I'
//);
?>