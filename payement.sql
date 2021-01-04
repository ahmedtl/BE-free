-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 02 jan. 2021 à 21:49
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
-- Base de données : `befree`
--

-- --------------------------------------------------------

--
-- Structure de la table `payement`
--

DROP TABLE IF EXISTS `payement`;
CREATE TABLE IF NOT EXISTS `payement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Ncin` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `date_pay` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `payement`
--

INSERT INTO `payement` (`id`, `Ncin`, `prix`, `date_pay`) VALUES
(1, 14301011, 80, '2021-01-02 21:34:41'),
(2, 14501011, 55, '2021-01-02 21:34:41'),
(3, 145010, 55, '2021-01-02 21:34:41'),
(4, 145010, 55, '2021-01-02 21:34:41'),
(5, 1234567, 55, '2021-01-02 21:34:41'),
(6, 14501011, 55, '2021-01-02 21:34:41'),
(7, 12345678, 55, '2021-01-02 21:34:41'),
(8, 14301011, 55, '2021-01-02 21:34:41'),
(9, 14301011, 55, '2021-01-02 21:34:41'),
(10, 14301011, 55, '2021-01-02 21:34:41'),
(11, 14301013, 55, '2021-01-02 21:34:41'),
(12, 14301011, 80, '2021-01-02 21:36:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
