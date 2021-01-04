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
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `Ncin` int(11) NOT NULL,
  `depart` text NOT NULL,
  `destination` text NOT NULL,
  `prix` decimal(8,3) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_res` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`Ncin`, `depart`, `destination`, `prix`, `id`, `date_res`) VALUES
(12345678, 'nabeul', 'siliana', '55.000', 21, '2021-01-01'),
(14501011, 'Mehdia', 'Sfax', '55.000', 20, '2021-01-01'),
(14301011, 'monastir', 'sidi bouzid', '80.000', 22, '2021-01-02'),
(14501011, 'sidi bouzid', 'sidi bouzid', '55.000', 23, '2021-01-02'),
(145010, 'sidi bouzid', 'sidi bouzid', '55.000', 24, '2021-01-02'),
(145010, 'sidi bouzid', 'sidi bouzid', '55.000', 25, '2021-01-02'),
(1234567, 'nabeul', 'sidi bouzid', '55.000', 26, '2021-01-02'),
(12345678, 'nabeul', 'siliana', '55.000', 27, '2021-01-02'),
(14301011, 'sidi bouzid', 'mahdia', '55.000', 28, '2021-01-12'),
(14301013, 'sidi bouzid', 'mahdia', '55.000', 29, '2021-12-12'),
(14301011, 'medenine', 'sidi bouzid', '80.000', 30, '2021-01-21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
