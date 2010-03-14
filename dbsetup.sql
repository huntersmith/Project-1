DROP DATABASE bands;

CREATE DATABASE IF NOT EXISTS bands;
GRANT ALL PRIVILEGES ON bands.* to 'banduser'@'localhost' identified by 'bands';
--
-- 
--
USE bands;

--
-- Table structure for table `bandinfo`
--

CREATE TABLE IF NOT EXISTS `bandinfo` (
  `band_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(2) NOT NULL,
  `image` varchar(25) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `about` blob,
  `members` varchar(100) NOT NULL,
  PRIMARY KEY (`band_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bandinfo`
--

INSERT INTO `bandinfo` (`band_id`, `name`, `street_address`, `city`, `state`, `image`, `genre`, `about`, `members`) VALUES
(1, 'Test Band', '1200 Anywhere St.', 'Fredericksburg', 'VA', '', 'Country, Blue Grass', NULL, 'Bob, Jane, Sue, Alex'),
(2, 'Another Test', '1302 Street Ln', 'Alexandria', 'VA', '', 'Pop, Rock', NULL, 'Jeff, Julie, Jordan');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `venue_id` smallint(6) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `band_id1` smallint(6) DEFAULT NULL,
  `band_id2` smallint(6) DEFAULT NULL,
  `band_id3` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `events`
--


-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE IF NOT EXISTS `venues` (
  `venue_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(2) NOT NULL,
  `image` varchar(25) NOT NULL,
  `about` blob,
  `map` blob,
  PRIMARY KEY (`venue_id`)
);

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`venue_id`, `name`, `street_address`, `city`, `state`, `image`, `about`, `map`) VALUES
(1, 'Best Club', '1 Awesome St.', 'Fredericksburg', 'VA', '', NULL, NULL),
(2, 'Another Club', '302 Amazing Rd.', 'Fredericksburg', 'VA', '', NULL, NULL);

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
);


--
-- Table structure for table `login`
--
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
);
