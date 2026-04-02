# CONSIGNE PROJET :

Le but de ce projet est de créer un catalogue de films en ligne, à l'image d'AlloCiné ou d'IMDb. Le site web comportera les pages suivantes.

Page d'accueil
La page d'accueil affiche tous les films. Pour chaque film, on présente une vignette qui permet de l'identifier (avec une image, le titre et l'année de sortie).

Un menu permet d'afficher les films filtrés par catégorie : par genre (divers genres sont proposés), nouveautés et les mieux notés.

Un bouton permet d'ajouter un nouveau film.

Page d'une catégorie
Cette page est très similaire à la page d'accueil, mais elle n'affiche que les films appartenant à une catégorie donnée :

La catégorie de chaque genre doit afficher tous les films classés dans ce genre (comédie, action, science-fiction, etc.)
La catégorie « Nouveautés » affiche les 10 derniers films ajoutés sur le site web
La catégorie « Mieux notés » affiche les 10 films ayant la meilleure note moyenne
Page d'un film
En cliquant sur la vignette d'un film dans la page d'accueil, l'utilisateur accède à une page dédiée présentant toutes les informations du film :

Titre
Année de sortie
Durée
Genre (par exemple : comédie, drame, action, historique, science-fiction, etc.)
Réalisateur et principaux acteurs
Résumé
Affiche et bande annonce
Note moyenne attribuée par les utilisateurs
Liste de commentaires laissés par les utilisateurs, triés par ordre chronologique décroissant.
Un formulaire permet également de laisser un nouveau commentaire et d'attribuer une note sur 5 points. Quand on envoie un commentaire, le site web nous dirige vers la page du film.

Ajouter un film
Le bouton pour ajouter un film, situé dans le menu, renvoie vers une page avec un formulaire. Pour l'affiche et la bande-annonce, l'utilisateur doit fournir une URL. Le formulaire permet de choisir le genre via une liste déroulante qui affiche tous les genres existants, et propose également un bouton pour ajouter un nouveau genre.

Une fois le formulaire validé, le site redirige vers la page des nouveautés.

Ajouter un genre
Le bouton pour ajouter un nouveau genre, accessible depuis le formulaire d'ajout d'un film, renvoie vers une page comportant un formulaire. Ce formulaire ne demande que le nom du genre.

Après validation, le site redirige vers la page d'ajout d'un nouveau film.

Une page d'accueil HTML de base vous sera fournie afin de vous donner une idée du rendu attendu. Vous devrez ensuite transformer ce fichier en un fichier PHP et développer le site en respectant les points suivants :

Toutes les pages devront faire référence à une même feuille de style CSS.
Les pages web auront la même structure : un entête avec une image et des menus déroulants, un contenu, et un pied de page.
Un menu avec options et sous-options doit permettre de naviguer entre les différents genres ou catégories (Nouveautés, Mieux notés, etc.).
Le design et l'animation sont importants. Ajoutez un logo et de jolies images.
Les pages comporteront des liens hypertexte favorisant une navigation fluide, ainsi que des liens vers les différentes sections de la page si elle est longue.
Le pied de page devra mentionner les noms et adresses mail (mailto) de tous les membres de l'équipe.
Le texte de vos pages devra être mis en forme en utilisant la feuille de style pour :
jouer sur les alignements de paragraphe et de texte (gauche, droite, centré, justifié)
jouer sur les attributs de caractères (gras, italiques, etc.), polices et tailles différentes
Vous devez utiliser des balises <section>, <footer>, <header>, <article>, <nav>, <div>... pour structurer votre page. N'utilisez pas la balise <table> pour organiser la mise en page.
La page doit être responsive. Privilégiez le CSS de base (sans librairies telles que Bootstrap). Si vous utilisez une librairie, vous devrez en expliquer les mécanismes lors de la soutenance.
La consultation des pages doit être possible à partir de la page d'accueil (index.php), et ce sur n'importe quelle dispositif : attention à vos liens, à l'emplacement et au format des fichiers, et à l'encodage des caractères. Vérifiez par vous-même, en recopiant votre dossier à des emplacements différents, que tout fonctionne bien.
Des points supplémentaires seront accordés pour la présentation générale du site (lisibilité, esthétique).

Concernant le coté serveur (PHP et bases de données), votre site web doit implémenter au moins les fonctionnalités suivantes :

Les parties communes entre les différentes pages (entête, menu, pied de page) doivent être intégrées via la fonction include().
Les données du site web (films, genres, commentaires) doivent être gérées par une base de données. Utilisez des requêtes SQL préparées avec PDO pour intégrer ces données dans les pages web.
Les données des trois formulaires (film, genre et commentaire) doivent être correctement validées avant de les traiter.
La page des catégories récupère la catégorie à afficher avec la méthode get.
Dans le formulaire d'ajout d'un film, les options pour le genres sont générées dynamiquement avec PHP à l'aide d'une requête à la base de données.
On peut supprimer un commentaire. Pour chaque commentaire, un bouton permet de le supprimer. Ce bouton renvoie l'utilisateur vers une page qui récupère le commentaire à supprimer (avec la méthode get), le supprime de la base de données, et redirige l'utilisateur vers la page du film.

Concernant le coté serveur (PHP et bases de données), votre site web doit implémenter au moins les fonctionnalités suivantes :

Les parties communes entre les différentes pages (entête, menu, pied de page) doivent être intégrées via la fonction include().
Les données du site web (films, genres, commentaires) doivent être gérées par une base de données. Utilisez des requêtes SQL préparées avec PDO pour intégrer ces données dans les pages web.
Les données des trois formulaires (film, genre et commentaire) doivent être correctement validées avant de les traiter.
La page des catégories récupère la catégorie à afficher avec la méthode get.
Dans le formulaire d'ajout d'un film, les options pour le genres sont générées dynamiquement avec PHP à l'aide d'une requête à la base de données.
On peut supprimer un commentaire. Pour chaque commentaire, un bouton permet de le supprimer. Ce bouton renvoie l'utilisateur vers une page qui récupère le commentaire à supprimer (avec la méthode get), le supprime de la base de données, et redirige l'utilisateur vers la page du film.

Les fonctionnalités demandées constituent la base du projet. Vous pouvez ajouter des fonctionnalités supplémentaires, par exemple :

Un formulaire dans le menu permettant de rechercher par mot-clé dans les informations des films (titre, acteur, réalisateur, année, description, etc.).
Une validation côté client (HTML et JavaScript) pour chaque formulaire (ajout de commentaire, film ou genre).
Une fonction durant la validation des formulaires efface les gros mots dans les commentaires.
Une pagination sur la page d'accueil, affichant 20 films par page, avec des liens pour naviguer entre les pages.
L'affichage des 10 derniers commentaires sur la page d'accueil, avec des liens renvoyant aux films correspondants.
L'affichage, sur la vignette d'un film (page d'accueil ou page de catégorie), du nombre de commentaires.
Un bouton permettant d'afficher ou de masquer la liste des commentaires sur la page d'un film.
La possibilité pour les utilisateurs de liker les commentaires. Chaque commentaire affiche le nombre de likes, et la page d'accueil présente les dix commentaires les plus likés.

# Cours PHP :

Exemple minimal
<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
Exemple minimal
<!DOCTYPE html>
<html>
<head>...</head>
<body>
  <?php
  echo 'Hello World'; // affiche le texte 'Hello World'
  ?>
</body>
</html>
Balises PHP
Le code PHP est écrit entre les balises <?php et ?>

<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
Ce qui est dehors s'affiche tel quel

 Si le fichier finit avec une balise PHP fermante, on peut la supprimer

Deux choses étranges :

Les indices commencent par 0
Différents types de variables dans un même tableau
$tab = array(1, '2', 3.0, 'quatre');
echo $tab[0]; // affiche '1'
echo $tab[3]; // affiche 'quatre'
Question surprise : tableaux numérotés
Qu'est-ce que ça affiche ?

<?php
$tab = array(1, -2, 3, -4, 5);
echo $tab[1];
Choisir  
Tableaux associatifs
Ils ne sont pas indexés avec un entier, mais avec une clé (un string)

// déclaration d'un tableau avec trois valeurs
$tab2 = array(
  'nom' => 'Gonzalez', // on ajoute la clé et le symbole =>
  'prenom' => 'Aldo',
  'bureau' => 'C07'
);
// afficher la valeur de la clé 'bureau'
echo $tab2['bureau'];
N'oubliez pas :

La clé est une chaîne de caractères, utilisez les apostrophes
C'est comme un tableau numéroté, mais avec la clé et le symbole =>
Question surprise : tableaux associatifs
Trouvez les erreurs

<?php
tab = array('seance'-> 'CM2'; 
            'prof'='AldoGL';
            "salle" -> C24;
            'heure' -> 8)
echo $tab(prof);
echo $tab[heure];
Choisir  
Else
Deux blocs d'instructions, un seul est exécuté

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} else {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
}
?>
Elseif
Plusieurs blocs d'instructions, plusieurs conditions

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} elseif ($age > 10) {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
} else {
  echo '<p>On vient d\'envoyer un SMS à tes parents.</p>';
}
?>

