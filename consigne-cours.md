CONSIGNE PROJET :

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

Cours PHP :

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


COURS HTML :



COURS CSS : 
