DROP DATABASE IF EXISTS bands;

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
); 

--
-- Dumping data for table `bandinfo`
--

INSERT INTO `bandinfo` (`band_id`, `name`, `street_address`, `city`, `state`, `image`, `genre`, `about`, `members`) VALUES
(NULL, 'Test Band', '1200 Anywhere St.', 'Fredericksburg', 'VA', 'default.jpeg', 'Country, Blue Grass', NULL, 'Bob, Jane, Sue, Alex'),
(NULL, 'Another Test', '1302 Street Ln', 'Alexandria', 'VA', 'default.jpeg', 'Pop, Rock', NULL, 'Jeff, Julie, Jordan'),
(NULL, 'The Beatles', '465 Rosebud Ave', 'Gregory', 'SD','default.jpeg', 'Rock and Roll', NULL, 'John Lennon, Paul McCartney, George Harrison, Ringo Star'),
(NULL, 'Blue', '333 SW 1st St', 'Afton', 'OK', 'default.jpeg', 'Techno', NULL, 'Linda, Jessica, Dan'),
(NULL, 'Sunshine', '270 Charles St', 'Fredericksburg', 'VA', 'default.jpeg', 'Pop', NULL, 'Elizabeth, Ben, Zac'),
(NULL, 'The Judges','200 UCLA Medical Plaza', 'Los Angeles', 'CA', 'default.jpeg', 'Heavy metal', NULL, 'Jack Sonni, Ken Lopez, Howard Schilling, Charles Andrews'),
(NULL, 'Led Zeppelin','501 University Avenue','Fort Collins', 'CO', 'default.jpeg', 'Rock', NULL, 'Jimmy Page, John Paul Jones, Robert Plant, John Bonham'),
(NULL, 'Pink Floyd', '147 Shenango Avenue', 'Sharon', 'PA', 'default.jpeg', 'Rock', NULL, 'Syd Barrett, David Gilmour, Bob Klose, Nick Mason, Roger Waters, Richard Wright'),
(NULL, 'The Beach Boys','75 3rd Avenue', 'New York', 'NY', 'default.jpeg', 'Sunshine Pop', NULL, 'Al Jardine, Bruce Johnston, Mike Love, Brian Wilson');


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
);
(NULL, 'Summer Fun', '1', '2010-02-24','22:30:00','1','2','3');
(NULL, 'Event 2', '2', '2010-03-14','10:45:00','4','5','6');
(NULL, 'Winter Time', '3', '2010-01-15','21:30:00','7','8','9');
(NULL, 'Event 26', '4', '2010-05-16','20:00:00','1','4','7');

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
(NULL, 'Best Club', '1 Awesome St.', 'Fredericksburg', 'VA', 'default.jpeg', NULL, NULL),
(NULL, 'Another Club', '302 Amazing Rd.', 'Fredericksburg', 'VA', 'default.jpeg', NULL, NULL),
(NULL, 'Great Hall', '1301 College Ave', 'Fredericksburg', 'VA', 'default.jpeg', NULL, NULL),
(NULL, 'The Underground', '1301 College Ave', 'Fredericksburg', 'VA', 'default.jpeg', NULL, NULL),
(NULL, 'Hyperion', '1200 Williams St', 'Fredericksburg', 'VA', 'default.jpeg', NULL, NULL),
(NULL, 'The Griffin', '723 Caroline St', 'Fredericksburg', 'VA', 'default.jpeg', NULL, NULL);
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
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
);
