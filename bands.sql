-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2010 at 09:33 PM
-- Server version: 5.1.42
-- PHP Version: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bands`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandinfo`
--

CREATE TABLE IF NOT EXISTS `bandinfo` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(2) NOT NULL,
  `image` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL,
  `about` blob,
  `shows` varchar(25) NOT NULL,
  `albums` varchar(25) NOT NULL,
  `band_members` varchar(100) NOT NULL,
  `map` blob,
  `band` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bandinfo`
--

INSERT INTO `bandinfo` (`id`, `name`, `street_address`, `city`, `state`, `image`, `description`, `about`, `shows`, `albums`, `band_members`, `map`, `band`) VALUES
(1, 'Test Band', '1200 Anywhere St.', 'Fredericksburg', 'VA', '', 'Country, Blue Grass', NULL, 'No upcoming shows', 'First Album, Second Album', 'Bob, Jane, Sue, Alex', NULL, 1),
(2, 'Another Test', '1302 Street Ln', 'Alexandria', 'VA', '', 'Pop, Rock', NULL, 'No upcoming shows', 'One, Two, Three', 'Jeff, Julie, Jordan', NULL, 1),
(3, 'Best Club', '1 Awesome St.', 'Fredericksburg', 'VA', '', 'Really great music', NULL, 'No upcoming shows', '', '', NULL, 0),
(4, 'Another Club', '302 Amazing Rd.', 'Fredericksburg', 'VA', '', 'Our music is OK', NULL, 'No upcoming shows', '', '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `id` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`record_id`),
  KEY `id` (`id`,`venue_id`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `records`
--

