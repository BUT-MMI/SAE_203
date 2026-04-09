-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 09 avr. 2026 à 14:57
-- Version du serveur : 8.0.45-0ubuntu0.22.04.1
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `r25012763`
--

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `idgenre` int NOT NULL,
  `libelle` varchar(40) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`idgenre`, `libelle`, `description`) VALUES
(1, 'Science-Fiction', 'Explorez l\'inexploré. Des voyages intersidéraux aux futurs dystopiques, cette catégorie repousse les limites de la technologie et de l\'imaginaire pour questionner notre place dans l\'univers.'),
(2, 'Action', 'Attachez votre ceinture. Entre cascades spectaculaires, courses-poursuites effrénées et combats épiques, plongez dans un univers où l\'adrénaline est reine et où chaque seconde compte.'),
(3, 'Drame', 'L\'émotion à l\'état pur. Ces films explorent la complexité des relations humaines et les dilemmes de la vie à travers des récits poignants, réalistes et profondément touchants.'),
(4, 'Comédie', 'Le remède parfait contre la grisaille. Des quiproquos hilarants aux parodies déjantées, retrouvez une sélection de films conçus pour vous faire rire aux éclats et vous détendre.'),
(5, 'Horreur', 'Frissons garantis. Affrontez vos peurs les plus profondes avec des récits surnaturels, des thrillers psychologiques sombres et des rencontres terrifiantes qui vous tiendront en haleine jusqu\'au bout de la nuit.'),
(6, 'Autre', ''),
(7, 'Animation', 'Un art complémentaire au cinéma. Plongez dans des intrigues palpitantes, des jeux de piste psychologiques et des mystères insolubles où le danger rôde à chaque coin de rue.'),
(8, 'Thriller', 'La curiosité n\'est pas un vilain défaut. Retrouvez ici les pépites inclassables, les documentaires fascinants et les genres hybrides qui sortent des sentiers battus pour vous surprendre.'),
(11, 'Western', 'L\'aventure à l\'état sauvage. Partez à la conquête de l\'Ouest à travers des paysages grandioses, des duels légendaires sous un soleil de plomb et des récits de justice où la frontière entre héros et hors-la-loi est parfois bien mince.'),
(12, 'Biopic', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`idgenre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `idgenre` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
