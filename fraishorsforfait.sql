-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 20 nov. 2019 à 13:00
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
-- Base de données :  `gsbfrais`
--

-- --------------------------------------------------------

--
-- Structure de la table `fraishorsforfait`
--

DROP TABLE IF EXISTS `fraishorsforfait`;
CREATE TABLE IF NOT EXISTS `fraishorsforfait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fraishorsforfait`
--

INSERT INTO `fraishorsforfait` (`id`, `libelle`) VALUES
(1, 'location véhicule'),
(2, 'location salle conférence'),
(3, 'achat de matériel de papèterie'),
(4, 'frais vestimentaire/représentation'),
(5, 'repas avec praticien'),
(6, 'traiteur, alimentation, boisson'),
(7, 'Voyage SNCF'),
(8, 'location équipement vidéo/sonore'),
(9, 'taxi'),
(10, 'rémunération intervenant/spécialiste');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
