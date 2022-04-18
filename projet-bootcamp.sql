-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 18 avr. 2022 à 15:11
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet-bootcamp`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@email.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stock`
--

INSERT INTO `stock` (`id`, `data`) VALUES
(1, 'O:5:\"Stock\":6:{s:4:\"type\";s:9:\"ski-alpin\";s:4:\"name\";s:5:\"divus\";s:8:\"supplier\";s:11:\"black crows\";s:12:\"buying_price\";d:500;s:13:\"selling_price\";d:700;s:14:\"quantity_stock\";i:4;}'),
(2, 'O:5:\"Stock\":6:{s:4:\"type\";s:9:\"ski-alpin\";s:4:\"name\";s:5:\"atris\";s:8:\"supplier\";s:11:\"black crows\";s:12:\"buying_price\";d:450;s:13:\"selling_price\";d:590;s:14:\"quantity_stock\";i:7;}'),
(3, 'O:5:\"Stock\":6:{s:4:\"type\";s:9:\"ski-alpin\";s:4:\"name\";s:7:\"pure 90\";s:8:\"supplier\";s:5:\"scott\";s:12:\"buying_price\";d:250;s:13:\"selling_price\";d:370;s:14:\"quantity_stock\";i:12;}'),
(4, 'O:5:\"Stock\":6:{s:4:\"type\";s:11:\"ski-de-fond\";s:4:\"name\";s:15:\"race speed skin\";s:8:\"supplier\";s:7:\"madshus\";s:12:\"buying_price\";d:380;s:13:\"selling_price\";d:430;s:14:\"quantity_stock\";i:1;}'),
(5, 'O:5:\"Stock\":6:{s:4:\"type\";s:5:\"empty\";s:4:\"name\";s:16:\"super guide 88 R\";s:8:\"supplier\";s:5:\"scott\";s:12:\"buying_price\";d:280;s:13:\"selling_price\";d:339.9;s:14:\"quantity_stock\";i:3;}'),
(6, 'O:5:\"Stock\":6:{s:4:\"type\";s:15:\"ski-de-randonne\";s:4:\"name\";s:14:\"camox freebird\";s:8:\"supplier\";s:11:\"black crows\";s:12:\"buying_price\";d:480;s:13:\"selling_price\";d:529.95;s:14:\"quantity_stock\";i:1;}'),
(7, 'O:5:\"Stock\":6:{s:4:\"type\";s:15:\"ski-de-randonne\";s:4:\"name\";s:10:\"M-vertical\";s:8:\"supplier\";s:8:\"dynastar\";s:12:\"buying_price\";d:210;s:13:\"selling_price\";d:249;s:14:\"quantity_stock\";i:5;}'),
(8, 'O:5:\"Stock\":6:{s:4:\"type\";s:9:\"snowboard\";s:4:\"name\";s:11:\"antigravity\";s:8:\"supplier\";s:3:\"GNU\";s:12:\"buying_price\";d:248;s:13:\"selling_price\";d:299.99;s:14:\"quantity_stock\";i:6;}'),
(9, 'O:5:\"Stock\":6:{s:4:\"type\";s:9:\"snowboard\";s:4:\"name\";s:8:\"assassin\";s:8:\"supplier\";s:7:\"salomon\";s:12:\"buying_price\";d:390;s:13:\"selling_price\";d:412.45;s:14:\"quantity_stock\";i:8;}'),
(10, 'O:5:\"Stock\":6:{s:4:\"type\";s:9:\"snowboard\";s:4:\"name\";s:13:\"black torsion\";s:8:\"supplier\";s:14:\"easy snowboard\";s:12:\"buying_price\";d:225;s:13:\"selling_price\";d:251;s:14:\"quantity_stock\";i:11;}'),
(11, 'O:5:\"Stock\":6:{s:4:\"type\";s:10:\"splitboard\";s:4:\"name\";s:12:\"doppleganger\";s:8:\"supplier\";s:5:\"nitro\";s:12:\"buying_price\";d:450;s:13:\"selling_price\";d:494.7;s:14:\"quantity_stock\";i:22;}'),
(12, 'O:5:\"Stock\":6:{s:4:\"type\";s:10:\"splitboard\";s:4:\"name\";s:8:\"premiere\";s:8:\"supplier\";s:7:\"salomon\";s:12:\"buying_price\";d:1050;s:13:\"selling_price\";d:1199.99;s:14:\"quantity_stock\";i:3;}'),
(13, 'O:5:\"Stock\":6:{s:4:\"type\";s:10:\"splitboard\";s:4:\"name\";s:5:\"nomad\";s:8:\"supplier\";s:5:\"nitro\";s:12:\"buying_price\";d:356;s:13:\"selling_price\";d:374.56;s:14:\"quantity_stock\";i:10;}'),
(14, 'O:5:\"Stock\":6:{s:4:\"type\";s:19:\"chaussure-ski-alpin\";s:4:\"name\";s:29:\"Edge Lyt Cx Black Anthracite \";s:8:\"supplier\";s:4:\"head\";s:12:\"buying_price\";d:100;s:13:\"selling_price\";d:135.35;s:14:\"quantity_stock\";i:6;}'),
(15, 'O:5:\"Stock\":6:{s:4:\"type\";s:19:\"chaussure-ski-alpin\";s:4:\"name\";s:22:\"Alltrack Pro 100 Black\";s:8:\"supplier\";s:9:\"rossignol\";s:12:\"buying_price\";d:222;s:13:\"selling_price\";d:255.8;s:14:\"quantity_stock\";i:15;}'),
(16, 'O:5:\"Stock\":6:{s:4:\"type\";s:25:\"chaussure-ski-de-randonne\";s:4:\"name\";s:16:\"Cosmos White Red\";s:8:\"supplier\";s:5:\"scott\";s:12:\"buying_price\";d:385;s:13:\"selling_price\";d:408.67;s:14:\"quantity_stock\";i:2;}'),
(17, 'O:5:\"Stock\":6:{s:4:\"type\";s:21:\"chaussure-ski-de-fond\";s:4:\"name\";s:19:\"Vitane Plus Prolink\";s:8:\"supplier\";s:7:\"salomon\";s:12:\"buying_price\";d:79;s:13:\"selling_price\";d:99;s:14:\"quantity_stock\";i:8;}'),
(18, 'O:5:\"Stock\":6:{s:4:\"type\";s:18:\"fixation-ski-alpin\";s:4:\"name\";s:25:\"Griffon 13 ID 110mm Black\";s:8:\"supplier\";s:6:\"marker\";s:12:\"buying_price\";d:135;s:13:\"selling_price\";d:159.99;s:14:\"quantity_stock\";i:15;}'),
(19, 'O:5:\"Stock\":6:{s:4:\"type\";s:24:\"fixation-ski-de-randonne\";s:4:\"name\";s:23:\"Speed Turn Black Silver\";s:8:\"supplier\";s:7:\"dynafit\";s:12:\"buying_price\";d:225;s:13:\"selling_price\";d:250;s:14:\"quantity_stock\";i:9;}'),
(20, 'O:5:\"Stock\":6:{s:4:\"type\";s:20:\"fixation-ski-de-fond\";s:4:\"name\";s:16:\"Race Classic Ifp\";s:8:\"supplier\";s:7:\"fischer\";s:12:\"buying_price\";d:40;s:13:\"selling_price\";d:47.9;s:14:\"quantity_stock\";i:8;}'),
(21, 'O:5:\"Stock\":6:{s:4:\"type\";s:18:\"fixation-snowboard\";s:4:\"name\";s:15:\"Psych Black - M\";s:8:\"supplier\";s:3:\"GNU\";s:12:\"buying_price\";d:165;s:13:\"selling_price\";d:191.9;s:14:\"quantity_stock\";i:16;}'),
(22, 'O:5:\"Stock\":6:{s:4:\"type\";s:15:\"boots-snowboard\";s:4:\"name\";s:16:\"Decade Sl Black \";s:8:\"supplier\";s:9:\"northwave\";s:12:\"buying_price\";d:200;s:13:\"selling_price\";d:209.99;s:14:\"quantity_stock\";i:5;}'),
(23, 'O:5:\"Stock\":6:{s:4:\"type\";s:15:\"baton-ski-alpin\";s:4:\"name\";s:5:\"Black\";s:8:\"supplier\";s:16:\"winter your life\";s:12:\"buying_price\";d:20;s:13:\"selling_price\";d:24.9;s:14:\"quantity_stock\";i:12;}'),
(24, 'O:5:\"Stock\":6:{s:4:\"type\";s:17:\"baton-ski-de-fond\";s:4:\"name\";s:17:\"Diamond 14 Roller\";s:8:\"supplier\";s:7:\"one way\";s:12:\"buying_price\";d:55;s:13:\"selling_price\";d:67.9;s:14:\"quantity_stock\";i:10;}'),
(25, 'O:5:\"Stock\":6:{s:4:\"type\";s:21:\"baton-ski-de-randonne\";s:4:\"name\";s:14:\"Pitch Back Red\";s:8:\"supplier\";s:4:\"leki\";s:12:\"buying_price\";d:42;s:13:\"selling_price\";d:49.9;s:14:\"quantity_stock\";i:18;}'),
(26, 'O:5:\"Stock\":6:{s:4:\"type\";s:8:\"vetement\";s:4:\"name\";s:31:\"W Liquid Point Shell Storm Blue\";s:8:\"supplier\";s:13:\"black diamond\";s:12:\"buying_price\";d:225;s:13:\"selling_price\";d:259.9;s:14:\"quantity_stock\";i:3;}'),
(27, 'O:5:\"Stock\":6:{s:4:\"type\";s:8:\"vetement\";s:4:\"name\";s:21:\"Upstride Smolder Blue\";s:8:\"supplier\";s:9:\"patagonia\";s:12:\"buying_price\";d:209;s:13:\"selling_price\";d:239;s:14:\"quantity_stock\";i:4;}'),
(28, 'O:5:\"Stock\":6:{s:4:\"type\";s:18:\"accessoire-textile\";s:4:\"name\";s:21:\"Factory Park Blackout\";s:8:\"supplier\";s:6:\"oakley\";s:12:\"buying_price\";d:20;s:13:\"selling_price\";d:25;s:14:\"quantity_stock\";i:6;}'),
(29, 'O:5:\"Stock\":6:{s:4:\"type\";s:10:\"protection\";s:4:\"name\";s:21:\"Millenium Black Matte\";s:8:\"supplier\";s:5:\"bolle\";s:12:\"buying_price\";d:70;s:13:\"selling_price\";d:89.9;s:14:\"quantity_stock\";i:7;}');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `firstname`, `email`, `password`) VALUES
(1, 'VOLLAND', 'Dimitri', 'd.volland@it-students.fr', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
