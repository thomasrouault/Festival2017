-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 16 Novembre 2017 à 15:30
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `festival`
--

-- --------------------------------------------------------

--
-- Structure de la table `Representation`
--

CREATE TABLE `Representation` (
  `id_rep` int(10) UNSIGNED NOT NULL,
  `id_lieu` int(11) DEFAULT NULL,
  `id_groupe` varchar(4) DEFAULT NULL,
  `date_rep` date DEFAULT NULL,
  `heure_deb` time DEFAULT NULL,
  `heure_fin` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Representation`
--

INSERT INTO `Representation` (`id_rep`, `id_lieu`, `id_groupe`, `date_rep`, `heure_deb`, `heure_fin`) VALUES
(1, 1, 'g012', '2017-07-11', '20:30:00', '21:45:00'),
(2, 1, 'g014', '2017-07-11', '21:45:00', '23:00:00'),
(3, 2, 'g024', '2017-07-11', '19:00:00', '20:00:00'),
(4, 2, 'g003', '2017-07-11', '20:30:00', '21:30:00'),
(5, 2, 'g004', '2017-07-11', '21:45:00', '23:15:00'),
(6, 3, 'g031', '2017-07-11', '11:00:00', '12:00:00'),
(7, 3, 'g035', '2017-07-11', '12:00:00', '13:00:00'),
(8, 1, 'g008', '2017-07-12', '20:30:00', '22:00:00'),
(9, 1, 'g009', '2017-07-12', '22:15:00', '23:30:00'),
(10, 2, 'g005', '2017-07-12', '20:00:00', '23:00:00'),
(11, 1, 'g006', '2017-07-13', '20:30:00', '22:00:00'),
(12, 2, 'g041', '2017-07-13', '20:30:00', '22:00:00'),
(13, 1, 'g020', '2017-07-14', '19:30:00', '21:00:00'),
(14, 1, 'g022', '2017-07-14', '21:15:00', '23:00:00'),
(15, 3, 'g010', '2017-07-14', '14:00:00', '14:30:00'),
(16, 3, 'g011', '2017-07-14', '14:30:00', '15:00:00'),
(17, 3, 'g012', '2017-07-14', '15:00:00', '15:30:00'),
(18, 3, 'g013', '2017-07-14', '15:30:00', '16:00:00'),
(19, 3, 'g017', '2017-07-14', '16:00:00', '16:30:00'),
(20, 3, 'g018', '2017-07-14', '16:30:00', '17:00:00'),
(21, 4, 'g032', '2017-07-14', '11:00:00', '12:00:00'),
(22, 4, 'g044', '2017-07-14', '15:00:00', '17:00:00'),
(23, 4, 'g042', '2017-07-14', '17:30:00', '19:30:00'),
(24, 4, 'g037', '2017-07-15', '11:00:00', '12:30:00'),
(25, 4, 'g025', '2017-07-15', '15:00:00', '16:00:00'),
(26, 4, 'g029', '2017-07-15', '16:30:00', '19:00:00');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Representation`
--
ALTER TABLE `Representation`
  ADD PRIMARY KEY (`id_rep`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Representation`
--
ALTER TABLE `Representation`
  MODIFY `id_rep` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
