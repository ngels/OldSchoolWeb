-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2020 at 12:25 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactmessages`
--

DROP TABLE IF EXISTS `contactmessages`;
CREATE TABLE IF NOT EXISTS `contactmessages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `senderEmail` varchar(200) NOT NULL,
  `senderTelephone` varchar(200) NOT NULL,
  `msg` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactmessages`
--

INSERT INTO `contactmessages` (`id`, `senderEmail`, `senderTelephone`, `msg`) VALUES
(1, 'pamyngels@outlook.fr', '+8615101581639', 'vraiment'),
(2, 'pamyngels@outlook.fr', '+8615101581639', 'vraiment'),
(3, 'pamyngels@outlook.fr', '+8615101581639', 'voila'),
(4, '', '', ''),
(5, 'wapi@hfhffj.fr', 'wapi', 'dddddd'),
(6, 'wapi@hfhffj.fr', 'wapi', 'dddddd'),
(7, 'pamyngels@outlook.fr', '+8615101581639', 'je vais voir mon papa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
