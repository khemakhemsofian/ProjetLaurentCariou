-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 24 mai 2022 à 14:15
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_laurentcariou`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id`, `image`, `description`) VALUES
(1, '418bc820a2c278bddb385b57ed631f3196cf554a.jpg', '<div>azerrtyuiop</div>');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_880E0D76E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `roles`) VALUES
(2, 'a.a@a.com', '$2y$13$j5fiaeZ.Wh4xmuRm8u5KDeAIsFomuFVqxetDznlVzvoYxZSQEAVhO', '[\"ROLE_ADMIN\"]');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lienreseau` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `titre`, `description`, `lienreseau`, `mail`) VALUES
(1, 'contact', '<div>ceci est un paragraphe pour remplir ça ne sert a rien de lire c\'est juste pour montrer que j\'ai un paragraphe merci.ceci est un paragraphe pour remplir ça ne sert a rien de lire c\'est juste pour montrer que j\'ai un paragraphe merci.ceci est un paragraphe pour remplir ça ne sert a rien de lire c\'est juste pour montrer que j\'ai un paragraphe merci.ceci est un paragraphe pour remplir ça ne sert a rien de lire c\'est juste pour montrer que j\'ai un paragraphe merci.ceci est un paragraphe pour remplir ça ne sert a rien de lire c\'est juste pour montrer que j\'ai un paragraphe merci.ceci est un paragraphe pour remplir ça ne sert a rien de lire c\'est juste pour montrer que j\'ai un paragraphe merci.ceci est un paragraphe pour remplir ça ne sert a rien de lire c\'est juste pour montrer que j\'ai un paragraphe merci.ceci est un paragraphe pour remplir ça ne sert a rien de lire c\'est juste pour montrer que j\'ai un paragraphe merci.</div>', 'https://www.google.com/?hl=fr', 'a.a@a.com');

-- --------------------------------------------------------

--
-- Structure de la table `design`
--

DROP TABLE IF EXISTS `design`;
CREATE TABLE IF NOT EXISTS `design` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` int DEFAULT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CD4F5A30BCF5E72D` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `design`
--

INSERT INTO `design` (`id`, `title`, `description`, `categorie_id`, `media`) VALUES
(5, 'test', '<div>test</div>', 1, '5eaa8d3cfced1b1c7bd59959ad4c1f8a588ad249.jpg'),
(8, 'test2', '<div>azertyuiop</div>', 1, '2f2ca87ad2839180b50f8735a9bef3d2d746e2e4.jpg'),
(9, 'mewtwo', '<div>woaww</div>', 2, '40823759a5625f8cb458dfa6e30cffea350e22ad.gif'),
(10, 'test3', '<div>fgghj,n,bgsbbdv</div>', 3, '8741aca946399c1846396f1531a0a7d81f9b3f1e.gif'),
(11, 'test4', '<div>sdffbfnb vbvfcd</div>', 4, '7b5ce94de5309576f890c54268e03955772a7ad6.png');

-- --------------------------------------------------------

--
-- Structure de la table `design_categorie`
--

DROP TABLE IF EXISTS `design_categorie`;
CREATE TABLE IF NOT EXISTS `design_categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categorie_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `design_categorie`
--

INSERT INTO `design_categorie` (`id`, `categorie_name`) VALUES
(1, 'meca'),
(2, 'guns'),
(3, 'voiture'),
(4, 'overlays');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220328120756', '2022-03-28 12:08:24', 385),
('DoctrineMigrations\\Version20220328122736', '2022-03-28 12:27:50', 252),
('DoctrineMigrations\\Version20220328124014', '2022-03-28 12:40:25', 444),
('DoctrineMigrations\\Version20220330083909', '2022-03-30 08:39:21', 357),
('DoctrineMigrations\\Version20220330130344', '2022-03-30 13:03:54', 280),
('DoctrineMigrations\\Version20220330145817', '2022-03-30 14:58:27', 217),
('DoctrineMigrations\\Version20220330150048', '2022-03-30 15:00:53', 190),
('DoctrineMigrations\\Version20220401121247', '2022-04-01 12:12:58', 121),
('DoctrineMigrations\\Version20220401121927', '2022-04-01 12:19:44', 731),
('DoctrineMigrations\\Version20220401123727', '2022-04-01 12:37:38', 104),
('DoctrineMigrations\\Version20220401132820', '2022-04-01 13:28:41', 121),
('DoctrineMigrations\\Version20220407135846', '2022-04-07 13:59:08', 246),
('DoctrineMigrations\\Version20220407140809', '2022-04-07 14:08:23', 156),
('DoctrineMigrations\\Version20220512170245', '2022-05-12 17:02:59', 136),
('DoctrineMigrations\\Version20220524090833', '2022-05-24 09:08:49', 864),
('DoctrineMigrations\\Version20220524123613', '2022-05-24 12:36:23', 105);

-- --------------------------------------------------------

--
-- Structure de la table `fond_ecran`
--

DROP TABLE IF EXISTS `fond_ecran`;
CREATE TABLE IF NOT EXISTS `fond_ecran` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_ecran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fond_ecran`
--

INSERT INTO `fond_ecran` (`id`, `image_ecran`) VALUES
(1, '8764bbb84d71f1da71cd9761c6b969a2121f3033.jpg'),
(2, '69c301c7a443fe3d113938adbdfdcbdc4acaebc6.jpg'),
(3, '26da0d0c5da04af55e1ee44cbc7fb3840d80dabf.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `graphism`
--

DROP TABLE IF EXISTS `graphism`;
CREATE TABLE IF NOT EXISTS `graphism` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_7004936ABCF5E72D` (`categorie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `graphism`
--

INSERT INTO `graphism` (`id`, `title`, `description`, `media`, `categorie_id`) VALUES
(4, 'ttt1', '<div>qsdfghj</div>', '8bdcea4230c055f0686e47d22fec62a9b600f648.gif', 1),
(5, 'ttt2', '<div>qwserty</div>', 'ee9343d584f6b675a6775bfa87911896e650441d.gif', 1),
(6, 'ttt3', '<div>sghjf,nbcnvgfr</div>', '19f6c565d8762428c0214a892c3f459c5c9c4c56.gif', 2),
(7, 'ttt4', '<div>drtyhgf</div>', 'dc93f7343ec1a0342f9935108b44d005abc47bc0.jpg', 3),
(8, 'ttt4', '<div>zertyhgbvd</div>', 'fd9c8f021ee65a2b7917a73cd576a9835be284b8.jpg', 4);

-- --------------------------------------------------------

--
-- Structure de la table `graphism_categorie`
--

DROP TABLE IF EXISTS `graphism_categorie`;
CREATE TABLE IF NOT EXISTS `graphism_categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `categorie_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `graphism_categorie`
--

INSERT INTO `graphism_categorie` (`id`, `categorie_name`) VALUES
(1, 'overlays'),
(2, 'logos'),
(3, 'stikers'),
(4, 'guns');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `design`
--
ALTER TABLE `design`
  ADD CONSTRAINT `FK_CD4F5A30BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `design_categorie` (`id`);

--
-- Contraintes pour la table `graphism`
--
ALTER TABLE `graphism`
  ADD CONSTRAINT `FK_7004936ABCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `graphism_categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
