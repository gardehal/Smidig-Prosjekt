-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:8889
-- Generation Time: Dec 13, 2017 at 09:36 AM
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
(15, 19, 18763, '2017-12-20', '09-14', 4),
(18, 39, 66666, '0002-05-20', '09-12', 5),
(1, 3, 12356, '2017-12-29', '09-11', 2),
(2, 6, 43452, '2017-12-29', '08-10', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`kunde_id`,`liste_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
