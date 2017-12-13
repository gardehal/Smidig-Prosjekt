-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:8889
-- Generation Time: Dec 13, 2017 at 12:53 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kolonial_abonnement`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonnement`
--

CREATE TABLE IF NOT EXISTS `abonnement` (
  `kunde_id` int(16) NOT NULL,
  `liste_id` int(16) NOT NULL,
  `bestiling_id` int(16) DEFAULT NULL,
  `leverings_dato` date NOT NULL,
  `leverings_tidspunkt` enum('07-09','08-10','08-11','09-10','09-11','09-12','09-14','14-16','16-19') NOT NULL,
  `intervall` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abonnement`
--

INSERT INTO `abonnement` (`kunde_id`, `liste_id`, `bestiling_id`, `leverings_dato`, `leverings_tidspunkt`, `intervall`) VALUES
(15, 19, 18763, '2017-12-13', '09-11', 4),
(15, 22, NULL, '2017-12-24', '16-19', 4),
(15, 21, NULL, '2017-12-28', '09-10', 3),
(16, 20, NULL, '2017-12-15', '16-19', 1),
(14, 21, NULL, '2017-12-28', '09-10', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kunde`
--

CREATE TABLE IF NOT EXISTS `kunde` (
  `kunde_id` int(15) NOT NULL,
  `kunde_fornavn` varchar(255) NOT NULL,
  `kunde_etternavn` varchar(255) NOT NULL,
  `kunde_konto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunde`
--

INSERT INTO `kunde` (`kunde_id`, `kunde_fornavn`, `kunde_etternavn`, `kunde_konto`) VALUES
(15, 'Jan Gunnar', 'Helsen', 142.4),
(16, 'Gro Gunn', 'Flatsås', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lister`
--

CREATE TABLE IF NOT EXISTS `lister` (
  `liste_id` int(15) NOT NULL,
  `kunde_id` int(15) NOT NULL,
  `liste_navn` varchar(255) NOT NULL,
  `liste_antall_varer` int(3) NOT NULL,
  `liste_total_pris` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lister`
--

INSERT INTO `lister` (`liste_id`, `kunde_id`, `liste_navn`, `liste_antall_varer`, `liste_total_pris`) VALUES
(19, 16, 'Ukesliste', 5, 245),
(20, 15, 'fylla', 12, 1000.2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`kunde_id`,`liste_id`);

--
-- Indexes for table `kunde`
--
ALTER TABLE `kunde`
  ADD PRIMARY KEY (`kunde_id`);

--
-- Indexes for table `lister`
--
ALTER TABLE `lister`
  ADD PRIMARY KEY (`liste_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
