<?php

/**
 * Fonction h ($texte)
 * Sécurise l'affichage en convertissant les caractères spéciaux en HTML.
 * À utiliser systématiquement lors d'un 'echo' de données provenant de la base de données.
 * prend : Le texte à protéger
 * donne : Le texte protégé
 */
function h($texte)
{
    return htmlspecialchars($texte, ENT_QUOTES, 'UTF-8'); // ENT_QUOTES pour que les ' simples et les " doubles soient convertis
}

/**
 * Convertit une URL YouTube en URL embed compatible avec un iframe.
 * Source : https://stackoverflow.com/questions/2936467/parse-youtube-video-id-using-preg-match
 * prend : L'URL entrée par l'utilisateur
 * donne : L'URL formatée pour l'iframe
 */
function getYouTubeEmbedUrl($url)
{
    // Si c'est déjà une URL embed, on ne fait rien
    if (strpos($url, 'youtube.com/embed/') !== false) {
        return $url;
    }

    // On cherche l'ID de la vidéo avec le pattern ci-dessous
    // On capture les caractères de l'ID YouTube
    $pattern = '%(?:youtube\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';

    if (preg_match($pattern, $url, $match)) {
        return "https://www.youtube.com/embed/" . $match[1];
    }

    return $url;
}

/**
 * Retourne une chaîne de caractères représentant une note sous forme d'étoiles.
 * prend : La note sur 5
 * donne : Les étoiles HTML
 */
function afficher_etoiles($note)
{
    $etoiles = "";
    // On boucle de 1 à 5
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $note) {
            $etoiles .= "⭐"; // Étoile pleine
        } else {
            $etoiles .= "☆"; // Étoile vide
        }
    }
    return $etoiles;
}

/**
 * Formate une date SQL (AAAA-MM-JJ) au format français (JJ/MM/AAAA).
 * prend : La date provenant de la base de données
 * donne : La date au format FR
 */
function formater_date($date_sql)
{
    // On transforme la chaîne en "timestamp" (temps PHP)
    $timestamp = strtotime($date_sql);
    // On retourne le format jour/mois/année
    return date("d/m/Y", $timestamp);
}

/**
 * Filtre les "gros mots" dans un texte en les remplaçant par des astérisques.
 * prend : Le message à filtrer
 * donne : Le texte filtré
 */
function filtrer_gros_mots($texte)
{
    // Liste des mots à filtrer
    $gros_mots = array(
        'merde',
        'con',
        'conne',
        'connard',
        'connasse',
        'putain',
        'pute',
        'salope',
        'salopard',
        'nique',
        'enculé',
        'enculée',
        'enculer',
        'bordel',
        'salaud',
        'pétasse',
        'trouduc',
        'bouffon',
        'débile',
        'abruti',
        'crevard',
        'enfoiré',
        'pouffiasse',
        'chier',
        'cul',
        'bâtard',
        'tocard'
    );

    // Pour chaque mot de la liste
    foreach ($gros_mots as $mot) {
        // On remplace le mot par des étoiles de la même longueur
        $remplacement = str_repeat("*", strlen($mot));
        // str_ireplace ignore la casse (MAJUSCULES/minuscules)
        $texte = str_ireplace($mot, $remplacement, $texte);
    } //str_ireplace avec des astérisques($remplacement) à la place des gros mots($mot) dans $texte

    return $texte;
}

?>