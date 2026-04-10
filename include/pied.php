<?php include('db.php'); ?>

<footer class="crousti-footer">
  <div class="footer-content">
    <div class="footer-brand">
      <a href="index.php" class="footer-logo">
        <img src="img\croutsy.png" alt="Logo" />
        Crousty Movies
      </a>
      <p class="footer-description">
        Crousty Movies est votre destination ultime pour découvrir, noter et partager vos films préférés.
      </p>

      */ Ajout de mathis - source : https://developer.mozilla.org/fr/docs/Web/API/Window/scrollTo */
      <button class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        ↑ Revenir en haut
      </button>
    </div>
    <div class="footer-links">
      <h4>Pages</h4>
      <ul>
        <li><a href="index.php">Page d'accueil</a></li>
        <li><a href="categorie.php?cat=nouveaux">Nouveautés</a></li>
        <li><a href="categorie.php?cat=notes">Mieux notés</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-copyright">
    <p>© 2026 Crousty Movies. Tous droits réservés. Ce site est un projet de la SAE 203.<br>
      Développé par <a href="mailto:gabriel.anderlucci@etu.univ-amu.fr">Gabriel ANDERLUCCI</a>, <a href="mailto:mathis.roberdeau@etu.univ-amu.fr">Mathis ROBERDEAU</a>, <a href="mailto:ulysse.soucaret@etu.univ-amu.fr">Ulysse SOUCARET</a>, <a href="mailto:ewan.aissou@etu.univ-amu.fr">Ewan AISSOU</a> &
      <a href="mailto:florentin.merle@etu.univ-amu.fr">Florentin MERLE</a>.</p>
  </div>
</footer>