# SAE_203 - Crousty Movies

![Crousty Movies](img/croutsy.png)

Crousty Movies est un catalogue de films développé en PHP et MySQL/MariaDB. Le site propose une interface visuelle responsive avec des pages de listes, des pages de catégories, des fiches de films détaillées et des fonctionnalités de gestion de films, de genres et de commentaires.

---

## 🎨 Charte graphique

- Couleur de fond : `#F5EFE1`
- Couleur de fond accentuée : `#EEE2C7`
- Couleur de contour brun : `#DED0B0`
- Couleur d'accentuation : `#EA5368`
- Couleur de texte : `#5E4B41`
- Couleur d'ombre : `#5E4B41`
- Contour rouge : `border: 1px solid rgba(233, 69, 96, 0.4)`

---

## 🚀 Fonctionnalités principales

### Navigation
- **Logo cliquable** renvoyant à la page d'accueil
- **Menu des genres** déroulant avec navigation vers chaque catégorie
- **Lien Nouveautés** pour afficher les derniers films ajoutés
- **Lien Mieux notés** pour afficher les films les mieux notés
- **Bouton Ajouter un film** pour accéder au formulaire d'ajout

### Pages du site
- **Page d'accueil** affichant tous les films sous forme de cartes
- **Pages de catégorie** (genres, nouveautés, mieux notés)
- **Page de détail film** avec toutes les informations du film
- **Formulaire d'ajout de film** avec sélection de genre dynamique
- **Formulaire d'ajout de genre** pour enrichir la base de données

### Films et genres
- Chaque film contient : titre, année, affiche, genre
- Les films sont triés par genre, nouveautés ou note moyenne
- Les genres ont une description et une page dédiée

### Commentaires
- Ajout de commentaire depuis la page du film
- Affichage de la liste des commentaires du film
- Possibilité de supprimer un commentaire

---

## 🧩 Structure du projet

- `index.php` : page d'accueil avec les films
- `categorie.php` : page des catégories et genres
- `film.php` : page de détail d'un film
- `nouveau_film.php` : formulaire pour ajouter un film
- `nouveau_genre.php` : formulaire pour ajouter un genre
- `ajouter_commentaire.php` : insertion de commentaire
- `supprimer_commentaire.php` : suppression de commentaire
- `include/db.php` : connexion PDO à la base de données
- `include/entete.php` : entête et menu communs
- `include/pied.php` : pied de page commun
- `css/style.css` : feuille de style principale

---

## 💾 Base de données

Le projet utilise une base de données SQL pour stocker :
- films
- genres
- commentaires

La connexion est gérée avec PDO et des requêtes préparées pour sécuriser les données.

---

## 🛠 Difficultés rencontrées

- Gestion des **différents formats de base de données** (PostgreSQL / MySQL)
- Mise en place d'une **navigation responsive** et d'un menu déroulant propre
- Adaptation du site pour qu'il soit **visuellement cohérent sur mobile et desktop**
- Implémentation de la **gestion dynamique des genres** dans le formulaire d'ajout de film
- Ajout d'une interface pour **afficher et supprimer des commentaires**

---

## 🌟 Suggestions d'amélioration

- Ajouter une **recherche globale** par titre, genre ou réalisateur
- Mettre en place une **pagination** sur la page d'accueil
- Ajouter la gestion des **acteurs et réalisateurs** sur la fiche film
- Afficher la **note moyenne** directement sur la carte du film
- Ajouter une **validation côté client** (JavaScript) pour les formulaires
- Proposer un **système de likes** sur les commentaires
- Ajouter un **système d'authentification** pour gérer les droits d'édition
- Intégrer une **barre de recherche dans le menu** pour filtrer les films rapidement

---

## 📌 Notes de déploiement

- Vérifier la configuration du fichier de connexion à la base de données
- Si le site est déployé sur un serveur externe, adapter les paramètres de `db.php`
- S'assurer que la base de données importée correspond bien au format attendu

---

## 📫 Contact

Projet réalisé dans le cadre du BUT MMI, avec un design inspiré d'une interface de catalogue de films.

Bonne lecture et bonne découverte du projet !
