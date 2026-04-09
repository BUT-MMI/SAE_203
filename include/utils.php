<?php

/**
 * Fonction h ($texte)
 * Sécurise l'affichage en convertissant les caractères spéciaux en entités HTML.
 * À utiliser systématiquement lors d'un 'echo' de données provenant de la base de données.
 * @param string $texte Le texte à protéger
 * @return string Le texte protégé
 */
function h($texte)
{
    return htmlspecialchars($texte, ENT_QUOTES, 'UTF-8');
}

/**
 * Convertit une URL YouTube en URL embed compatible avec un iframe.
 * Source : https://stackoverflow.com/questions/2936467/parse-youtube-video-id-using-preg-match
 * @param string $url L'URL entrée par l'utilisateur
 * @return string L'URL formatée pour l'iframe
 */
function getYouTubeEmbedUrl($url)
{
    // Si c'est déjà une URL embed, on ne fait rien
    if (strpos($url, 'youtube.com/embed/') !== false) {
        return $url;
    }

    // On cherche l'ID de la vidéo avec une expression régulière simple
    // On capture les 11 caractères de l'ID YouTube
    $pattern = '%(?:youtube\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';

    if (preg_match($pattern, $url, $match)) {
        return "https://www.youtube.com/embed/" . $match[1];
    }

    return $url;
}

/**
 * Retourne une chaîne de caractères représentant une note sous forme d'étoiles.
 * @param int $note La note sur 5
 * @return string Les étoiles HTML
 */
function afficher_etoiles($note)
{
    $etoiles = "";
    // On boucle de 1 à 5
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $note) {
            $etoiles .= '<span class="note-poulet note-poulet--plein">🍗</span>';
        } else {
            $etoiles .= '<span class="note-poulet note-poulet--vide">🍗</span>';
        }
    }
    return $etoiles;
}

/**
 * Formate une date SQL (AAAA-MM-JJ) au format français (JJ/MM/AAAA).
 * @param string $date_sql La date provenant de la base de données
 * @return string La date au format FR
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
 * @param string $texte Le message à filtrer
 * @return string Le texte filtré
 */
function filtrer_gros_mots($texte)
{
    // Liste simple de mots à filtrer (à compléter si besoin)
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
    }

    return $texte;
}
