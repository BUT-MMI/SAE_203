# SAE_203 - Crousty Movies

![Crousty Movies](img/croutsy.png)

#### Lien -> https://a-pedagoarles-mmi.aix.univ-amu.fr/r25012763/sae203/index.php
#### PHPMyAdmin -> https://a-pedagoarles-mmi.aix.univ-amu.fr/phpmyadmin/index.php


**Crousty Movies** est un catalogue de films interactif développé dans le cadre de la SAE 203 du BUT MMI. Ce projet PHP/MySQL propose une interface web responsive permettant de consulter, ajouter et commenter des films, avec une gestion dynamique des genres et des notes sous forme d'émojis poulet.

---

## 👥 Équipe et Contexte

- **Développeurs** : Gabriel ANDERLUCCI, Mathis ROBERDEAU, Ulysse SOUCARET, Ewan AISSOU, Florentin MERLE
- **Formation** : BUT MMI (Métiers du Multimédia et de l'Internet)
- **Date de réalisation** : Avril 2026

---

## 🛠 Technologies et Outils

- **Langages** : PHP 8+, HTML5, CSS3
- **Base de données** : MySQL/MariaDB (avec compatibilité PostgreSQL)
- **Connexion DB** : PDO OU SupaBase lors de Benchtest
- **Serveur local** : XAMPP (Apache, MySQL, PHP)
- **IDE** : Visual Studio Code avec extensions PHP et Git
- **Versionnement** : Git pour le contrôle de version
- **Responsive Design** : Flexbox, Grid CSS, media queries
- **Sécurité** : Requêtes préparées, filtrage des contenus (gros mots), validation des entrées

---

## 🎨 Charte Graphique

Le design s'inspire d'une interface de catalogue de films avec un thème chaleureux :
- **Couleur de fond** : `#F5EFE1` (beige clair)
- **Couleur de fond accentuée** : `#EEE2C7` (beige moyen)
- **Couleur de contour** : `#DED0B0` (brun clair)
- **Couleur d'accentuation** : `#EA5368` (rouge corail)
- **Couleur de texte** : `#5E4B41` (brun foncé)
- **Couleur d'ombre** : `rgba(94, 75, 65, 0.1)`
- **Contour rouge** : `1px solid rgba(233, 69, 96, 0.4)`
- **Émojis** : Utilisation d'émojis poulet 🍗 pour les notations (pleins pour les notes données, atténués pour les vides)

Le site est entièrement responsive, s'adaptant aux écrans mobiles, tablettes et desktop.

---

## 🚀 Fonctionnalités Principales

### Navigation et Interface
- **Logo cliquable** : Retour à la page d'accueil depuis n'importe quelle page
- **Menu déroulant des genres** : Liste dynamique des genres depuis la base de données
- **Liens rapides** : "Nouveautés" (films triés par date d'ajout), "Mieux notés" (tri par note moyenne)
- **Bouton d'ajout** : Accès aux formulaires d'ajout de films et genres
- **Footer** : Liens de navigation, description du site, bouton "Retour en haut" animé

### Pages et Interactions
- **Page d'accueil (`index.php`)** : Grille de cartes de films avec titre, année, genre, affiche et note moyenne (badge avec poulet)
- **Pages de catégories (`categorie.php`)** : Affichage filtré par genre, nouveautés ou notes ; description du genre pour les pages dédiées
- **Page de détail film (`film.php`)** : Informations complètes (titre, année, réalisateur, acteurs, synopsis, bande-annonce), note moyenne, liste des commentaires
- **Formulaires d'ajout** :
  - `nouveau_film.php` : Ajout de film avec sélection de genre dynamique
  - `nouveau_genre.php` : Ajout de genre avec description
  - `modifier_film.php` : Modification d'un film existant
- **Gestion des commentaires** :
  - Ajout via formulaire sur la page film (pseudo, note 1-5, commentaire)
  - Affichage avec date, note en poulets, suppression possible
  - Filtrage automatique des gros mots

### Fonctionnalités Techniques
- **Tri et filtrage** : Films triés par titre, date, ou note moyenne
- **Validation des données** : Côté serveur avec messages d'erreur pour champs manquants ou invalides
- **Sécurité** : Protection contre les injections SQL via PDO, filtrage des contenus inappropriés
- **Responsive** : Adaptation automatique de la grille de films et des menus

---

## 🧩 Architecture du Projet

Le projet suit une structure MVC simplifiée avec séparation des préoccupations :

### Structure des Fichiers
```
SAE_203/
├── index.php                 # Page d'accueil
├── categorie.php             # Pages de catégories
├── film.php                  # Détail d'un film
├── nouveau_film.php          # Formulaire ajout film
├── nouveau_genre.php         # Formulaire ajout genre
├── modifier_film.php         # Modification film
├── ajouter_film.php          # Traitement ajout film
├── ajouter_genre.php         # Traitement ajout genre
├── update_film.php           # Traitement modification
├── ajouter_commentaire.php   # Traitement ajout commentaire
├── supprimer_commentaire.php # Suppression commentaire
├── css/
│   └── style.css             # Feuille de style principale
├── img/
│   ├── croutsy.png           # Logo/favicon
│   └── image-innacessible.png # Image de fallback - Inutilisé dans cette version
├── include/
│   ├── db.php                # Connexion base de données
│   ├── entete.php            # Header et navigation
│   ├── pied.php              # Footer
│   └── utils.php             # Fonctions utilitaires
└── exclude/
    ├── bdfilm_SAE203.sql     # Dump de la base
    ├── db-phpmyadmin.php     # Config DB alternative
    ├── consigne-cours.md     # Consignes pédagogiques
    └── README.md             # Ce fichier
```

### Organisation du Code
- **Includes communs** : `entete.php` et `pied.php` pour la cohérence des pages
- **Fichiers de traitement** : Séparation entre affichage (PHP dans HTML) et logique métier
- **Utilitaires** : Fonctions dans `utils.php` pour réutilisabilité (affichage étoiles, formatage dates, filtrage mots)
- **CSS modulaire** : Variables CSS pour la maintenance, sections commentées

---

## 💾 Base de Données

Le schéma comprend 3 tables principales :

### Table `film`
- `idfilm` (INT, PRIMARY KEY, AUTO_INCREMENT)
- `titre` (VARCHAR(255))
- `annee` (INT)
- `realisateur` (VARCHAR(255))
- `acteurs` (TEXT)
- `synopsis` (TEXT)
- `affiche` (VARCHAR(255), URL de l'image)
- `bandeannonce` (VARCHAR(255), URL YouTube embed)
- `idgenre` (INT, FOREIGN KEY vers genre)

### Table `genre`
- `idgenre` (INT, PRIMARY KEY, AUTO_INCREMENT)
- `libelle` (VARCHAR(100), UNIQUE)
- `description` (TEXT)

### Table `commentaire`
- `idcommentaire` (INT, PRIMARY KEY, AUTO_INCREMENT)
- `pseudo` (VARCHAR(15))
- `avis` (TEXT)
- `note` (INT, 1-5)
- `datecommentaire` (DATE)
- `idfilm` (INT, FOREIGN KEY vers film)

**Relations** : Film → Genre (many-to-one), Commentaire → Film (many-to-one)

---

## 📦 Installation et Configuration

### Prérequis
- XAMPP installé (Apache, MySQL, PHP)
- Navigateur web moderne
- Accès à phpMyAdmin

### Étapes d'installation
1. **Cloner ou copier le projet** dans `C:\xampp\htdocs\SAE_203`
2. **Démarrer XAMPP** : Lancer Apache et MySQL
3. **Importer la base de données** :
   - Ouvrir phpMyAdmin (http://localhost/phpmyadmin)
   - Créer une base `bdfilm_SAE203`
   - Importer `exclude/bdfilm_SAE203.sql`
4. **Configurer la connexion** :
   - Vérifier `include/db.php` pour les paramètres locaux
   - Adapter si nécessaire pour un serveur distant
5. **Accéder au site** : http://localhost/SAE_203

### AVERTISSEMENT
- Si une erreur de driver est signaler, veuillez ajouter les lignes suivantes a la fin du fichier php.ini acessible dans la config de Apache via XAMPP. Supabase utilise un autre système que MySQL et à donc besoin de driver alternatif.

extension=pdo_pgsql
extension=pgsql

### Configuration Alternative
- Pour un déploiement distant, utiliser `exclude/db-phpmyadmin.php` avec les paramètres du serveur
- Variables d'environnement recommandées pour la sécurité en production

---

## 📖 Utilisation

1. **Navigation** : Utiliser le menu pour explorer les genres ou les classements
2. **Consultation** : Cliquer sur une carte de film pour voir les détails
3. **Ajout de contenu** : Utiliser les boutons "Ajouter" pour films/genres
4. **Commentaires** : Depuis une page film, laisser un avis avec note
5. **Gestion** : Boutons de suppression pour les commentaires

Le site est intuitif et ne nécessite pas de formation préalable.

---

## 🛠 Difficultés Rencontrées et Solutions

- **Gestion multi-DB** : Support initial PostgreSQL, puis adaptation MySQL avec DSN dynamiques
- **Responsive Design** : Utilisation de Flexbox/Grid pour adaptation mobile, tests sur différents écrans
- **Menu déroulant** : Implémentation CSS pure sans JavaScript pour la performance
- **Gestion des genres dynamiques** : Requête AJAX-like via PHP pour mise à jour en temps réel
- **Sécurité des commentaires** : Filtrage des gros mots et validation des entrées
- **Affichage des notes** : Passage d'étoiles à émojis poulet avec différenciation visuelle (opacité, échelle)
- **Gestion des erreurs** : Messages d'erreur contextuels pour améliorer l'expérience utilisateur

---

## 🌟 Améliorations Futures

- **Recherche avancée** : Filtrage par titre, réalisateur, année
- **Pagination** : Pour gérer de gros volumes de films
- **Authentification** : Système de comptes pour modération
- **API REST** : Exposition des données pour intégrations tierces
- **Tests unitaires** : Couverture avec PHPUnit
- **Performance** : Cache, optimisation images, lazy loading
- **Accessibilité** : Conformité WCAG, navigation clavier
- **Multilangue** : Support français/anglais

---

## 📌 Notes de Déploiement

- **Environnement local** : XAMPP recommandé pour développement
- **Production** : Serveur Apache/Nginx avec PHP 8+, MySQL 8+
- **Sécurité** : Changer les mots de passe par défaut, utiliser HTTPS
- **Maintenance** : Sauvegardes régulières de la base de données
- **Monitoring** : Logs d'erreur PHP activés

---

## 📊 Évaluation Pédagogique

Ce projet couvre les compétences clés du BUT MMI :
- **Développement web** : PHP, HTML, CSS, responsive
- **Bases de données** : Modélisation, requêtes SQL, PDO
- **Sécurité** : Protection contre injections, validation
- **UX/UI** : Design cohérent, navigation intuitive
- **Gestion de projet** : Travail en équipe, versionnement Git

Le thème ludique (poulets) rend le projet mémorable tout en démontrant la créativité.

---

## 📫 Contact et Remerciements

Projet réalisé avec passion pour la SAE 203. Merci aux enseignants pour leur accompagnement.

**Équipe Crousty Movies** - Avril 2026
