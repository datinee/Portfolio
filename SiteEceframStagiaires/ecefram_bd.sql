-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 13 juil. 2023 à 13:20
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecefram_bd`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(500) COLLATE utf16_bin DEFAULT NULL,
  `description` varchar(5000) COLLATE utf16_bin DEFAULT NULL,
  `photo` varchar(50) COLLATE utf16_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `nom`, `description`, `photo`) VALUES
(1, 'Trousseaux Scolaires pour tous - Campagne 2023 - 2024', 'Bonjour à tous,\r\nL\'association ECEFRAM a l\'immense plaisir de vous inviter à sa soirée musicale pour la collecte de fonds destinés à financer 2000 trousseaux scolaires pour nos enfants necessiteux en Algérie. Vous pouvez directement réserver avec le lien sécurisé ci-dessous :', 'images/Soiree24Juin.png');

-- --------------------------------------------------------

--
-- Structure de la table `adherents`
--

DROP TABLE IF EXISTS `adherents`;
CREATE TABLE IF NOT EXISTS `adherents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `tel` char(10) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `adherent` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adherents`
--

INSERT INTO `adherents` (`id`, `nom`, `prenom`, `tel`, `mail`, `adherent`) VALUES
(2, 'folly', 'valou', '0615452432', 'jsp@ouioui.com', ''),
(3, 'Dupont', 'Laurent', '0654127814', 'exemple@ouioui.com', ''),
(7, 'Ouaki', 'Walid', '0615452432', 'exemple@ouioui.com', '');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `login`, `mdp`) VALUES
(1, 'toto', 'ab4f63f9ac65152575886860dde480a1'),
(2, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

DROP TABLE IF EXISTS `date`;
CREATE TABLE IF NOT EXISTS `date` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `date`
--

INSERT INTO `date` (`id`, `libelle`) VALUES
(1, '18-06-2020'),
(2, '14-05-2017'),
(3, '12-03-2019');

-- --------------------------------------------------------

--
-- Structure de la table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `idDonateur` int NOT NULL,
  `idDate` date NOT NULL,
  `montant` int DEFAULT NULL,
  PRIMARY KEY (`idDonateur`,`idDate`),
  KEY `fk_date` (`idDate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `donation`
--

INSERT INTO `donation` (`idDonateur`, `idDate`, `montant`) VALUES
(3, '2021-06-11', 50),
(1, '2021-06-04', 15),
(3, '2021-04-01', 45);

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf16_bin DEFAULT NULL,
  `descriptif` varchar(300) COLLATE utf16_bin DEFAULT NULL,
  `photo` varchar(50) COLLATE utf16_bin DEFAULT NULL,
  `galerie` varchar(50) COLLATE utf16_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `nom`, `descriptif`, `photo` ,`galerie`) VALUES
(1, 'FRENDA', NULL, 'images/Frenda/frenda2017-2.JPG', 'galerieFrenda'),
(2, 'ANNABA', NULL, 'images/Annaba/annaba2019-5.jpg', 'galerieAnnaba'),
(3, 'MISSERGHINE', NULL, 'images/Misserghine/misserghine2019-2.jpg', 'galerieMisserghine'),
(4, 'EL-OUED', NULL, 'images/Eloued/eloued2019-5.jpg', 'galerieEloued'),
(5, 'MOSTAGANEM', NULL, 'images/image2/mostaganem8.jpg', 'galerieMostaganem');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
