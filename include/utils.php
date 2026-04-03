<?php

/**
 * Convertit n'importe quelle URL YouTube en URL embed compatible avec un iframe.
 * Supporte les formats :
 * - https://www.youtube.com/watch?v=VIDEO_ID
 * - https://youtu.be/VIDEO_ID
 * - https://www.youtube.com/embed/VIDEO_ID
 * - etc.
 * 
 * @param string $url L'URL entrée par l'utilisateur
 * @return string L'URL convertie en format embed (ou l'originale si non reconnue)
 */
function getYouTubeEmbedUrl($url) {
    // Si c'est déjà une URL embed, on ne fait rien
    if (strpos($url, 'youtube.com/embed/') !== false) {
        return $url;
    }

    $videoId = '';

    // Format watch?v=...
    if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match)) {
        $videoId = $match[1];
    }

    if (!empty($videoId)) {
        return "https://www.youtube.com/embed/" . $videoId;
    }

    // Si on ne trouve rien, on renvoie l'URL telle quelle (peut-être ce n'est pas du YouTube)
    return $url;
}
