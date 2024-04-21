-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 21 juin 2021 à 06:57
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecefram_BD`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherents`
--

DROP TABLE IF EXISTS `adherents`;
CREATE TABLE IF NOT EXISTS `adherents` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
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
(7, 'Ouaki', 'Walid', '0615452432', 'exemple@ouioui.com', ''),
(8, 'Balzac', 'Tom', '0615452432', 'exemple@ouioui.com', 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `login`, `mdp`) VALUES
(1, 'toto', 'ab4f63f9ac65152575886860dde480a1');

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

DROP TABLE IF EXISTS `date`;
CREATE TABLE IF NOT EXISTS `date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `idDonateur` int(11) NOT NULL,
  `idDate` date NOT NULL,
  `montant` int(11) DEFAULT NULL,
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