While
Boucle avec condition au début
Site web dynamique


Exemple minimal
<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
Exemple minimal
<!DOCTYPE html>
<html>
<head>...</head>
<body>
  <?php
  echo 'Hello World'; // affiche le texte 'Hello World'
  ?>
</body>
</html>
Balises PHP
Le code PHP est écrit entre les balises <?php et ?>

<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
Ce qui est dehors s'affiche tel quel

 Si le fichier finit avec une balise PHP fermante, on peut la supprimer

Tableaux
Un tableau (array) est « une liste de variables ». C'est une variable qui contient une séquence de valeurs

Pourquoi ? Les variables sont souvent groupées : liste de choses, propriétés d'un élément

Deux types : numérotés et associatifs

Tableaux numérotés
Les entrées (éléments, valeurs) sont indexées par des nombres entiers ≥ 0
Déclaration avec array()
Accès à chaque entrée avec []
// déclaration d'un tableau nommé $tab1 avec trois strings : 'ab', 'bc', 'cd'
$tab1 = array('ab', 'bc', 'ce');
// afficher la première valeur : index 0 !!!
echo $tab1[0];
// modifier une entrée
$tab1[2] = 'cd';
 Autre façon de déclarer un tableau : $tab1 = ['ab', 'bc', 'cd'];

Deux choses étranges :

Les indices commencent par 0
Différents types de variables dans un même tableau
$tab = array(1, '2', 3.0, 'quatre');
echo $tab[0]; // affiche '1'
echo $tab[3]; // affiche 'quatre'
Question surprise : tableaux numérotés
Qu'est-ce que ça affiche ?

<?php
$tab = array(1, -2, 3, -4, 5);
echo $tab[1];
Choisir  
Tableaux associatifs
Ils ne sont pas indexés avec un entier, mais avec une clé (un string)

// déclaration d'un tableau avec trois valeurs
$tab2 = array(
  'nom' => 'Gonzalez', // on ajoute la clé et le symbole =>
  'prenom' => 'Aldo',
  'bureau' => 'C07'
);
// afficher la valeur de la clé 'bureau'
echo $tab2['bureau'];
Else
Deux blocs d'instructions, un seul est exécuté

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} else {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
}
?>
Elseif
Plusieurs blocs d'instructions, plusieurs conditions

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} elseif ($age > 10) {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
} else {
  echo '<p>On vient d\'envoyer un SMS à tes parents.</p>';
}
?>

While
Boucle avec condition au début

<?php
$i = 1;
while ($i <= 10) { // while (...)
  echo '<p>i vaut ' . $i . '</p>';
  $i = $i + 1;
}
?>
Fonctions
42

Site web dynamique


Exemple minimal
<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
Exemple minimal
<!DOCTYPE html>
<html>
<head>...</head>
<body>
  <?php
  echo 'Hello World'; // affiche le texte 'Hello World'
  ?>
</body>
</html>
Balises PHP
Le code PHP est écrit entre les balises <?php et ?>

<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
Ce qui est dehors s'affiche tel quel

 Si le fichier finit avec une balise PHP fermante, on peut la supprimer

Question surprise
Ce code est-il valide ?

<?php
$nom = Dupont;
$note = 13,5;
$réussit = $true;
?>
Choisir  
Tableaux
Un tableau (array) est « une liste de variables ». C'est une variable qui contient une séquence de valeurs

Pourquoi ? Les variables sont souvent groupées : liste de choses, propriétés d'un élément

Deux types : numérotés et associatifs

Tableaux numérotés
Les entrées (éléments, valeurs) sont indexées par des nombres entiers ≥ 0
Déclaration avec array()
Accès à chaque entrée avec []
// déclaration d'un tableau nommé $tab1 avec trois strings : 'ab', 'bc', 'cd'
$tab1 = array('ab', 'bc', 'ce');
// afficher la première valeur : index 0 !!!
echo $tab1[0];
// modifier une entrée
$tab1[2] = 'cd';
 Autre façon de déclarer un tableau : $tab1 = ['ab', 'bc', 'cd'];

Deux choses étranges :

Les indices commencent par 0
Différents types de variables dans un même tableau
$tab = array(1, '2', 3.0, 'quatre');
echo $tab[0]; // affiche '1'
echo $tab[3]; // affiche 'quatre'
Question surprise : tableaux numérotés
Qu'est-ce que ça affiche ?

<?php
$tab = array(1, -2, 3, -4, 5);
echo $tab[1];
Choisir  
Else
Deux blocs d'instructions, un seul est exécuté

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} else {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
}
?>
Elseif
Plusieurs blocs d'instructions, plusieurs conditions

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} elseif ($age > 10) {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
} else {
  echo '<p>On vient d\'envoyer un SMS à tes parents.</p>';
}
?>

While
Boucle avec condition au début

<?php
$i = 1;
while ($i <= 10) { // while (...)
  echo '<p>i vaut ' . $i . '</p>';
  $i = $i + 1;
}
?>
Fonctions
41



Tableaux numérotés. Les entrées (éléments, valeurs) sont indexées par des nombres entiers ≥ 0. Déclaration avec array(). Accès à chaque entrée avec []. // déclaration d'un tableau nommé $tab1 avec trois strings : 'ab', 'bc', 'cd' $tab1 = array ( 'ab' , 'bc' , 'ce' ); // afficher la première valeur : index 0 !!! echo $tab1 [ 0 ]; // modifier une entrée $tab1 [ 2 ] = 'cd' ; Autre façon de déclarer un tableau : $tab1 = ['ab', 'bc', 'cd'];.

Deux choses étranges :. Les indices commencent par 0. Différents types de variables dans un même tableau. $tab = array ( 1 , '2' , 3.0 , 'quatre' ); echo $tab [ 0 ]; // affiche '1' echo $tab [ 3 ]; // affiche 'quatre'
<?php
$i = 1;
while ($i <= 10) { // while (...)
  echo '<p>i vaut ' . $i . '</p>';
  $i = $i + 1;
}
?>
Fonctions
44



Tableaux associatifs. Ils ne sont pas indexés avec un entier, mais avec une clé (un string). // déclaration d'un tableau avec trois valeurs $tab2 = array ( 'nom' => 'Gonzalez' , // on ajoute la clé et le symbole => 'prenom' => 'Aldo' , 'bureau' => 'C07' ); // afficher la valeur de la clé 'bureau' echo $tab2 [ 'bureau' ];
Le point-virgule
Chaque instruction (ligne de code) doit finir avec un point-virgule (;)

<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
 On peut supprimer le dernier point-virgule juste avant une balise PHP fermante

echo
echo affiche une chaîne de caractères (un texte)

<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
 On peut aussi utiliser print

Question surprise : fonctions pour tableaux
Quelle ligne affiche la valeur associée à la clé 'bureau' ?

<?php
$tab2 = array('nom'    => 'Gonzalez',
              'prenom' => 'Aldo',
              'bureau' => 'C07');

echo array_search('bureau', $tab2); // (1)
echo array_search($tab2, 'bureau'); // (2)
echo $tab2['bureau'];               // (3)
Choisir  
Tableaux multidimensionnels
On peut imbriquer les tableaux : une entrée de tableau peut être un tableau elle-même

Par exemple, une liste d'éléments avec des propriétés :

$enseignants = array(
  array('prenom' => 'Aldo',  'nom' => 'Gonzalez', 'bureau' => 'C07'),
  array('prenom' => 'David', 'nom' => 'Peyron',   'bureau' => 'C05'),
  array('prenom' => 'Anne',  'nom' => 'Lesme',    'bureau' => 'C02')
);
array_push($enseignants, array('prenom' => 'Toufik', 'nom' => 'Baroudi', 'bureau' => 'C07'));

echo $enseignants[3]['nom']; // affiche 'Baroudi'
En bref
Les variables servent à manipuler des données simples dans un programme. Dès que ces données sont structurées, on les regroupe avec des tableaux

Else
Deux blocs d'instructions, un seul est exécuté

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} else {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
}
?>
Elseif
Plusieurs blocs d'instructions, plusieurs conditions

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} elseif ($age > 10) {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
} else {
  echo '<p>On vient d\'envoyer un SMS à tes parents.</p>';
}
?>

While
Boucle avec condition au début

<?php
$i = 1;
while ($i <= 10) { // while (...)
  echo '<p>i vaut ' . $i . '</p>';
  $i = $i + 1;
}
?>
Fonctions
51

Site web dynamique


Exemple minimal
<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
Exemple minimal
<!DOCTYPE html>
<html>
<head>...</head>
<body>
  <?php
  echo 'Hello World'; // affiche le texte 'Hello World'
  ?>
</body>
</html>
Balises PHP
Le code PHP est écrit entre les balises <?php et ?>

<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
Ce qui est dehors s'affiche tel quel

 Si le fichier finit avec une balise PHP fermante, on peut la supprimer

Fonctions pour les tableaux
Quelques fonctions pour chercher dans un tableau :

// le tableau $tab contient la valeur 'val' ?
in_array('val', $tab);

// le tableau $tab contient la clé 'cle' ?
array_key_exist('cle', $tab);

