-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2018 at 08:29 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybike`
--

-- --------------------------------------------------------

--
-- Table structure for table `cost_infos`
--

DROP TABLE IF EXISTS `cost_infos`;
CREATE TABLE IF NOT EXISTS `cost_infos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `productName` varchar(1000) DEFAULT NULL,
  `description` varchar(50000) DEFAULT NULL,
  `octen_select` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `otherPrice` int(10) NOT NULL,
  `totalPrice` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost_infos`
--

INSERT INTO `cost_infos` (`id`, `date`, `productName`, `description`, `octen_select`, `amount`, `otherPrice`, `totalPrice`) VALUES
(3, '2018-03-11', 'no', 'no', 10, 890, 0, 890),
(2, '2018-03-10', 'horn, mobil, pump, mobil service', 'horn 1ta, mobil 1ta', 0, 0, 640, 640),
(7, '2018-03-07', 'Rent', 'Garage rent', 0, 0, 500, 500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
