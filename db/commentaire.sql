-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 09 avr. 2026 à 14:56
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
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `idcommentaire` int NOT NULL,
  `datecommentaire` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `note` int NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `avis` text,
  `idfilm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`idcommentaire`, `datecommentaire`, `note`, `pseudo`, `avis`, `idfilm`) VALUES
(5, '2026-04-03 20:18:27', 5, 'Ulyxx3', 'meilleur film de 2025 by far ', 4),
(6, '2026-04-07 12:50:38', 5, 'Ulyxx3', 'Banger absolu ***', 3),
(9, '2026-04-09 04:19:54', 4, 'Rege', 'banger, merci miyasaki', 3),
(10, '2026-04-09 08:28:34', 5, 'Freddie Mercury', 'Absolute banger', 12),
(11, '2026-04-09 09:07:24', 1, 'Hater N*1', 'Pas vu', 8),
(12, '2026-04-09 11:57:30', 4, 'Rege', 'Bien mais film d\'animation putain de surcoté en vrai', 5),
(13, '2026-04-09 13:56:27', 5, 'gabriel', '10 SUR 10\r\n', 7),
(14, '2026-04-09 13:58:27', 5, 'GABRIEL', 'écrivez votre avis...', 5),
(16, '2026-04-09 14:02:51', 3, 'proVo', 'la vo est mieux mm mmm', 7),
(17, '2026-04-09 14:02:57', 1, 'Clikies', 'Je préfère largement 21 pilots...', 6),
(18, '2026-04-09 14:07:30', 2, 'AnimeLover', 'Je préf ghibli', 7),
(22, '2026-04-09 14:30:16', 5, 'Nelox', 'Nolan knows ball.', 1),
(23, '2026-04-09 14:30:34', 5, 'AZERTY', 'IL EST LA ', 15),
(24, '2026-04-09 14:30:45', 5, 'IronManLover13', 'Mais non ! Iron Man était en réalité avocat ?', 1),
(25, '2026-04-09 14:30:59', 5, 'Kaboom_92i', 'Tellement épicé qu\'il en est explosif, ce poulet.', 1),
(26, '2026-04-09 14:31:13', 5, 'Pommita', '🍏🍏🍏🍏🍏', 1),
(27, '2026-04-09 14:31:29', 4, 'Hater', 'Même moi j\'arrive pas à hate, c\'est quoi ce poulet atomique ?!', 1),
(28, '2026-04-09 14:32:24', 2, 'Grobébé48', 'Ces cochons sont flippants...', 2),
(29, '2026-04-09 14:32:44', 5, 'Lover', 'Ghibli prime', 2),
(30, '2026-04-09 14:33:01', 4, 'xX_Kaaris_Xx', 'Ce poulet m\'a donné envie d\'aller au studio carrément.', 2),
(31, '2026-04-09 14:34:44', 5, 'Nelox', 'Merci myasaki tu as trauma mon enfance. <3', 2),
(32, '2026-04-09 14:35:42', 5, 'GABB', 'CHERCHE STAGE ', 12),
(33, '2026-04-09 14:35:45', 4, 'Ewan', '-1 poulet parce qu\'y a pas de salle de muscu dans le chateau', 3),
(34, '2026-04-09 14:36:37', 5, 'COMM', 'FAUT DES COMM', 9),
(35, '2026-04-09 14:36:51', 5, 'ENCORE', 'ENCORE', 9),
(36, '2026-04-09 14:37:15', 4, 'J AI DIT ENCORE', 'ENCOREEEE\r\n', 9),
(37, '2026-04-09 14:38:03', 4, 'JSP OU JE SUIS ', 'J AIME BIEN MAIS VASY', 10),
(38, '2026-04-09 14:38:12', 5, 'Nelox', 'DiCarpaccio Magnifique', 4),
(39, '2026-04-09 14:38:26', 4, 'ChatSurClavier', 'ezsjlzdlfvkuredommmmmmmmmmmmmhgfjsqdfcbbbbbbbbbb', 4),
(40, '2026-04-09 14:38:41', 4, 'LA REF ', 'LA REF DE LA VESTE A 1H18 STP\r\n', 14),
(41, '2026-04-09 14:39:30', 5, 'JEAN MARLEY', 'WSHHHH ON A LE MEME NOMMM\r\n', 13),
(42, '2026-04-09 14:40:19', 2, 'Avion_747', 'J\'ai peur dans les airs maintenant.', 5),
(43, '2026-04-09 14:40:56', 3, 'Nelox', 'Aze.', 5),
(44, '2026-04-09 14:41:30', 2, 'xX_Kaaris_Xx', 'Pas fou le poulet Jamaïcain', 13),
(45, '2026-04-09 14:41:43', 5, 'ON LAISSE TRKL ', 'WSHH ON VOIS MA MAISON A 1H14\r\n', 11),
(46, '2026-04-09 14:42:14', 4, 'Lover', 'J\'ai envie d\'enfiler des sandales et rouler en scooter dans les rues du village.', 13),
(47, '2026-04-09 14:42:31', 5, 'BOB', '****** DE *****  EST ECLAT2', 11),
(48, '2026-04-09 14:43:21', 4, 'Flo', 'La frappe', 15),
(50, '2026-04-09 14:44:20', 4, 'Pépé_grincheux8', 'Voilà..... Ca c\'est de l\'humour..... du vrai.... pas celui de maintenant....', 15),
(51, '2026-04-09 14:44:41', 1, 'CLIQUE CLIQUE', 'RATATATATTAATATATATTAATAAATAATATATAT', 11),
(52, '2026-04-09 14:45:34', 5, 'BENJI', 'NAYAAAGNEARREAAA', 11),
(53, '2026-04-09 14:45:46', 3, 'Music_Hater', 'HMmmmm.... mHmmmm....', 12),
(54, '2026-04-09 14:46:55', 5, 'Nelox', 'Ce film est tellement fort que j\'avais autant chaud que les personnages :(', 6),
(55, '2026-04-09 14:47:09', 5, 'Rege', 'Meilleur huit-clos', 6),
(56, '2026-04-09 14:52:12', 2, 'Nelox', 'Ratio', 8),
(57, '2026-04-09 14:53:17', 5, 'Nelox', 'Ce film, c\'est comme une boite de chocolats.', 14);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idcommentaire`),
  ADD KEY `idFilm` (`idfilm`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idcommentaire` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`idfilm`) REFERENCES `film` (`idfilm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
