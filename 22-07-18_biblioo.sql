-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 18 juil. 2022 à 09:45
-- Version du serveur :  10.4.16-MariaDB
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `biblioo`
--

--
-- Déchargement des données de la table `abonne`
--

INSERT INTO `abonne` (`id`, `prenom`, `pseudo`, `nom`) VALUES
(2, 'Peter', '', ''),
(3, 'Chloe', '', ''),
(4, 'Tony Stark', '', ''),
(12, 'Abdou', '', ''),
(14, 'Gérard', '', '');



--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `auteur`, `titre`) VALUES
(101, 'Guy de Maupassant', 'Bel-Ami '),
(103, 'Alphonse Daudet', 'Le Petit chose'),
(104, 'Alexandre Dumas', 'La Reine Margot'),
(105, 'Alexandre Dumas', 'Les Trois Mousquetaires'),
(106, 'Richard Matheson', 'I, robot'),
(107, 'J.R.R. Tolkien', 'Le  Seigneur des Anneaux'),
(108, 'Agatha Christie', 'Hercule Poirot'),
(109, 'test2', 'test2'),
(110, 'J.R.R. Tolkien', 'Les Deux Tours'),
(111, 'Stephen King', 'Shining'),
(112, 'Frank Herbert', 'Dune'),
(113, 'Isaac Asimov', 'Fondation'),
(114, 'J.R.R. Tolkien', 'Le  Seigneur des Anneaux'),
(115, 'Katsuhiro Otomo', 'Akira'),
(116, 'Alexandre Dumas', 'Les Trois Mousquetaires'),
(117, 'Frank Herbert', 'Dune'),
(118, 'Isaac Asimov', 'Fondation'),
(119, 'Richard Matheson', 'Je suis une légende'),
(120, 'Franck Herbert', 'Le Messie de Dune'),
(121, 'Bernard Werber', 'Le Jour des Fourmis'),
(122, 'Isaac Asimov', 'Fondation et Empire'),
(123, 'Frank Herbert', 'Les Enfants de Dune'),
(124, 'George Orwell', '1984'),
(125, 'qsdf', 'azer'),
(126, 'livre', 'nv'),
(128, 'qdfg', 'qdsfgqfg'),
(130, 'J.R.R. Tolkien', 'Le retour du roi'),
(131, 'azer', 'azer');


--
-- Déchargement des données de la table `emprunt`
--

INSERT INTO `emprunt` (`id`, `livre_id`, `abonne_id`, `date_sortie`, `date_rendu`) VALUES
(1, 101, 2, '2011-12-17', '2011-12-18'),
(2, 101, 2, '2011-12-18', '2011-12-20'),
(3, 101, 3, '2011-12-19', '2011-12-22'),
(4, 103, 4, '2011-12-19', '2011-12-22'),
(5, 104, 2, '2011-12-19', '2011-12-28'),
(6, 105, 2, '2012-03-20', '2012-03-26'),
(7, 105, 3, '2013-06-13', NULL),
(8, 101, 2, '2013-06-15', NULL),
(10, 106, 4, '2021-11-01', '2021-11-06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