// renvoie la clé de la valeur 'val' (ou false s'il n'y en a pas)
array_search('val', $tab);
Question surprise : fonctions pour tableaux
Quelle ligne affiche la valeur associée à la clé 'bureau' ?

<?php
$tab2 = array('nom'    => 'Gonzalez',
              'prenom' => 'Aldo',
              'bureau' => 'C07');

echo array_search('bureau', $tab2); // (1)
echo array_search($tab2, 'bureau'); // (2)
echo $tab2['bureau'];               // (3)
Choisir  
Tableaux multidimensionnels
On peut imbriquer les tableaux : une entrée de tableau peut être un tableau elle-même

Par exemple, une liste d'éléments avec des propriétés :

$enseignants = array(
  array('prenom' => 'Aldo',  'nom' => 'Gonzalez', 'bureau' => 'C07'),
  array('prenom' => 'David', 'nom' => 'Peyron',   'bureau' => 'C05'),
  array('prenom' => 'Anne',  'nom' => 'Lesme',    'bureau' => 'C02')
);
array_push($enseignants, array('prenom' => 'Toufik', 'nom' => 'Baroudi', 'bureau' => 'C07'));

echo $enseignants[3]['nom']; // affiche 'Baroudi'
En bref
Les variables servent à manipuler des données simples dans un programme. Dès que ces données sont structurées, on les regroupe avec des tableaux

Else
Deux blocs d'instructions, un seul est exécuté

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} else {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
}
?>
Elseif
Plusieurs blocs d'instructions, plusieurs conditions

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} elseif ($age > 10) {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
} else {
  echo '<p>On vient d\'envoyer un SMS à tes parents.</p>';
}
?>

While
Boucle avec condition au début

<?php
$i = 1;
while ($i <= 10) { // while (...)
  echo '<p>i vaut ' . $i . '</p>';
  $i = $i + 1;
}
?>
Fonctions
50

Site web dynamique


Exemple minimal
<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
Exemple minimal
<!DOCTYPE html>
<html>
<head>...</head>
<body>
  <?php
  echo 'Hello World'; // affiche le texte 'Hello World'
  ?>
</body>
</html>
Balises PHP
Le code PHP est écrit entre les balises <?php et ?>

<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
Ce qui est dehors s'affiche tel quel

 Si le fichier finit avec une balise PHP fermante, on peut la supprimer

Question surprise : tableaux associatifs
Trouvez les erreurs

<?php
tab = array('seance'-> 'CM2'; 
            'prof'='AldoGL';
            "salle" -> C24;
            'heure' -> 8)
echo $tab(prof);
echo $tab[heure];
Choisir  
Pour afficher le contenu d'un tableau :

print_r()
var_dump() (plus complet)
Fonctions pour les tableaux
Quelques fonctions pour chercher dans un tableau :

// le tableau $tab contient la valeur 'val' ?
in_array('val', $tab);

// le tableau $tab contient la clé 'cle' ?
array_key_exist('cle', $tab);

// renvoie la clé de la valeur 'val' (ou false s'il n'y en a pas)
array_search('val', $tab);
Question surprise : fonctions pour tableaux
Quelle ligne affiche la valeur associée à la clé 'bureau' ?

<?php
$tab2 = array('nom'    => 'Gonzalez',
              'prenom' => 'Aldo',
              'bureau' => 'C07');

echo array_search('bureau', $tab2); // (1)
echo array_search($tab2, 'bureau'); // (2)
echo $tab2['bureau'];               // (3)
Choisir  
Tableaux multidimensionnels
On peut imbriquer les tableaux : une entrée de tableau peut être un tableau elle-même

Par exemple, une liste d'éléments avec des propriétés :

$enseignants = array(
  array('prenom' => 'Aldo',  'nom' => 'Gonzalez', 'bureau' => 'C07'),
  array('prenom' => 'David', 'nom' => 'Peyron',   'bureau' => 'C05'),
  array('prenom' => 'Anne',  'nom' => 'Lesme',    'bureau' => 'C02')
);
array_push($enseignants, array('prenom' => 'Toufik', 'nom' => 'Baroudi', 'bureau' => 'C07'));

echo $enseignants[3]['nom']; // affiche 'Baroudi'
Else
Deux blocs d'instructions, un seul est exécuté

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} else {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
}
?>
Elseif
Plusieurs blocs d'instructions, plusieurs conditions

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} elseif ($age > 10) {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
} else {
  echo '<p>On vient d\'envoyer un SMS à tes parents.</p>';
}
?>

While
Boucle avec condition au début

<?php
$i = 1;
while ($i <= 10) { // while (...)
  echo '<p>i vaut ' . $i . '</p>';
  $i = $i + 1;
}
?>
Fonctions
48



Fonctions pour les tableaux. Quelques fonctions pour chercher dans un tableau :. // le tableau $tab contient la valeur 'val' ? in_array ( 'val' , $tab ); // le tableau $tab contient la clé 'cle' ? array_key_exist ( 'cle' , $tab ); // renvoie la clé de la valeur 'val' (ou false s'il n'y en a pas) array_search ( 'val' , $tab );

Tableaux multidimensionnels. On peut imbriquer les tableaux : une entrée de tableau peut être un tableau elle-même. Par exemple, une liste d'éléments avec des propriétés :. $enseignants = array ( array ( 'prenom' => 'Aldo' , 'nom' => 'Gonzalez' , 'bureau' => 'C07' ), array ( 'prenom' => 'David' , 'nom' => 'Peyron' , 'bureau' => 'C05' ), array ( 'prenom' => 'Anne' , 'nom' => 'Lesme' , 'bureau' => 'C02' ) ); array_push ( $enseignants , array ( 'prenom' => 'Toufik' , 'nom' => 'Baroudi' , 'bureau' => 'C07' )); echo $enseignants [ 3 ][ 'nom' ]; // affiche 'Baroudi'

En bref. Les variables servent à manipuler des données simples dans un programme. Dès que ces données sont structurées, on les regroupe avec des tableaux.

echo
echo affiche une chaîne de caractères (un texte)

<?php
echo 'Hello World'; // affiche le texte 'Hello World'
?>
 On peut aussi utiliser print

Tableaux multidimensionnels
On peut imbriquer les tableaux : une entrée de tableau peut être un tableau elle-même

Par exemple, une liste d'éléments avec des propriétés :

$enseignants = array(
  array('prenom' => 'Aldo',  'nom' => 'Gonzalez', 'bureau' => 'C07'),
  array('prenom' => 'David', 'nom' => 'Peyron',   'bureau' => 'C05'),
  array('prenom' => 'Anne',  'nom' => 'Lesme',    'bureau' => 'C02')
);
array_push($enseignants, array('prenom' => 'Toufik', 'nom' => 'Baroudi', 'bureau' => 'C07'));

echo $enseignants[3]['nom']; // affiche 'Baroudi'
En bref
Les variables servent à manipuler des données simples dans un programme. Dès que ces données sont structurées, on les regroupe avec des tableaux

Structures de contrôle
If
Une condition, un bloc d'instructions (entre accolades)

<?php
if ($age < 18) {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
}
?>
Indentez (décalez à droite) toujours le code qui se trouve dans le bloc d'instructions

 S'il n'y a qu'une seule instruction dans le bloc, on peut supprimer les accolades ({ })

Else
Deux blocs d'instructions, un seul est exécuté

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} else {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
}
?>
Elseif
Plusieurs blocs d'instructions, plusieurs conditions

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} elseif ($age > 10) {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
} else {
  echo '<p>On vient d\'envoyer un SMS à tes parents.</p>';
}
?>

While
Boucle avec condition au début

<?php
$i = 1;
while ($i <= 10) { // while (...)
  echo '<p>i vaut ' . $i . '</p>';
  $i = $i + 1;
}
?>
Fonctions
Script simple : suite d'instructions (variables, opérations, structures de contrôle)
Script complexe : milliers de lignes, parties répétitives, difficile à lire...
Pour structurer le code, on utilise les fonctions

Variables superglobales
54



Else. Deux blocs d'instructions, un seul est exécuté. <?php if ( $age > 18 ) { echo '<p>Faites une recherche par mots-clés.</p>' ; } else { echo '<p>Vous n\'avez pas accès à ce contenu.</p>' ; } ?>

Exemple minimal
<!DOCTYPE html>
<html>
<head>...</head>
<body>
  <?php
  echo 'Hello World'; // affiche le texte 'Hello World'
  ?>
</body>
</html>
Question surprise
Ce code est-il valide ?

<?php
$nom = Dupont;
$note = 13,5;
$réussit = $true;
?>
Choisir  
Tableaux
Un tableau (array) est « une liste de variables ». C'est une variable qui contient une séquence de valeurs

Pourquoi ? Les variables sont souvent groupées : liste de choses, propriétés d'un élément

Deux types : numérotés et associatifs

Tableaux numérotés
Les entrées (éléments, valeurs) sont indexées par des nombres entiers ≥ 0
Déclaration avec array()
Accès à chaque entrée avec []
// déclaration d'un tableau nommé $tab1 avec trois strings : 'ab', 'bc', 'cd'
$tab1 = array('ab', 'bc', 'ce');
// afficher la première valeur : index 0 !!!
echo $tab1[0];
// modifier une entrée
$tab1[2] = 'cd';
 Autre façon de déclarer un tableau : $tab1 = ['ab', 'bc', 'cd'];

