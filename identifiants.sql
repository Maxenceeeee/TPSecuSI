-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 avr. 2023 à 09:14
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
-- Base de données : `secu_si`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `idArticle` bigint NOT NULL AUTO_INCREMENT,
  `idAuteur` bigint NOT NULL,
  `sujet` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idArticle`),
  KEY `idAuteur` (`idAuteur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `identifiants`
--

DROP TABLE IF EXISTS `identifiants`;
CREATE TABLE IF NOT EXISTS `identifiants` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `adresseMail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `motDePasse` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `prenom` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dateNaissance` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `identifiants`
--

INSERT INTO `identifiants` (`id`, `adresseMail`, `motDePasse`, `nom`, `prenom`, `dateNaissance`) VALUES
(1, 'maxence.per@aliceadsl.fr', 'Max-23012003', 'Frappier', 'Maxence', '2003-01-23'),
(2, 'mattisdasilva03@gmail.com', 'azerty', 'DA SILVA', 'Mattis', '2003-07-11'),
(3, 'test@test.com', 'test123', 'Nom_Test', 'Prénom_test', '2000-01-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
