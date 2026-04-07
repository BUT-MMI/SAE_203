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
    <p>© 2026 Crousti Movies. Tous droits réservés. Ce site est un projet de la SAE 203.<br>
      Développé par <b>Gabriel ANDERLUCCI</b>, <b>Mathis ROBERDEAU</b>, <b>Ulysse SOUCARET</b>, <b>Ewan AISSOU</b> &
      <b>Florentin MERLE</b>.</p>
  </div>
</footer>