If
Une condition, un bloc d'instructions (entre accolades)

<?php
if ($age < 18) {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
}
?>
Indentez (décalez à droite) toujours le code qui se trouve dans le bloc d'instructions

 S'il n'y a qu'une seule instruction dans le bloc, on peut supprimer les accolades ({ })

Else
Deux blocs d'instructions, un seul est exécuté

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} else {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
}
?>
Elseif
Plusieurs blocs d'instructions, plusieurs conditions

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} elseif ($age > 10) {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
} else {
  echo '<p>On vient d\'envoyer un SMS à tes parents.</p>';
}
?>

While
Boucle avec condition au début

<?php
$i = 1;
while ($i <= 10) { // while (...)
  echo '<p>i vaut ' . $i . '</p>';
  $i = $i + 1;
}
?>
Do-while
Boucle avec condition à la fin. Bloc exécuté au moins une fois

<?php
$i = 1;
do { // do
  echo '<p>i vaut ' . $i . '</p>';
  $i = $i + 1;
} while ($i <= 10); // while (...); Attention au point-virgule !
?>
Attention au ; après la condition

Fonctions
Script simple : suite d'instructions (variables, opérations, structures de contrôle)
Script complexe : milliers de lignes, parties répétitives, difficile à lire...
Pour structurer le code, on utilise les fonctions

Variables superglobales
55



Elseif. Plusieurs blocs d'instructions, plusieurs conditions. <?php if ( $age > 18 ) { echo '<p>Faites une recherche par mots-clés.</p>' ; } elseif ( $age > 10 ) { echo '<p>Vous n\'avez pas accès à ce contenu.</p>' ; } else { echo '<p>On vient d\'envoyer un SMS à tes parents.</p>' ; } ?>

Exemple minimal
<!DOCTYPE html>
<html>
<head>...</head>
<body>
  <?php
  echo 'Hello World'; // affiche le texte 'Hello World'
  ?>
</body>
</html>
Question surprise
Ce code est-il valide ?

<?php
$nom = Dupont;
$note = 13,5;
$réussit = $true;
?>
Choisir  
Tableaux
Un tableau (array) est « une liste de variables ». C'est une variable qui contient une séquence de valeurs

Pourquoi ? Les variables sont souvent groupées : liste de choses, propriétés d'un élément

Deux types : numérotés et associatifs

Tableaux numérotés
Les entrées (éléments, valeurs) sont indexées par des nombres entiers ≥ 0
Déclaration avec array()
Accès à chaque entrée avec []
// déclaration d'un tableau nommé $tab1 avec trois strings : 'ab', 'bc', 'cd'
$tab1 = array('ab', 'bc', 'ce');
// afficher la première valeur : index 0 !!!
echo $tab1[0];
// modifier une entrée
$tab1[2] = 'cd';
 Autre façon de déclarer un tableau : $tab1 = ['ab', 'bc', 'cd'];

Else
Deux blocs d'instructions, un seul est exécuté

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} else {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
}
?>
Elseif
Plusieurs blocs d'instructions, plusieurs conditions

<?php
if ($age > 18) {
  echo '<p>Faites une recherche par mots-clés.</p>';
} elseif ($age > 10) {
  echo '<p>Vous n\'avez pas accès à ce contenu.</p>';
} else {
  echo '<p>On vient d\'envoyer un SMS à tes parents.</p>';
}
?>

While
Boucle avec condition au début

<?php
$i = 1;
while ($i <= 10) { // while (...)
  echo '<p>i vaut ' . $i . '</p>';
  $i = $i + 1;
}
?>
Do-while
Boucle avec condition à la fin. Bloc exécuté au moins une fois

<?php
$i = 1;
do { // do
  echo '<p>i vaut ' . $i . '</p>';
  $i = $i + 1;
} while ($i <= 10); // while (...); Attention au point-virgule !
?>
Attention au ; après la condition

For
Nombre prédéfini d'itérations (répétitions de la boucle)

<?php
// for (valeur initial; condition; modification)
for ($i = 1; $i <= 10; $i++) {
  echo '<p>i vaut ' . $i . '</p>';
}
?>
$i++ est égal à $i = $i+1. Il existe aussi $i--

Fonctions
Script simple : suite d'instructions (variables, opérations, structures de contrôle)
Script complexe : milliers de lignes, parties répétitives, difficile à lire...
Pour structurer le code, on utilise les fonctions

Variables superglobales
56



