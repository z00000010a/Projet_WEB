-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 22 nov. 2017 à 15:20
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cursus`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `sigle` varchar(10) NOT NULL,
  `categorie` varchar(10) NOT NULL,
  `credit` int(10) NOT NULL,
  PRIMARY KEY (`sigle`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`sigle`, `categorie`, `credit`) VALUES
('NF16', 'CS', 6),
('NF20', 'CS', 6),
('LO02', 'TM', 6),
('IF14', 'TM', 6),
('EG23', 'TM', 6),
('NF19', 'TM', 6),
('LO07', 'TM', 6),
('IF02', 'CS', 6),
('LO12', 'CS', 6),
('RE04', 'CS', 6),
('GL02', 'CS', 6),
('IF26', 'TM', 6),
('GE21', 'ME', 4),
('GE31', 'ME', 4),
('GE34', 'ME', 4),
('GE32', 'ME', 4),
('GE36', 'ME', 4);

-- --------------------------------------------------------

--
-- Structure de la table `cursus`
--

DROP TABLE IF EXISTS `cursus`;
CREATE TABLE IF NOT EXISTS `cursus` (
  `num_etu` int(10) NOT NULL,
  `sem_seq` int(10) NOT NULL,
  `sem_label` varchar(10) NOT NULL,
  `sigle` varchar(10) NOT NULL,
  `categorie` varchar(10) NOT NULL,
  `affectation` varchar(10) NOT NULL,
  `utt` varchar(10) NOT NULL,
  `profil` varchar(10) NOT NULL,
  `credit` int(5) NOT NULL,
  `resultat` varchar(5) NOT NULL,
  PRIMARY KEY (`num_etu`,`sigle`),
  KEY `num_etu` (`num_etu`),
  KEY `num_cours` (`sigle`),
  KEY `num_etu_2` (`num_etu`),
  KEY `num_cours_2` (`sigle`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cursus`
--

INSERT INTO `cursus` (`num_etu`, `sem_seq`, `sem_label`, `sigle`, `categorie`, `affectation`, `utt`, `profil`, `credit`, `resultat`) VALUES
(201402, 3, 'ISI3', 'NF20', 'CS', 'TCBR', 'Y', 'Y', 6, 'A'),
(201402, 1, 'ISI3', 'NF16', 'CS', 'TCBR', 'Y', 'Y', 6, 'B'),
(201402, 2, 'ISI2', 'NF19', 'TM', 'TCBR', 'Y', 'Y', 6, 'C'),
(201402, 2, 'ISI2', 'LO12', 'CS', 'TCBR', 'Y', 'Y', 6, 'B'),
(201402, 3, 'ISI3', 'GL02', 'CS', 'TCBR', 'Y', 'Y', 6, 'A'),
(201402, 3, 'ISI3', 'IF26', 'TM', 'FCBR', 'Y', 'Y', 6, 'A'),
(201401, 2, 'ISI2', 'NF16', 'CS', 'TCBR', 'Y', 'Y', 6, 'B\r\n'),
(201401, 1, 'ISI1', 'NF20', 'CS', 'TCBR', 'Y', 'Y', 6, 'A\r\n'),
(201401, 2, 'ISI2', 'IF26', 'TM', 'FCBR', 'Y', 'Y', 6, 'B\r\n'),
(201402, 2, 'ISI2', 'GE34', 'ME', 'TCBR', 'Y', 'Y', 4, 'B');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `numero` int(10) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `admission` varchar(10) NOT NULL,
  `filiere` varchar(10) NOT NULL,
  `sem_seq` int(10) NOT NULL,
  `sem_label` varchar(10) NOT NULL,
  `mdp` int(15) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`numero`, `nom`, `prenom`, `admission`, `filiere`, `sem_seq`, `sem_label`, `mdp`) VALUES
(201401, 'ZHENG', 'Ruolin', 'BR', '?', 3, 'ISI3', 123456),
(201402, 'ZHANG', 'Zhaozhe', 'BR', '?', 2, 'ISI3', 123456),
(201403, 'MARTAIN', 'Caroline', 'BR', '?', 4, 'SRT4', 123456),
(201404, 'DUPOND', 'Laurent', 'BR', '?', 2, 'GM2', 123456),
(201405, 'DURANT', 'Isabelle', 'BR', '?', 1, 'MTE1', 123456),
(201406, 'DURANT', 'Pierre', 'BR', '?', 4, 'SI3', 123456),
(201407, 'MATTA', 'Nada', 'BR', '?', 5, 'SI5', 123456),
(201409, 'LEMARCIER', 'Marc', 'BR', '?', 6, 'ISI6', 123456),
(201410, 'NIGRO', 'Jean-marc', 'BR', '?', 6, 'SRT6', 123456),
(201408, 'BEAUSEROY', 'Pierre', 'BR', '?', 3, 'ISI3', 123456);

-- --------------------------------------------------------

--
-- Structure de la table `regle`
--

DROP TABLE IF EXISTS `regle`;
CREATE TABLE IF NOT EXISTS `regle` (
  `num_regle` int(5) NOT NULL,
  `admission` text NOT NULL,
  `CS` tinyint(1) NOT NULL,
  `TM` tinyint(1) NOT NULL,
  `ST` tinyint(1) NOT NULL,
  `EC` tinyint(1) NOT NULL,
  `ME` tinyint(1) NOT NULL,
  `CT` tinyint(1) NOT NULL,
  `sum` int(5) NOT NULL,
  `NPML` tinyint(1) NOT NULL,
  `UTT` tinyint(1) NOT NULL,
  `SE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `regle`
--

INSERT INTO `regle` (`num_regle`, `admission`, `CS`, `TM`, `ST`, `EC`, `ME`, `CT`, `sum`, `NPML`, `UTT`, `SE`) VALUES
(1, 'TCBR', 1, 1, 0, 0, 0, 0, 54, 0, 0, 0),
(2, 'FCBR', 1, 1, 0, 0, 0, 0, 30, 0, 0, 0),
(3, 'BR', 1, 0, 0, 0, 0, 0, 30, 0, 0, 0),
(4, 'BR', 0, 1, 0, 0, 0, 0, 30, 0, 0, 0),
(5, 'TCBR', 0, 0, 1, 0, 0, 0, 30, 0, 0, 0),
(6, 'FCBR', 0, 0, 1, 0, 0, 0, 30, 0, 0, 0),
(7, 'BR', 0, 0, 0, 1, 0, 0, 12, 0, 0, 0),
(8, 'BR', 0, 0, 0, 0, 1, 0, 4, 0, 0, 0),
(9, 'BR', 0, 0, 0, 0, 0, 1, 4, 0, 0, 0),
(10, 'BR', 0, 0, 0, 0, 1, 1, 16, 0, 0, 0),
(11, 'BR', 1, 1, 0, 0, 0, 0, 60, 0, 1, 0),
(12, 'TOUTES', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(13, 'TOUTES', 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(14, 'TOUTES', 1, 1, 1, 1, 1, 1, 180, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
