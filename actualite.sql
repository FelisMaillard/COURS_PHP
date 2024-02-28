-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 28 fév. 2024 à 10:33
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
-- Base de données : `site_actualité`
--

-- --------------------------------------------------------

--
-- Structure de la table `liens`
--

DROP TABLE IF EXISTS `liens`;
CREATE TABLE IF NOT EXISTS `liens` (
  `id_lien` int NOT NULL AUTO_INCREMENT,
  `lien_source` varchar(500) NOT NULL,
  `id_source` int NOT NULL,
  PRIMARY KEY (`id_lien`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `liens`
--

INSERT INTO `liens` (`id_lien`, `lien_source`, `id_source`) VALUES
(1, 'https://www.20minutes.fr/high-tech/jeux_video/4078611-20240227-playstation-5-ventes-console-decoivent-sony-va-supprimer-900-postes', 1),
(2, 'https://www.20minutes.fr/arts-stars/culture/4078106-20240228-holly-stephen-king-revient-terrain-horrifique-connu', 1),
(3, 'https://www.20minutes.fr/politique/4078515-20240228-manifestations-agriculteurs-coordination-rurale-proche-rn-comme-affirme-macron', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
