-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2022 at 08:21 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anp`
--

-- --------------------------------------------------------

--
-- Table structure for table `materiel`
--

CREATE TABLE `materiel` (
  `id` int(11) NOT NULL,
  `Emplacement` varchar(255) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `Marque` varchar(255) NOT NULL,
  `N°_de_série` varchar(255) NOT NULL,
  `Acquisition` date NOT NULL,
  `Fournisseur` varchar(255) NOT NULL,
  `Statut` varchar(255) NOT NULL,
  `Criticité` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `materiel`
--

INSERT INTO `materiel` (`id`, `Emplacement`, `Full_Name`, `Marque`, `N°_de_série`, `Acquisition`, `Fournisseur`, `Statut`, `Criticité`) VALUES
(23, 'JORF LASFAR', 'Commissariat du Port', 'DELL OPTIPLEX 790 ', '1FFL85J', '2012-06-20', ' MICROFAST', ' libre', 'moyenne'),
(24, 'JORF LASFAR', 'Accuiel CAP', 'DELL OPTIPLEX 790 ', 'GLRL85J', '2012-12-28', ' MICROFAST', ' libre', 'haute'),
(25, 'JORF LASFAR', 'RABIHI EL MOSTAFA', 'DELL OPTIPLEX 7010MT', '2M9ZKZ1', '2012-01-12', ' MICROFAST', ' affecté', 'moyenne'),
(26, 'JORF LASFAR', 'TOUNLI SAID ', 'LENOVO ThinkCenter M800', 'SPC0JG4J9', '2017-08-16', ' DIDALI', ' libre', ' moyenne'),
(27, 'JORF LASFAR', 'ANIQJD Amina', 'LENOVO V520-15Ikl', 'SPC0WNUZ7', '2018-05-18', ' DIDALI', ' affecté', 'moyenne'),
(29, 'JORF LASFAR', 'LARROUSSI Zakaria', 'PRODESK 400', 'CZC8247F9X', '2018-10-24', ' TELECO MAROC', ' libre', 'moyenne'),
(30, 'JORF LASFAR', 'DS', 'HP 200 G3 AIO Busness PC', '8CC0033VXK', '2021-06-08', ' PLURICARTE', ' libre', 'haute'),
(31, 'JORF LASFAR', 'ELASSAOUSS ZAKARIA ', 'EPSON LQ-2090', 'JR5Y102100', '2019-06-12', ' DS', ' production', '   moyenne'),
(32, 'JORF LASFAR', 'EL YOUSSOUFI SI Mohamed', 'Canon G3525L A3 Couleur', 'WVV11014', '2021-06-22', ' MICROFAST', ' production', 'haute'),
(33, 'JORF LASFAR', 'TOUNLI SAID', 'HP LASER JET PRO MFP M476dn', 'CNB7H7H10T', '2018-06-12', ' STS', ' production', 'moyenne');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Matricule` varchar(255) NOT NULL,
  `Fonction` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Nom`, `Matricule`, `Fonction`, `password`) VALUES
(1, 'bakre', 'a2558', 'chef de projet', 'ac294d78678647594efff19553b39de3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materiel`
--
ALTER TABLE `materiel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
