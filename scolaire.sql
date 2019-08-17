-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 11:44 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scolaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `apayers`
--

CREATE TABLE `apayers` (
  `idApayer` int(11) NOT NULL,
  `montantApayer` float NOT NULL,
  `annee` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comptes`
--

CREATE TABLE `comptes` (
  `idCompte` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `nomCompte` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `eleves`
--

CREATE TABLE `eleves` (
  `idEleve` int(11) NOT NULL,
  `nomEleve` varchar(100) NOT NULL,
  `prenomEleve` varchar(100) NOT NULL,
  `postnomEleve` varchar(100) NOT NULL,
  `genre` varchar(5) NOT NULL,
  `numeroSecours` varchar(14) DEFAULT NULL,
  `dateNaissanceEleve` date NOT NULL,
  `dateInscription` date NOT NULL,
  `classeEleve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eleves`
--

INSERT INTO `eleves` (`idEleve`, `nomEleve`, `prenomEleve`, `postnomEleve`, `genre`, `numeroSecours`, `dateNaissanceEleve`, `dateInscription`, `classeEleve`) VALUES
(1, 'kankola', 'tshibala', 'elvis', 'M', '0977756377', '1997-01-09', '0000-00-00', 4),
(2, 'kalenga', 'kasongo', 'chrino', 'M', '0977756377', '2019-07-16', '2019-07-28', 7),
(3, 'kasonga', 'tshibangu', 'dan', 'M', '0977756377', '2019-07-02', '2019-07-28', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mois`
--

CREATE TABLE `mois` (
  `idMois` int(11) NOT NULL,
  `nomMois` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mois`
--

INSERT INTO `mois` (`idMois`, `nomMois`) VALUES
(1, 'janvier'),
(2, 'fevrier'),
(1, 'janvier'),
(2, 'fevrier'),
(3, 'mars'),
(4, 'avril'),
(5, 'mai'),
(6, 'juin'),
(7, 'juillet'),
(8, 'aout'),
(9, 'septembre'),
(10, 'octobre'),
(11, 'novembre'),
(12, 'decembre');

-- --------------------------------------------------------

--
-- Table structure for table `paiements`
--

CREATE TABLE `paiements` (
  `idPaiement` int(11) NOT NULL,
  `idEleve` int(11) NOT NULL,
  `idMois` int(11) NOT NULL,
  `montantPaiement` double NOT NULL,
  `datePaiement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paiements`
--

INSERT INTO `paiements` (`idPaiement`, `idEleve`, `idMois`, `montantPaiement`, `datePaiement`) VALUES
(1, 1, 2, 400, '0000-00-00'),
(2, 2, 11, 400, '2019-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `idStat` int(11) NOT NULL,
  `idPaiement` int(11) NOT NULL,
  `dateStat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apayers`
--
ALTER TABLE `apayers`
  ADD KEY `montant` (`idApayer`);

--
-- Indexes for table `comptes`
--
ALTER TABLE `comptes`
  ADD KEY `compte` (`idCompte`);

--
-- Indexes for table `eleves`
--
ALTER TABLE `eleves`
  ADD KEY `eleve` (`idEleve`),
  ADD KEY `idEleve` (`idEleve`);

--
-- Indexes for table `mois`
--
ALTER TABLE `mois`
  ADD KEY `mois` (`idMois`);

--
-- Indexes for table `paiements`
--
ALTER TABLE `paiements`
  ADD KEY `paiement` (`idPaiement`),
  ADD KEY `idEleve` (`idEleve`),
  ADD KEY `idMois` (`idMois`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD KEY `stat` (`idStat`),
  ADD KEY `idPaiement` (`idPaiement`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apayers`
--
ALTER TABLE `apayers`
  MODIFY `idApayer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `idCompte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eleves`
--
ALTER TABLE `eleves`
  MODIFY `idEleve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mois`
--
ALTER TABLE `mois`
  MODIFY `idMois` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paiements`
--
ALTER TABLE `paiements`
  MODIFY `idPaiement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `idStat` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paiements`
--
ALTER TABLE `paiements`
  ADD CONSTRAINT `paiements_ibfk_1` FOREIGN KEY (`idEleve`) REFERENCES `eleves` (`idEleve`),
  ADD CONSTRAINT `paiements_ibfk_2` FOREIGN KEY (`idMois`) REFERENCES `mois` (`idMois`);

--
-- Constraints for table `stats`
--
ALTER TABLE `stats`
  ADD CONSTRAINT `stats_ibfk_1` FOREIGN KEY (`idPaiement`) REFERENCES `paiements` (`idPaiement`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
