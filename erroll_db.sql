-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 12:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `erroll_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `member` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `active` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `member`, `name`, `email`, `password`, `active`) VALUES
(1, 'Admin', 'Justice Towett', 'jtowett89@gmail.com', 'jupiter89', 'True'),
(2, 'Admin', 'Martin Ndeto', 'martindeto@gmail.com', 'spiderpig', 'True'),
(3, 'Admin', 'Lord Erroll', 'info@lord-erroll.com', 'Abc123#', 'True');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `position` varchar(500) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `author` varchar(200) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `active` varchar(100) NOT NULL DEFAULT 'True',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `author` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `photo`, `author`, `date`, `unique_id`) VALUES
(3, 'Test', '5dc3ee9528cd8.jpg', 'Justice Towett', '07-November-2019', '5dc3ee9528cdc5dc3ee9528cdf'),
(4, 'test2', '5dc3f0fd41df4.jpg', 'Justice Towett', '07-November-2019', '5dc3f0fd41e015dc3f0fd41e05'),
(5, 'test 3`', '5dc3f10c1efc3.jpg', 'Justice Towett', '07-November-2019', '5dc3f10c1efc75dc3f10c1efcb'),
(6, 'test 4', '5dc3f135cbadd.jpg', 'Justice Towett', '07-November-2019', '5dc3f135cbae05dc3f135cbae4'),
(7, 'test 5', '5dc3f143b4751.jpg', 'Justice Towett', '07-November-2019', '5dc3f143b47555dc3f143b4759'),
(8, 'Test 6', '5dc3f16e129a7.jpg', 'Justice Towett', '07-November-2019', '5dc3f16e129ab5dc3f16e129ae');

-- --------------------------------------------------------

--
-- Table structure for table `special_menu`
--

CREATE TABLE IF NOT EXISTS `special_menu` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `author` varchar(200) NOT NULL,
  `unique_id` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `active` varchar(100) NOT NULL DEFAULT 'True',
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
