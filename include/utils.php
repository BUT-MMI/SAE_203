<?php

/**
 * Convertit n'importe quelle URL YouTube en URL embed compatible avec un iframe.
 * Supporte les formats :
 * - https://www.youtube.com/watch?v=VIDEO_ID
 * - https://youtu.be/VIDEO_ID
 * - https://www.youtube.com/embed/VIDEO_ID
 * 
 * @param string $url L'URL entrée par l'utilisateur
 * @return string L'URL convertie en format embed (ou l'originale si non reconnue)
 */
function getYouTubeEmbedUrl($url)
{
    // Si c'est déjà une URL embed, on ne fait rien
    // https://www.php.net/manual/fr/function.strpos.php
    if (strpos($url, 'youtube.com/embed/') !== false) {
        return $url;
    }

    $videoId = '';

    // Trouve l'id de la vidéo par rapport a l'url avec la fonction preg_match et le met dans $videoId
    // https://www.php.net/manual/fr/function.preg-match.php
    if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
        $videoId = $match[1];
    }
    // Si l'ID est trouvé, on le met dans l'URL embed
    if (!empty($videoId)) {
        return "https://www.youtube.com/embed/" . $videoId;
    }

    // Si on ne trouve rien, on renvoie l'URL telle quelle (peut-être ce n'est pas du YouTube)
    return $url;
}
