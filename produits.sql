-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 16 jan. 2020 à 18:25
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `produits`
--

-- --------------------------------------------------------

--
-- Structure de la table `monnaiedesinge`
--

DROP TABLE IF EXISTS `monnaiedesinge`;
CREATE TABLE IF NOT EXISTS `monnaiedesinge` (
  `ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `Prix` int(255) NOT NULL,
  `LienImage` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table associée aux produits de substitution.';

--
-- Déchargement des données de la table `monnaiedesinge`
--

INSERT INTO `monnaiedesinge` (`ID`, `Nom`, `Prix`, `LienImage`) VALUES
(1, 'Stylo', 1, '/images/stylo'),
(2, 'Pin\'s', 2, 'images/pins.png'),
(3, 'Recueil de Poésie', 3, ''),
(4, 'Morceau de Saumon', 4, ''),
(5, 'Livre d\'algèbre', 5, ''),
(6, 'Croquettes', 6, ''),
(7, 'Poisson Rouge', 7, ''),
(8, 'Séance de spiritisme', 8, ''),
(9, 'Cours de Francais', 9, ''),
(10, 'Lot de pommes de terre', 10, ''),
(11, 'Photo d\'un chat', 11, ''),
(12, 'Cours de danse de 10 minutes', 12, ''),
(13, 'Lapin trop nain', 13, ''),
(14, 'Collier en plastique', 14, ''),
(15, 'Beaucoup de bonbons', 15, ''),
(16, 'Un panier de légumes', 16, ''),
(17, 'Kit de bricolage', 17, ''),
(18, 'Une boite de construction', 18, ''),
(19, 'Une très petite part d\'une petite action', 19, ''),
(20, 'Un objet inutile', 20, '');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `Prix` int(255) NOT NULL,
  `LienImage` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`ID`, `Nom`, `Prix`, `LienImage`) VALUES
(2, 'regle-pour-ingenieurs', 1, 'image'),
(3, 'pins-2', 2, ''),
(4, 'pins', 3, ''),
(5, 'stickers-50-pieces-geek', 4, ''),
(6, 'baguette-harry-potter', 5, ''),
(7, 'affiche-black-mirror-4', 6, ''),
(8, 'affiche-black-mirror-2', 7, ''),
(9, 'affiche-black-mirror', 8, ''),
(10, 'mug-le-geek', 9, ''),
(11, 'mug-geek', 10, ''),
(12, 'affiche-black-mirror-3', 11, ''),
(13, 'figurine-pop', 12, ''),
(14, '200-pieces-carte-pokemon', 13, ''),
(15, 'figurine-pop-2', 14, ''),
(16, 'java-pour-les-nuls', 15, ''),
(17, 't-shirt-jai-pas-le-temps-jai-console', 16, ''),
(18, 'programmer-pour-les-nuls', 17, ''),
(19, 't-shirt-jpeux-pas-je-geek', 18, ''),
(20, 'masques-super-heros-30-pieces', 19, ''),
(21, 't-shirt-geek', 20, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
