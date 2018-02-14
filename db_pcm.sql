-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2016 at 02:03 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `td_admin`
--

CREATE TABLE IF NOT EXISTS `td_admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pass` char(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `td_admin`
--

INSERT INTO `td_admin` (`id`, `user`, `pass`, `name`, `photo`) VALUES
(1, 'admin', 'admin2015', 'Partha', 'avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `td_client`
--

CREATE TABLE IF NOT EXISTS `td_client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(100) NOT NULL,
  `client_ph` varchar(150) DEFAULT NULL,
  `client_email` varchar(150) DEFAULT NULL,
  `client_address` text,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `td_client_domain`
--

CREATE TABLE IF NOT EXISTS `td_client_domain` (
  `domain_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `domain_name` varchar(200) NOT NULL,
  `domain_url` varchar(200) NOT NULL,
  `domain_registration_date` date NOT NULL,
  PRIMARY KEY (`domain_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `td_project`
--

CREATE TABLE IF NOT EXISTS `td_project` (
  `prj_id` int(11) NOT NULL AUTO_INCREMENT,
  `prj_name` varchar(100) NOT NULL,
  `prj_type` varchar(50) NOT NULL,
  `prj_domain` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`prj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `td_service`
--

CREATE TABLE IF NOT EXISTS `td_service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(100) NOT NULL,
  `note` text,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `td_service_assign`
--

CREATE TABLE IF NOT EXISTS `td_service_assign` (
  `sa_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `prj_id` int(11) NOT NULL,
  `note` text,
  `duration` int(11) NOT NULL,
  `cost` float(20,2) NOT NULL,
  `allocation_date` date NOT NULL,
  `notification_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `due_status` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  PRIMARY KEY (`sa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
