-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Jeu 13 Mars 2014 à 20:46
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `etsdotaleages`
--

-- --------------------------------------------------------

--
-- Structure de la table `matchs`
--

CREATE TABLE IF NOT EXISTS `matchs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `winTeam` int(11) NOT NULL,
  `lostTeam` int(11) NOT NULL,
  `date` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `matchs`
--

INSERT INTO `matchs` (`id`, `winTeam`, `lostTeam`, `date`) VALUES
(1, 1, 2, '1st april 2014'),
(2, 1, 3, '17th april 2014'),
(3, 1, 2, '1st march 2014'),
(4, 1, 3, '11th march 2014'),
(5, 1, 2, '6th march 2014'),
(6, 3, 3, '2nd april 2014'),
(7, 3, 3, '23th april 2014'),
(8, 7, 3, '28th march 2014'),
(9, 7, 2, '18th april 2014'),
(10, 7, 2, '10th april 2014'),
(11, 7, 3, '6th april 2014'),
(12, 7, 3, '10th march 2014'),
(13, 7, 1, '15th april 2014'),
(14, 7, 1, '13th march 2014'),
(15, 2, 2, '22th april 2014');

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `country` varchar(100) NOT NULL,
  `team` int(11) NOT NULL,
  `previousTeam` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `players`
--

INSERT INTO `players` (`id`, `username`, `role`, `email`, `country`, `team`, `previousTeam`) VALUES
(1, 'pieliedie', 'Capitaine', 'pieliedie@email.com', 'Canada', 1, NULL),
(2, 'EternaLEnVy', 'player', 'EternaLEnVy@email.com', 'France', 1, NULL),
(3, 'SingSing', 'player', 'SingSing@email.com', 'Canada', 1, NULL),
(4, 'bOne7', 'player', 'bOne7@email.com', 'France', 1, NULL),
(5, 'Aui_2000', 'player', 'Aui_2000@email.com', 'Canada', 1, NULL),
(6, 'Fear', 'player', 'Fear@email.com', 'Chine', 2, NULL),
(7, 'Arteezy', 'player', 'Arteezy@email.com', 'Canada', 2, NULL),
(8, 'Universe', 'player', 'Universe@email.com', 'Chine', 2, NULL),
(9, 'zai', 'player', 'zai@email.com', 'France', 2, NULL),
(10, 'ppd', 'Capitaine', 'ppd@email.com', 'Canada', 2, NULL),
(11, 'Waytosexy', 'player', 'Waytosexy@email.com', 'Chine', 3, NULL),
(12, 'FLUFFNSTUFF', 'player', 'FLUFFNSTUFF@email.com', 'Canada', 3, NULL),
(13, 'TC', 'player', 'TC@email.com', 'Chine', 3, NULL),
(14, 'qojqva', 'player', 'qojqva@email.com', 'Chine', 3, NULL),
(15, 'patrondonoso', 'Capitaine', 'patrondonoso@email.com', 'Canada', 3, NULL),
(16, 'RyuUboruZ', 'player', 'RyuUboruZ@email.com', 'Canada', 4, NULL),
(17, 'Cak3z', 'player', 'Cak3z@email.com', 'France', 4, NULL),
(18, 'ima_sheep(sux)', 'player', 'sux@email.com', 'France', 4, NULL),
(19, 'jigglebilly', 'player', 'jigglebilly@email.com', 'Chine', 4, NULL),
(20, 'Pandaego', 'player', 'Pandaego@email.com', 'Canada', 4, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `win` int(11) NOT NULL,
  `lost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `teams`
--

INSERT INTO `teams` (`id`, `name`, `win`, `lost`) VALUES
(1, 'Cloud 9', 5, 2),
(2, 'Evil Geniuses', 1, 6),
(3, 'Team Liquid', 2, 7),
(4, 'Armata Gaming', 7, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
