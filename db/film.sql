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
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `idfilm` int NOT NULL,
  `titre` varchar(70) NOT NULL,
  `annee` year NOT NULL,
  `duree` int DEFAULT NULL,
  `resume` text,
  `affiche` tinytext,
  `bandeannonce` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `realisateur` varchar(30) NOT NULL,
  `acteurs` varchar(250) NOT NULL,
  `idgenre` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`idfilm`, `titre`, `annee`, `duree`, `resume`, `affiche`, `bandeannonce`, `realisateur`, `acteurs`, `idgenre`) VALUES
(1, 'Oppenheimer', 2023, 180, 'Le film présente une narration non linéaire, entrelaçant différentes périodes de la vie de Robert Oppenheimer : ses années de Cambridge à Los Alamos, son audition de sécurité en 1954 et l\'audition parlementaire de Strauss en 1959. L\'histoire est ici résumée en suivant l\'ordre chronologique des événements.', 'https://fr.web.img5.acsta.net/pictures/23/05/26/16/52/2793170.jpg', 'https://www.youtube.com/embed/bK6ldnjE3Y0', 'Christopher Nolan', 'Cillian Murphy, Emily Blunt, Matt Damon, Robert Downey Jr., Florence Pugh', 12),
(2, 'Le Voyage de Chihiro', 2001, 124, 'Le film raconte l\'histoire de Chihiro, une fillette de dix ans qui, alors qu\'elle se rend en famille vers sa nouvelle maison, entre dans le monde des esprits. Après la transformation de ses parents en porcs par la sorcière Yubaba, Chihiro prend un emploi dans le Palais des Bains de la sorcière pour retrouver ses parents et regagner le monde des humains. ', 'https://upload.wikimedia.org/wikipedia/en/thumb/d/db/Spirited_Away_Japanese_poster.png/250px-Spirited_Away_Japanese_poster.png', 'https://www.youtube.com/embed/3A15oNid2DY', 'Hayao Miyasaki', 'Rumi Hiiragi, Miyu Irino, Mari Natsuki, Takashi Naito, Yasuko Sawaguchi, Tsunehiko Kamijō, Takehiko Ono, Bunta Sugawara', 7),
(3, 'Le Château Ambulant', 2004, 119, 'Le film se déroule dans un royaume fictif où la magie et la technologie du début du vingtième siècle sont répandues, avec pour toile de fond une guerre avec un autre royaume. Il raconte l’histoire de Sophie, une jeune modiste qui est transformée en vieille femme par une sorcière qui entre dans sa boutique et la maudit. Elle rencontre un sorcier nommé Hauru et se retrouve engagée dans son combat pour le roi.', 'https://upload.wikimedia.org/wikipedia/en/thumb/a/a0/Howls-moving-castleposter.jpg/250px-Howls-moving-castleposter.jpg', 'https://youtube.com/embed/hhdopPrI68Q', 'Hayao Miyasaki', 'Chieko Baisho, Takuya Kimura, Akihiro Miwa', 7),
(4, 'One Battle After Another', 2025, 162, 'Lorsque leur ennemi juré refait surface après 16 ans, une bande d\'anciens révolutionnaires se réunit pour sauver la fille de l\'un des leurs.', 'https://upload.wikimedia.org/wikipedia/en/thumb/5/5d/One_Battle_After_Another.jpg/250px-One_Battle_After_Another.jpg', 'https://www.youtube.com/embed/FxiaNwYr_cQ', 'Paul Thomas Anderson', 'Leonardo DiCaprio, Sean Penn, Benicio del Toro, Regina Hall, Teyana Taylor, Chase Infiniti', 2),
(5, 'Là-haut', 2009, 96, 'Carl Fredricksen, petit garçon, rêve d\'être un explorateur depuis qu\'il a vu aux actualités du cinéma les exploits de Charles Muntz, célèbre aventurier qui, à bord de son dirigeable et accompagné de ses chiens, a découvert les chutes du Paradis, un tepuy perdu dans la Guyane vénézuélienne. Suivant ses exploits avec admiration, le garçon apprend que son idole aurait ramené le squelette d\'une créature qu\'il nommera \"le monstre des chutes du Paradis\" mais sera considéré comme un faux par les scientifiques. Contraint de sauver son honneur, Charles Muntz décide de retourner en Amérique du Sud pour prouver au monde qu\'il a raison en ramenant la créature vivante. Jouant dans la rue en imitant son héros, Carl fait la connaissance d\'Ellie, une petite fille délurée qui partage le même rêve que lui.', 'https://fr.web.img3.acsta.net/c_310_420/medias/nmedia/18/66/97/50/19104240.jpg', 'https://www.youtube.com/embed/p-TdCD6DBfM', 'Pete Docker', 'Edward Asner', 7),
(6, 'Douze Hommes en colère', 1957, 95, 'Un juré réfractaire tente d\'empêcher une erreur judiciaire en forçant les autres membres du jury à réexaminer les preuves.', 'https://static.wikia.nocookie.net/cinematheque/images/8/8f/12_hommes_en_col%C3%A8re_-_Poster_vo_%280%29.jpg/revision/latest/thumbnail/width/360/height/450?cb=20230401153119&path-prefix=fr', 'https://www.youtube.com/embed/TEN-2uTi2c0', 'Sydney Lumet', 'Henry Fonda, Lee J. Cobb, Ed Begley, Jack Warden, Martin Balsam, Jack Klugman, John Fiedler, E. G. Marshall', 3),
(7, 'Zootopie 2', 2025, 120, 'Sans l\'accord de leur hiérarchie, Judy Hopps et Nick Wilde enquêtent sur l\'arrivée probable de serpents à Zootopie. Certains que la ville est menacée, ils Infiltrent une soirée mondaine où ils découvrent une situation plus complexe.', 'https://fr.web.img6.acsta.net/c_310_420/img/45/ac/45ac77474bfae505033a30909e4eda41.jpg', 'https://www.youtube.com/embed/lliLY89jdyw', 'Pete Docker', 'Edward Asner', 7),
(8, 'Jean de florette', 1986, 121, 'ans un petit village de Haute Provence, Jean de Florette vient s\'installer sur le terrain dont il vient d\'hériter et rêve à de merveilleuses cultures. Mais Ugolin a lui aussi un projet pour ce terrain : y faire pousser des oeillets. Le vieil oncle Papet va l\'y aider...', 'https://m.media-amazon.com/images/I/51ly10qcCWL._AC_UF894,1000_QL80_.jpg', 'https://www.youtube.com/embed/V44E_YanQsg', 'Claude Berri', 'Yves Montand Daniel Auteuil', 3),
(9, 'Parasite', 2019, 132, 'La famille Kim, vivant dans la précarité, s\'immisce par la ruse au service des richissimes Park en se faisant passer pour des employés qualifiés et sans aucun lien de parenté. Cette infiltration ingénieuse, d\'abord teintée d\'humour noir, bascule tragiquement lorsqu\'une découverte inattendue dans la demeure révèle les tensions souterraines et la violence de la lutte des classes. Entre manipulation et survie, le film dépeint avec brio l\'abîme social infranchissable qui finit par broyer ces deux mondes que tout oppose.', 'https://m.media-amazon.com/images/I/71960VfyitL._AC_UF1000,1000_QL80_.jpg', 'https://www.youtube.com/embed/_YD8WKEZaPo', 'Bong Joon-Ho', 'Cho Yeo-jeong, Park So-dam, Lee Sun Gyun, Choi Woo-shik, Park Seo-joon, Song Kang-ho', 8),
(10, 'John Wick', 2014, 101, 'Depuis la mort de sa femme bien-aimée, John Wick passe ses journées à retaper sa Ford Mustang de 1969, avec pour seule compagnie sa chienne Daisy. Il mène une vie sans histoire, jusqu’à ce qu’un malfrat sadique nommé Iosef Tarasof remarque sa voiture. John refuse de la lui vendre. Iosef n’acceptant pas qu’on lui résiste, s’introduit chez John avec deux complices pour voler la Mustang, et tuer sauvagement Daisy…\r\n\r\nJohn remonte la piste de Iosef jusqu’à New York. Un ancien contact, Aurelio, lui apprend que le malfrat est le fils unique d’un grand patron de la pègre, Viggo Tarasof. La rumeur se répand rapidement dans le milieu : le légendaire tueur cherche Iosef. Viggo met à prix la tête de John : quiconque l’abattra touchera une énorme récompense. John a désormais tous les assassins de New York aux trousses.', 'https://fr.web.img4.acsta.net/pictures/14/10/08/11/49/255061.jpg', 'https://www.youtube.com/embed/pWK5crMuhHY', 'Chad Stahelski', 'Keanu Reeves, Michael Nyqvist, Alfie Allen, Willem Dafoe', 2),
(11, 'Mission : Impossible – The Final Reckoning', 2025, 169, 'Nos vies sont la somme de nos choix. Tom Cruise est Ethan Hunt dans Mission: Impossible – The Final Reckoning.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp9XmB0Ho6yCEQncxWYNU9crOyrpsKZIhUWQ&s', 'https://www.youtube.com/embed/k3m3pYa_APg', 'Cristopher McQuarrie', 'Tom Cruise, Hayley Atwell, Ving Rhames', 2),
(12, 'Bohemian Rhapsody', 2018, 134, 'Bohemian Rhapsody retrace le destin extraordinaire du groupe Queen et de leur chanteur emblématique Freddie Mercury, qui a défié les stéréotypes, brisé les conventions et révolutionné la musique. Du succès fulgurant de Freddie Mercury à ses excès, risquant la quasi-implosion du groupe, jusqu’à son retour triomphal sur scène lors du concert Live Aid, alors qu’il était frappé par la maladie, découvrez la vie exceptionnelle d’un homme qui continue d’inspirer les outsiders, les rêveurs et tous ceux qui aiment la musique.', 'https://fr.web.img5.acsta.net/c_310_420/pictures/18/05/15/16/26/2028013.jpg', 'https://www.youtube.com/embed/-9WPJ46FdAE', 'Bryan Singer', 'Rami Malek, Ben Hardy, Joseph Mazzello, Gwilym Lee, Lucy Boynton', 12),
(13, 'Bob Marley: One Love', 2024, 107, 'Bob Marley: One Love célèbre la vie et la musique d\'une icône qui a inspiré des générations à travers son message d\'amour et d\'unité.\r\n\r\nPour la première fois sur grand écran, découvrez l\'histoire puissante de Bob Marley, sa résilience face à l’adversité, le chemin qui l’a amené à sa musique révolutionnaire.', 'https://fr.web.img6.acsta.net/c_310_420/pictures/24/01/18/11/59/2019347.jpg', 'https://www.youtube.com/embed/agCFmyKHWk8', 'Reinaldo Marcus Green', 'Kingsley Ben-Adir, Lashana Lynch, James Norton', 12),
(14, 'Forrest Gump', 2015, 140, 'Quelques décennies d\'histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l\'étrange odyssée d\'un homme simple et pur, Forrest Gump.', 'https://fr.web.img2.acsta.net/c_310_420/pictures/15/10/13/15/12/514297.jpg', 'https://www.youtube.com/embed/q2AP7dAeVhw', 'Robert Zemeckis', 'Tom Hanks, Gary Sinise, Robin Wright', 4),
(15, 'Mais où est donc passée la septième compagnie?', 1973, 91, 'Pendant la débâcle française de 1940, la 7ème compagnie se réfugie dans les bois. Mais, elle est prise en embuscade par l\'armée allemande. Seuls trois hommes partis en éclaireur en réchappent. Ils se retrouvent livrés à eux-mêmes dans une France occupée.', 'https://fusion.molotov.tv/arts/i/446x588/Ch8SHQoUjxQcLMTDKS5fSiTATkjt4-9EDTsSA2pwZxgB/jpg', 'https://www.youtube.com/embed/3Ob1XwvGC1A', 'Robert Lamoureux', 'Jean Lefebvre, Pierre Mondy, Aldo Maccione', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`idfilm`),
  ADD KEY `idGenre` (`idgenre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `idfilm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`idgenre`) REFERENCES `genre` (`idgenre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