While. Boucle avec condition au début. <?php $i = 1 ; while ( $i <= 10 ) { // while (...) echo '<p>i vaut ' . $i . '</p>' ; $i = $i + 1 ; } ?>

Tableaux
Un tableau (array) est « une liste de variables ». C'est une variable qui contient une séquence de valeurs

Pourquoi ? Les variables sont souvent groupées : liste de choses, propriétés d'un élément

Deux types : numérotés et associatifs

For
Nombre prédéfini d'itérations (répétitions de la boucle)

<?php
// for (valeur initial; condition; modification)
for ($i = 1; $i <= 10; $i++) {
  echo '<p>i vaut ' . $i . '</p>';
}
?>
$i++ est égal à $i = $i+1. Il existe aussi $i--

Pour parcourir un tableau on utilise la fonction count()

$acteurs = array('Brad', 'Margot', 'Diego');
// la fonction count() renvoie la taille du tableau
for ($i = 0; $i < count($acteurs); $i++) {
  echo $acteurs[$i];
}
Foreach
Boucle pour les tableaux

// parcourir un tableau (numéroté ou associatif)
foreach ($tab as $val) {
  echo $val;
}

// parcourir avec la clé et la valeur
foreach ($tab as $cle => $val) {
  echo $cle . ' est ' . $val . '<br>';
}
 Pour parcourir et modifier les valeurs d'un tableau,
utilisez une boucle for

Script simple : suite d'instructions (variables, opérations, structures de contrôle)
Script complexe : milliers de lignes, parties répétitives, difficile à lire...
Pour structurer le code, on utilise les fonctions

Une fonction (function) est une suite d'instructions réutilisable qui peut renvoyer une valeur. Souvent, elle a des paramètres (arguments)

On déclare (crée) une fonction une fois, et on l'appelle (utilise) plusieurs fois

Deux mots-clés :

function pour déclarer une fonction
return pour renvoyer une valeur
// déclaration d'une fonction
  function ma_fonction($x, $y) {
    return $x*$x + 2*$y;
  }

  // appel avec les valeurs 3 et 2.6
  echo ma_fonction(3, 2.6);
Même si une fonction n'a pas de paramètres, les parenthèses sont nécessaires

 On donne des valeurs par défaut aux paramètres avec =. [doc]

Tableaux
Un tableau (array) est « une liste de variables ». C'est une variable qui contient une séquence de valeurs

Pourquoi ? Les variables sont souvent groupées : liste de choses, propriétés d'un élément

Deux types : numérotés et associatifs

For
Nombre prédéfini d'itérations (répétitions de la boucle)

<?php
// for (valeur initial; condition; modification)
for ($i = 1; $i <= 10; $i++) {
  echo '<p>i vaut ' . $i . '</p>';
}
?>
$i++ est égal à $i = $i+1. Il existe aussi $i--

Pour parcourir un tableau on utilise la fonction count()

$acteurs = array('Brad', 'Margot', 'Diego');
// la fonction count() renvoie la taille du tableau
for ($i = 0; $i < count($acteurs); $i++) {
  echo $acteurs[$i];
}
Foreach
Boucle pour les tableaux

// parcourir un tableau (numéroté ou associatif)
foreach ($tab as $val) {
  echo $val;
}

// parcourir avec la clé et la valeur
foreach ($tab as $cle => $val) {
  echo $cle . ' est ' . $val . '<br>';
}
 Pour parcourir et modifier les valeurs d'un tableau,
utilisez une boucle for

Deux mots-clés :

function pour déclarer une fonction
return pour renvoyer une valeur
// déclaration d'une fonction
  function ma_fonction($x, $y) {
    return $x*$x + 2*$y;
  }

  // appel avec les valeurs 3 et 2.6
  echo ma_fonction(3, 2.6);
Même si une fonction n'a pas de paramètres, les parenthèses sont nécessaires

 On donne des valeurs par défaut aux paramètres avec =. [doc]

Utilisez des fonctions partout. Si vous avez plus de 20 lignes consécutives de code PHP, mettez-les dans une fonction
Fonctions internes
PHP propose beaucoup (≥ 10 000) de fonctions déjà faites : include(), var_dump(), idate(), print_r(), in_array(), array_key_exist(), etc

On ne peut pas connaître toutes ces fonctions. Cherchez sur Google ou sur la documentation de PHP pour trouver la fonction que vous voulez

Variables superglobales
PHP déclare automatiquement plusieurs variables de type tableau : ce sont les variables superglobales

Ces variables sont : $GLOBALS, $_SERVER, $_GET, $_POST, $_FILES, $_COOKIE, $_SESSION, $_REQUEST et $_ENV

Formulaires
66


Fonctions internes. PHP propose beaucoup (≥ 10 000) de fonctions déjà faites : include() , var_dump() , idate() , print_r() , in_array() , array_key_exist() , etc. On ne peut pas connaître toutes ces fonctions. Cherchez sur Google ou sur la documentation de PHP pour trouver la fonction que vous voulez.
Utilisez des fonctions partout. Si vous avez plus de 20 lignes consécutives de code PHP, mettez-les dans une fonction
Fonctions internes
PHP propose beaucoup (≥ 10 000) de fonctions déjà faites : include(), var_dump(), idate(), print_r(), in_array(), array_key_exist(), etc

On ne peut pas connaître toutes ces fonctions. Cherchez sur Google ou sur la documentation de PHP pour trouver la fonction que vous voulez

Variables superglobales
PHP déclare automatiquement plusieurs variables de type tableau : ce sont les variables superglobales

Ces variables sont : $GLOBALS, $_SERVER, $_GET, $_POST, $_FILES, $_COOKIE, $_SESSION, $_REQUEST et $_ENV

Formulaires
64



Deux mots-clés :. function pour déclarer une fonction. return pour renvoyer une valeur. // déclaration d'une fonction function ma_fonction ( $x , $y ) { return $x * $x + 2 * $y ; } // appel avec les valeurs 3 et 2.6 echo ma_fonction ( 3 , 2.6 ); Même si une fonction n'a pas de paramètres, les parenthèses sont nécessaires. On donne des valeurs par défaut aux paramètres avec = . [ doc ].

Pour parcourir un tableau on utilise la fonction count()

$acteurs = array('Brad', 'Margot', 'Diego');
// la fonction count() renvoie la taille du tableau
for ($i = 0; $i < count($acteurs); $i++) {
  echo $acteurs[$i];
}
Utilisez des fonctions partout. Si vous avez plus de 20 lignes consécutives de code PHP, mettez-les dans une fonction
Fonctions internes
PHP propose beaucoup (≥ 10 000) de fonctions déjà faites : include(), var_dump(), idate(), print_r(), in_array(), array_key_exist(), etc

On ne peut pas connaître toutes ces fonctions. Cherchez sur Google ou sur la documentation de PHP pour trouver la fonction que vous voulez

Variables superglobales
PHP déclare automatiquement plusieurs variables de type tableau : ce sont les variables superglobales

Ces variables sont : $GLOBALS, $_SERVER, $_GET, $_POST, $_FILES, $_COOKIE, $_SESSION, $_REQUEST et $_ENV

$_GET
La variable superglobale $_GET est un tableau associatif qui contient les paramètres de l'URL

// URL : index.php?type=feu&page=3
echo $_GET['type']; // affiche 'feu'
echo $_GET['page']; // affiche 3
Application : mettre des informations dans un hyperlien

$_POST
La variable superglobale $_POST est elle aussi un tableau associatif

On l'utilise pour récupérer les données entrées dans un formulaire

D'autres variables superglobales très utilisées :

$_SESSION pour les sessions
$_COOKIE pour les cookies
$_FILES pour envoyer des fichiers avec un formulaire
Formulaires
Un utilisateur peut interagir avec un site web dynamique uniquement à travers un formulaire

Par exemple :

Se connecter à son compte
Faire une recherche
Laisser un commentaire
Traitement des formulaires
69



$_GET. La variable superglobale $_GET est un tableau associatif qui contient les paramètres de l'URL. // URL : index.php?type=feu&page=3 echo $_GET [ 'type' ]; // affiche 'feu' echo $_GET [ 'page' ]; // affiche 3 Application : mettre des informations dans un hyperlien.

Pour parcourir un tableau on utilise la fonction count()

$acteurs = array('Brad', 'Margot', 'Diego');
// la fonction count() renvoie la taille du tableau
for ($i = 0; $i < count($acteurs); $i++) {
  echo $acteurs[$i];
}
Utilisez des fonctions partout. Si vous avez plus de 20 lignes consécutives de code PHP, mettez-les dans une fonction
Fonctions internes
PHP propose beaucoup (≥ 10 000) de fonctions déjà faites : include(), var_dump(), idate(), print_r(), in_array(), array_key_exist(), etc

On ne peut pas connaître toutes ces fonctions. Cherchez sur Google ou sur la documentation de PHP pour trouver la fonction que vous voulez

PHP déclare automatiquement plusieurs variables de type tableau : ce sont les variables superglobales

Ces variables sont : $GLOBALS, $_SERVER, $_GET, $_POST, $_FILES, $_COOKIE, $_SESSION, $_REQUEST et $_ENV

$_GET
La variable superglobale $_GET est un tableau associatif qui contient les paramètres de l'URL

// URL : index.php?type=feu&page=3
echo $_GET['type']; // affiche 'feu'
echo $_GET['page']; // affiche 3
Application : mettre des informations dans un hyperlien

$_POST
La variable superglobale $_POST est elle aussi un tableau associatif

On l'utilise pour récupérer les données entrées dans un formulaire

D'autres variables superglobales très utilisées :

$_SESSION pour les sessions
$_COOKIE pour les cookies
$_FILES pour envoyer des fichiers avec un formulaire
Formulaires
Un utilisateur peut interagir avec un site web dynamique uniquement à travers un formulaire

Par exemple :

Se connecter à son compte
Faire une recherche
Laisser un commentaire
Traitement des formulaires
70



$_POST. La variable superglobale $_POST est elle aussi un tableau associatif. On l'utilise pour récupérer les données entrées dans un formulaire.

D'autres variables superglobales très utilisées :

$_SESSION pour les sessions
$_COOKIE pour les cookies
$_FILES pour envoyer des fichiers avec un formulaire
Formulaires
Un utilisateur peut interagir avec un site web dynamique uniquement à travers un formulaire

Par exemple :

Se connecter à son compte
Faire une recherche
Laisser un commentaire
Traitement des formulaires
Fonctions internes
PHP propose beaucoup (≥ 10 000) de fonctions déjà faites : include(), var_dump(), idate(), print_r(), in_array(), array_key_exist(), etc

On ne peut pas connaître toutes ces fonctions. Cherchez sur Google ou sur la documentation de PHP pour trouver la fonction que vous voulez

$_POST
La variable superglobale $_POST est elle aussi un tableau associatif

On l'utilise pour récupérer les données entrées dans un formulaire

D'autres variables superglobales très utilisées :

$_SESSION pour les sessions
$_COOKIE pour les cookies
$_FILES pour envoyer des fichiers avec un formulaire
Formulaires
Un utilisateur peut interagir avec un site web dynamique uniquement à travers un formulaire

Par exemple :

Se connecter à son compte
Faire une recherche
Laisser un commentaire
Exemple minimal
Deux fichiers : formulaire.html et affichage.php

[...]
    <form method="post" action="affichage.php">
      <input type="text" name="un_texte">
      <input type="submit" value="Valider">
    </form>
  </body>
</html>
[...]
  <p>
    Vous avez écrit <?php echo $_POST['un_texte']; ?> dans le formulaire.
  </p>
</body>
</html>
En HTML, un formulaire peut contenir beaucoup de types de widgets différents : zones de texte, boîtes à sélection, boutons, cases à cocher, etc

Champ texte
<form method="post" action="affichage.php">
  Nom : <input type="text" name="user_name">
  <input type="submit" value="Valider">
</form>
Nom : 
 
Le texte se trouve dans $_POST['user_name']

Traitement des formulaires
Tout formulaire renvoie vers un fichier PHP qui fait :

Validation : vérifier que les données sont complètes et correctes
Traitement : les utiliser (normalement avec une base de données)
Conclusion
74



Exemple minimal. Deux fichiers : formulaire.html et affichage.php. [...] < form method = "post" action = "affichage.php" > < input type = "text" name = "un_texte" > < input type = "submit" value = "Valider" > </ form > </ body > </ html > [...] < p > Vous avez écrit <?php echo $_POST [ 'un_texte' ]; ?> dans le formulaire. </ p > </ body > </ html >

Fonctions internes
PHP propose beaucoup (≥ 10 000) de fonctions déjà faites : include(), var_dump(), idate(), print_r(), in_array(), array_key_exist(), etc

On ne peut pas connaître toutes ces fonctions. Cherchez sur Google ou sur la documentation de PHP pour trouver la fonction que vous voulez

$_POST
La variable superglobale $_POST est elle aussi un tableau associatif

On l'utilise pour récupérer les données entrées dans un formulaire

D'autres variables superglobales très utilisées :

$_SESSION pour les sessions
$_COOKIE pour les cookies
$_FILES pour envoyer des fichiers avec un formulaire
Boutons radio
<form method="post" action="affichage.php">
  <input type="radio" name="color" value="red"> Rouge
  <input type="radio" name="color" value="green"> Vert
  <input type="radio" name="color" value="blue"> Bleu
  <input type="submit" value="Valider">
</form>
 Rouge  Vert  Bleu 
Groupe d'options avec un seul choix possible. Même attribut name pour tous. Input avant le texte

Avec les boutons radio, les valeur possibles sont déjà définies dans le code HTML avec l'attribut value

if ($_POST['color'] == 'red') {
  echo 'Vous avez choisi rouge';
} elseif ($_POST['color'] == 'green') {
  echo 'Vous avez choisi vert';
} else {
  echo 'Vous avez choisi bleu';
}
Bref
Utilisez les widgets en fonction des données que vous demandez
Correspondance entre la valeur de l'attribut name et la clé dans le tableau $_POST
Ces widgets ont beaucoup de fonctionalités, explorez MDN Web Docs pour en savoir plus
Traitement des formulaires
Tout formulaire renvoie vers un fichier PHP qui fait :

Validation : vérifier que les données sont complètes et correctes
Traitement : les utiliser (normalement avec une base de données)
Conclusion
81


Bref. Utilisez les widgets en fonction des données que vous demandez. Correspondance entre la valeur de l'attribut name et la clé dans le tableau $_POST. Ces widgets ont beaucoup de fonctionalités, explorez MDN Web Docs pour en savoir plus.

D'autres variables superglobales très utilisées :

$_SESSION pour les sessions
$_COOKIE pour les cookies
$_FILES pour envoyer des fichiers avec un formulaire
Exemple minimal
Deux fichiers : formulaire.html et affichage.php

[...]
    <form method="post" action="affichage.php">
      <input type="text" name="un_texte">
      <input type="submit" value="Valider">
    </form>
  </body>
</html>
[...]
  <p>
    Vous avez écrit <?php echo $_POST['un_texte']; ?> dans le formulaire.
  </p>
</body>
</html>
En HTML, un formulaire peut contenir beaucoup de types de widgets différents : zones de texte, boîtes à sélection, boutons, cases à cocher, etc

Champ texte
<form method="post" action="affichage.php">
  Nom : <input type="text" name="user_name">
  <input type="submit" value="Valider">
</form>
Nom : 
 
Le texte se trouve dans $_POST['user_name']

Tout formulaire renvoie vers un fichier PHP qui fait :

Validation : vérifier que les données sont complètes et correctes
Traitement : les utiliser (normalement avec une base de données)
Never trust user input
Ne faites pas confiance aux données envoyées par l'utilisateur :

Champs vides
Champs avec des valeurs fausses
Failles de sécurité (XSS)
Vérifier que les valeurs sont cohérentes :

if (strlen($_POST['mdp']) >= 8) {
  // faire quelque chose
} else {
  echo 'Mot de passe trop court. <a href="formulaire.html">Retour</a>';
}
Valider plusieurs données, afficher une seule erreur

if ($_POST['number'] > 100) {
  echo 'Nombre trop grand. <a href="formulaire.html">Retour</a>';
} elseif (strlen($_POST['mdp']) < 8) {
  echo 'Mot de passe trop court. <a href="formulaire.html">Retour</a>';
} else {
  // traiter les données
  // ...
}
Valider plusieurs données, afficher toutes les erreurs

$erreur = false;
if ($_POST['number'] > 100) {
  echo 'Nombre trop grand.';
  $erreur = true;
}
if (strlen($_POST['mdp']) < 8) {
  echo 'Mot de passe trop court.';
  $erreur = true;
} 
if ($erreur) { // pareil que if ($erreur == true)
  echo '<a href="formulaire.html">Retour</a>';
} else {
  // traiter les données
}
Conclusion
Code PHP + base de données = code HTML
Formulaire + base de données + code PHP = site web dynamique
Formulaire → validation → traitement
85



Vérifier que les valeurs sont cohérentes :. if ( strlen ( $_POST [ 'mdp' ]) >= 8 ) { // faire quelque chose } else { echo 'Mot de passe trop court. <a href="formulaire.html">Retour</a>' ; }

PHP DATABASE :

R213 – TD #1
Développement web S2
Aldo Gonzalez-Lorenzo
aldo.gonzalez-lorenzo@univ-amu.fr
Bureau C07
phpMyAdmin
On peut manipuler (voir, créer, modifier) une base de données avec le logiciel phpMyAdmin, au lieu d'écrire en SQL.

phpMyAdmin est installé dans notre serveur web. Il est sur a-pedagoarles-mmi.aix.univ-amu.fr/phpmyadmin

Exercice 1
Importez cette base de données dans votre serveur web local

Afficher le résultat
Il suffit de parcourir le tableau (for, foreach) et afficher son contenu

// ...
echo '<ul>';
foreach ($result as $row) {
  echo '<li>' . $row['title'] . ' (' . $row['year'] . ')</li>'; // <li>Dune (1984)</li>
}
echo '</ul>';
?>
Exercice 2
Faites une page qui affiche les prénoms de la table etudiants sous forme de liste à puces (<ul>)

Bref
Connexion → requête → récupération → affichage
Deux mots-clé de PHP que vous ne maîtrisez pas : new et ->. C'est la programmation orientée objet
Attention aux plusieurs variables : $dbh (connexion), $sth (requête), $values (variables de la requête), $result (résultat)
Autres requêtes SQL
Les autres requêtes SQL sont l'insertion (INSERT INTO), la modification (UPDATE) et la suppression (DELETE FROM)

Utilisateurs + BDD = site web dynamique

25


Attention aux plusieurs variables : $dbh (connexion), $sth (requête), $values (variables de la requête), $result (résultat).

Bref
Connexion → requête → récupération → affichage
Deux mots-clé de PHP que vous ne maîtrisez pas : new et ->. C'est la programmation orientée objet
Attention aux plusieurs variables : $dbh (connexion), $sth (requête), $values (variables de la requête), $result (résultat)
Modifier une entrée
se connecter à la base de données
faire la requête SQL préparée
$dbh = new PDO('mysql:host=localhost;dbname=a25012345;charset=utf8', 'a25012345', 'secret');
$sth = $dbh->prepare('UPDATE users 
                      SET display_name = :name
                      WHERE user_login = :login');
$values = array('name'  => $nom,
                'login' => $user_login);
$sth->execute($values);
Exercice
Corrigez ce code :

$sth = $dbh->prepare('UPDATE users 
                      SET password = ' . $_POST['mdp'] . 
                      ' WHERE user_login = ' . $_POST['login']);
$sth->execute();
Choisir  
Supprimer une entrée
se connecter à la base de données
faire la requête SQL préparée
$dbh = new PDO('mysql:host=localhost;dbname=a25012345;charset=utf8', 'a25012345', 'secret');
$sth = $dbh->prepare('DELETE FROM films 
                      WHERE title=:nom_film');
$values = array('nom_film' => $_GET['film']);
$sth->execute($values);
Exercice
Dans la validation d'un formulaire, vous devez vérifier si l'adresse email est déjà utilisée. Comment vous faites ?

Exercice 1
Importez cette base de données dans votre serveur web local

Afficher le résultat
Il suffit de parcourir le tableau (for, foreach) et afficher son contenu

// ...
echo '<ul>';
foreach ($result as $row) {
  echo '<li>' . $row['title'] . ' (' . $row['year'] . ')</li>'; // <li>Dune (1984)</li>
}
echo '</ul>';
?>
Exercice 2
Faites une page qui affiche les prénoms de la table etudiants sous forme de liste à puces (<ul>)

Bref
Connexion → requête → récupération → affichage
Deux mots-clé de PHP que vous ne maîtrisez pas : new et ->. C'est la programmation orientée objet
Attention aux plusieurs variables : $dbh (connexion), $sth (requête), $values (variables de la requête), $result (résultat)
Exemple :

$dbh = new PDO('mysql:host=localhost;dbname=a25012345;charset=utf8', 'a25012345', 'secret');
$sth = $dbh->prepare('INSERT INTO users(user_login, user_mail, display_name) 
                      VALUES(:login, :email, :name)');
$values = array('login' => $nom, 
                'email' => $adresse, 
                'name'  => $nom_prenom);
$sth->execute($values);
Exercice 3
Ajoutez un formulaire pour ajouter des nouveaux prénoms.

Modifier une entrée
se connecter à la base de données
faire la requête SQL préparée
$dbh = new PDO('mysql:host=localhost;dbname=a25012345;charset=utf8', 'a25012345', 'secret');
$sth = $dbh->prepare('UPDATE users 
                      SET display_name = :name
                      WHERE user_login = :login');
$values = array('name'  => $nom,
                'login' => $user_login);
$sth->execute($values);
Exercice
Corrigez ce code :

$sth = $dbh->prepare('UPDATE users 
                      SET password = ' . $_POST['mdp'] . 
                      ' WHERE user_login = ' . $_POST['login']);
$sth->execute();
Choisir  
Supprimer une entrée
se connecter à la base de données
faire la requête SQL préparée
$dbh = new PDO('mysql:host=localhost;dbname=a25012345;charset=utf8', 'a25012345', 'secret');
$sth = $dbh->prepare('DELETE FROM films 
                      WHERE title=:nom_film');
$values = array('nom_film' => $_GET['film']);
$sth->execute($values);
33


Modifier une entrée. se connecter à la base de données. faire la requête SQL préparée. $dbh = new PDO ( 'mysql:host=localhost;dbname=a25012345;charset=utf8' , 'a25012345' , 'secret' ); $sth = $dbh -> prepare ( 'UPDATE users SET display_name = :name WHERE user_login = :login' ); $values = array ( 'name' => $nom , 'login' => $user_login ); $sth -> execute ( $values );


Supprimer une entrée. se connecter à la base de données. faire la requête SQL préparée. $dbh = new PDO ( 'mysql:host=localhost;dbname=a25012345;charset=utf8' , 'a25012345' , 'secret' ); $sth = $dbh -> prepare ( 'DELETE FROM films WHERE title=:nom_film' ); $values = array ( 'nom_film' => $_GET [ 'film' ]); $sth -> execute ( $values );

# COURS HTML :

Module
Intégration web
toufik.baroudi@amu.fr

BAROUDI Toufik

Introduction à
HTML5
2
Concepts de base
HTTP (Hyper Text Transfert Protocol ):
 Protocole de transmission permettant à l'utilisateur d'accéder à des
 pages web par l'intermédiaire d'un navigateur.
HTML (Hyper Text Markup Language) :
Langage de marques (balises) utilisé pour la création des pages web
et pour afficher l’information dans un navigateur web.
URL (Uniform Resource Locator) :
Système d’adresses utilisé pour localiser toutes les pages web.
Concepts de base
 Les balises structurent le contenu de la page (texte, images, etc.)
 Chaque balise a un rôle et donne du sens au contenu présenté.
 Les balises ne sont pas sensibles à la casse, la balise <P> marche
 également que <p>.

Une première Page Web
Structure: Elle est déterminée par une hiérarchie de balises avec
 des sémantiques différentes.
<! DOCTYPE html >
<html>
<head>
 <title> Les informations de la page </title>
 </head>
 <body>
Le contenu de la page
</body>
</html>
Les balises HTML 5
Par convention et pour faciliter la lecture du code, toute balise
ouverte doit être fermée (sauf exception).
 Certaines balises bien particulières n’ont pas besoin d’être fermées,
on les dit " auto-fermantes », elles n’ont ni contenu ni balise fermante.
 Elle ne peut pas être placée que dans certains parties de la hiérarchie.
 Elle a une signification (ou sémantique) particulière.
Les balises HTML 5
Structure d’une balise:
 Le contenu visible de la balise est défini entre la balise d’ouverture
 et la balise de fermeture..
 Propriétés d’une balise:
 Permettent d’affecter des caractéristiques et des valeurs à la balise.
 Elles ne sont pas visibles.

Les titres
Ces balises permettent de définir des titres des différentes importances.
 On a 6 niveaux de hiérarchie.
<! DOCTYPE html >
<html>
<body>
<h1> Un premier entete </h1>
<h2> Un deuxieme entete </h2>
<h3> Un trosieme entete </h3>
<h4> Un quatrieme entete </h4>
<h5> Un cinquieme entete </h5>
<h6> Un sixieme entete </h6>
</body>
</html>
Les paragraphes
Ces balises permettent d’appliquer des formats différents à chaque
 paragraphe.
<! DOCTYPE html >
<html>
<body>
<p> Un premier paragraphe </p>
<p> Un deuxieme paragraphe </p>
<p> Un trosieme paragraphe </p>
</body>
</html>
Les paragraphes
La propriété title dans la balise paragraphe permet d’ajouter un title
 flottant sur le paragraphe.
<! DOCTYPE html >
<html>
<body>
 <p title="premier title" > Un premier paragraphe
 </p>
 <p title="deuxieme title" > Un deuxieme paragraphe
 </p>
</body>
</html>
Les paragraphes
La balise br :
❑Cette balise permet de passer à la ligne suivante.
❑Elle peut être utilisée à l’intérieur de n’importe quelle autre balise.
❑Elle n’a pas besoin d’une balise de fermeture.
<! DOCTYPE html >
<html>
<body>
 <p title="premier title" > This is <br >a paragraph
<br >with line breaks .</p>
</body>
</html>
Les paragraphes
La balise pre :
❑Permet de conserver les espaces et les changements de ligne dans
 un paragraphe.
<! DOCTYPE html >
<html>
<body>
 <pre >
Ta tete , ton geste , ton air
Sont beaux comme un beau paysage ;
Le rire joue en ton visage
Comme un vent frais dans un ciel clair .
 </pre >
</body>
</html>
Liens
La Balise Anchor :
❑Utilisés pour faire référence à une autre page web.
❑La propriété href permet d’établir l’adresse URL pointée par le lien.
❑Le texte visible sera affiché par défaut souligné et en bleu.
<! DOCTYPE html >
<html>
<body>
 <a href="https://www.google.com" > Voila un lien
</a>
</body>
</html>
Images
La Balise Image :
❑Utilisés pour faire référence à une image.
❑La propriété src permet d’établir l’adresse relative de l’image à afficher.
❑Les propriétés width et height établissent les dimensions de l’image.
<! DOCTYPE html >
<html>
<body>
 <img src="image/logo.jpeg» width="140"
 height="142">
</body>
</html>
Quelques propriétés
Attributs Description
alt Permet de donner une description de l’image ou du visuel si ce dernier
n’apparaît pas à l’écran.
disabled Permet de signaler si l’élément n’est pas habilité.
href Spécifié l’URL qui fait référence à un ressource.
id Spécifié un identifient unique à l’élément.
src Spécifié l’URL pour une image.
style Permet de spécifier le style CSS pour l’élément.
title Spécifié de l’information additionnelle pour un élément.
L’élément HEAD
L’élément head permet de stocker la méta-information sur la page web.
 L’information contenue dans cette balise n’est pas affichée.
<! DOCTYPE html >
<html>
<head>
 <title> Ma premiere page web </title>
 <Meta charset="UTF-8">
 </head>
 <body>
 </body>
</html>
Application des styles
On peut changer le format du contenu à l’intérieur d’une balise en
 utilisant la propriété style.
<! DOCTYPE html >
<html>
<head>
 <title> Ma premiere page web </title>
 <Meta charset="UTF-8">
 </head>
 <body>
 <p style="propriete:valeur;"> Paragraphe style</p>
 </body>
</html>
Application des styles
Exemple:
<! DOCTYPE html >
<html>
<head>
 <title> Ma premiere page web </title>
 <Meta charset="UTF-8">
 </head>
 <body>
 <p style="color:red;"> Texte en rouge.</p>
 <p style="font-family:courier;"> Texte courier.</p>
 <p style="font-size:160%;"> Texte petit.</p>
 <p style="text-align:center;"> Texte en centre.</p>
 </body>
</html>
Application des formats
Il est possible de formater le contenu d’une page web en utilisant
certaines balises
<html>
<body>
 <b> Texte en Gras.</b>
 <strong> Plus en Gras.</strong>
 <i> Texte en Italique.</i>
 <h2> Texte <small> petit </small> </h2>
 <h2> Texte <mark> souligne </mark> </h2>
 <p> Texte <sub> soucrit </sub> </p>
 <p> Texte <sup> supercrit </sup> </p>
 </body>
</html>
Exercice 1:
Travaillez individuellement pour réaliser une première mise en page d’un
document HTML. Le sujet du document est libre mais la structure doit respecter les
consignes données ci-dessous.
❑1 Écrivez une page web contenant un title principal et deux sections secondaires.
❑2 Ajoutez un paragraphe après le title principal et deux paragraphes différents à
l’intérieur de chaque section.
❑3 Ajoutez deux liens à la fin de chaque section afin d’offrir la possibilité d’aller
vers Wikipédia.
❑4 Changez le format de chaque paragraphe afin de qu’il soit facile de faire la
distinction entre eux. Par exemple, augmentez la taille de la police d’un
paragraphe, ou la couleur de la police, ou le type de police.
Feuilles de style
Création des styles :
❑Il existe une balise qui permet de centraliser les styles qui seront
utilisés dans la page actuelle.
<html>
 <head>
 <style>
 body {background-color: powderblue;}
 h1 {color: blue;} p {color: red;}
 </style>
 </head>
 <body>
 <h1> Voici l’entête </h1>
 <p> Voici le paragraphe </p>
 </body>
</html>
Feuilles de style
Création des styles :
❑Il existe une balise qui permet de centraliser les styles qui seront
utilisés dans la page actuelle.
<html>
 <head>
 <link rel="stylesheet" href= "styles.css">
 </head>
 <body>
 <h1> Voici l’entête </h1>
 <p> Voici le paragraphe </p>
 </body>
</html>
Images
Références aux images:
❑Cette balise permet d’ajouter des références aux images en local
mais aussi sur des serveurs distants.
<html>
 <body>
 <h2> Logo de l’IUT d’Aix-Marseille </h2>
 <img src="img/logo_iut.jpg" alt="logo de l’IUT
 d’Aix-Marseille" style="width:304px;
 height:228px;" >
 <img src="img/logo_iut.jpg" alt="logo de l’IUT
 d’Aix-Marseille" "width="304" height="228" >
 </body>
</html>
Images
Images comme liens:
❑Les images peuvent être utilisées comme un lien vers d’autres pages..
<html>
 <body>
 <a href="www.univ-amu.fr">
 <img src="img/logo_iut.jpg" alt="logo de l’IUT
 d’Aix-Marseille" style="width:42px;
 height:42px;"border:0» >
 </a>
 </body>
</html>
Placement des images
Images flottantes:
❑Les images peuvent être placées du coté droit ou du coté gauche
 des paragraphes.
<html>
 <body>
 <p>
 <img src="img/logo_iut.jpg" alt="logo de l’IUT
 d’Aix-Marseille" style="float:right;width:42px;
 height:42px;>
 <!--L’image sera placée à droite du texte-->
 </p>
 </body>
</html>
Tableaux
Utilité des tableaux
❑Les tableaux permettent d’organiser les information d’une page en
utilisant des lignes et des colonnes.
<table >
 <tr>
 <th> Prenom </th>
 <th> Nom </th>
 </tr>
 <tr>
 <td> Daniel </td>
 <td> Korea </td>
 </tr>
 <tr>
 <td> Michel </td>
 <td> Leblanc </td>
 </tr>
</table>
Tableaux
Organisation des tableaux
❑Il est possible de faire qu’une colonne s’étend sur plusieurs colonnes
ou qu’une ligne s’étend sur plusieurs lignes.
<table >
 <tr>
 <th> Nom </th>
 <th colspan="2"> Telephone </th>
 </tr>
 <tr>
 <td> Daniel Korea </td>
 <td> 0875489912 </td>
 <td> 0659784217 </td>
 </tr>
</table>
Tableaux
Organisation des tableaux
❑Il est possible de faire qu’une colonne s’étend sur plusieurs colonnes
ou qu’une ligne s’étend sur plusieurs lignes.
<table >
 <tr>
 <th> Nom </th>
 <td> Daniel Korea </td>
 </tr>
 <tr>
 <th rowspan="2"> Telephone </th>
 <td> 0875489912 </td>
 </tr>
 <tr>
 <td> 0659784217 </td>
 </tr>
</table>
Les balises pour les tableaux
Attributs Description
table Pour définir une table,
th Permet de définir une cellule d’entête,
tr Spécifie une ligne de la table,
td Spécifie une cellule,
caption Spécifie un texte lié au tableau,
colgroup Permet de regrouper des colonnes pour appliquer un format,
col Spécifie les propriétés de colonnes pour les colonnes à l’intérieur d’un
colgroup.
thead Regroupe le contenu de l’entête dans un tableau,
tfoot Regroupe le contenu de footer dans un tableau,
Les formulaires
Utilité
❑Un formulaire permet de récupérer de l’information de l’utilisateur.
❑Chaque formulaire doit être défini avec une balise form et tous les
 contrôles doivent être contenus à l’intérieur de cette balise.
<form>
 Prenom : <br>
 <input type="text" name="Prenom" value="Korea"> <br>
 Nom: <br>
 <input type="text" name="Nom" value="Daniel"> <br><br>
 <input type="submit" value="Envoyer">
 </form>
Les formulaires
Ajouter un champ de libellé
❑Un libellé est un champ de texte prérempli avec une
 indication pour guider le visiteur du site sur ce qu’il
 doit écrire.
<form>
 <label> Prenom : </label><br>
 <input type="text" name="Prenom" value="Korea"> <br>
 <label> Nom: </label> <br>
 <input type="text" name="Nom" value="Daniel"> <br><br>
</form>
Les formulaires
Regroupement des champs
❑Il est possible de regrouper un ensemble des champs à l’intérieur du
formulaire. Ce groupe permet d’organiser sémantiquement les
informations composant le formulaire
<form>
 <fieldset>
 <legend> Informations personnelles: </legend>
 Prenom : <br>
 <input type="text" name="Prenom" value="Korea"> <br>
 Nom: <br>
 <input type="text" name="Nom" value="Daniel"> <br><br>
 </fieldset>
 <input type="submit" value="Envoyer">
 </form>
Les formulaires
Champ Select
❑Il permet de sélectionner une valeur à partir d’une liste de sélection
fixe. Il est utilisé quand la liste d’options est connue à l’avance.
<form>
 <select name ="voitures">
 <option value="volvo"> Volvo </option>
 <option value="opel"> Opel </option>
 <option value="fiat"> Fiat </option>
 <option value="audi"> Audi </option>
 </select>
 </form>
Les formulaires
Aire de texte
❑Elle est utilisée pour que l’utilisateur puisse introduire des
paragraphes de texte. Il est possible d’établir le nombre des lignes
et des colonnes de l’aire.
<form>
 <textarea name ="Message" rows="10" cols="30">
 Dans cette section on peut insérer un texte longue
 </textarea>
 </form>
Les formulaires
Liste de données
❑Elle permet d’établir une liste des valeurs pour un contrôle d’entrée.
❑Elle est toujours utilisée avec un champ input.
<form>
 <input list ="Navigateurs" name="Navigateurs">
 <datalist id="Navigateurs">
 <option value="Firefox">
<option value="Chrome">
<option value="Opera»>
<option value="Safari»>
 </datalist>
 </form>
Les formulaires
Soumission de données
❑L’input Submit permet d’envoyer les données du formulaire.
❑L’input Reset permet d’effacer les données du formulaire.
❑L’input password permet d’introduire des mots de passe.
<form>
 Login:
 <input type ="text" name="login" value="">
 Password:
 <input type ="password" name="password" value="">
 <input type ="submit" value="Envoyer">
 <input type ="reset" value="Effacer»>
</form>
Les formulaires
Champ de sélection unique
❑Permet de forcer l’utilisateur à choisir une seule parmi les options
affichées. Il n’est pas possible de choisir plus d’une option. Toutes
les options disponibles sont affichées.
<form>
 <input type ="radio" name="reponse" value="Vrai"
 checked> Vrai <br>
 <input type ="radio" name="reponse" value="Faux" > Faux
</form>
Les formulaires
Champ de sélection multiple
❑Permet à l’utilisateur à choisir plusieurs options parmi toutes des
options affichées. Toutes les options disponibles sont affichées.
<form>
 <input type ="checkbox" name="MoyTrans" value="Velo" >
 Velo <br>
 <input type ="checkbox" name="MoyTrans" value="Voiture" >
 Voiture <br>
 <input type ="checkbox" name="MoyTrans" value="Train" >
 Train <br>
 <input type ="checkbox" name="MoyTrans" value="Avion" >
 Avion <br>
</form>
Les formulaires
Autres types d’input
❑Sélectionner une couleur.
❑Choisir une date.
❑Introduire une adresse émail.
<form>
 Choisir une couleur : <input type ="color" name="Couleur» >
 Date d’anniversaire : <input type ="date" name="Anniversaire»>
 Mel : <input type ="email" name="email" >
</form>
Les formulaires
Restrictions sur les entrées
❑Il est possible d’appliquer des restrictions sur le contenu à
 introduire dans un champ.
Attributs Description
disabled Spécifie si un champ est habilité.
max Valeur maximale pour l’entrée.
maxlength Longueur maximale de la chaîne introduite.
min Spécifie la valeur minimale pour l’entrée
readonly Indique que le champ est seulement de lecture.
required Spécifie que le champ est obligatoire.
size Spécifie la largeur maximale du champ.
Balise Div
Utilité
❑Elle s’étend tout au large de la page.
❑Elle est souvent utilisée pour la mise en page et l’organisation de
l’information sur une page
<div style = "background-color: black; color:white; ">
 <h2> Paris</h2>
 <p>
 Paris est une des villes les plus belles du monde . Son
 patrimoine architectural et culturale est presque inegale
 </p>
</div>
Balise Span
Utilité
❑Elle contient en général du texte et elle s’adapte au contenu à
l’intérieur.
❑Elle est souvent utilisée pour contenir des messages d’erreur ou pour
des sections adaptables au contenu dans une page
< input type="text" name="nom"> <span
style="color:red"> Il y a eu une erreur dans le nom
</span>
Multimédia en HTML
Vidéo
❑La balise <video> permet d’afficher des vidéos avec les formats
supportés par le navigateur. Il est possible de définir la taille de la
fenêtre de visualisation.
<video width= "320" height="240" controls>
 <source src= "media/video1.mp4" " type="video/mp4">
 Le texte à afficher si la vidéo ne se charge pas
</video>
Multimédia en HTML
Son
❑Il est aussi possible d’ajouter un reproducteur de son à l’intérieur de
votre page Web. Les trois formats de son supportés sont :
 MP3, Ogg et Wav.
<Audio controls>
 <source src= "media/son1.mp3" " type="audio/mpeg">
 Le texte à afficher si le son ne se charge pas
</Audio>
Character entities
Explication
❑Il existe des caractères réservés en HTML (>,<, etc)
❑Ces entités permettent d’exprimer ces caractères sans que le
navigateur les confonde avec des balises HTML.
Symbole Entité Description
< &lt; Moins que
> &gt; Plus grand que
& &amp; E-Commercial
‘ &apos; Apostrophe
€ &euro; Euro
© &copy; Copyright
® &reg; Marque enregistrée

# COURS CSS : 
