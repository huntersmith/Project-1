CREATE DATABASE IF NOT EXISTS bands;
GRANT ALL PRIVILEGES ON bands.* to 'banduser'@'localhost' identified by 'bands';
--
-- Table structure for table `abduction_reports`
--
USE bands;

CREATE TABLE IF NOT EXISTS `bandInfo` (

  id smallint(6) NOT NULL AUTO_INCREMENT,
	name varchar(50) NOT NULL,
	street_address varchar(50) NOT NULL,
	city varchar(25) NOT NULL,
	state varchar(2) NOT NULL,
	image varchar(25) NOT NULL,
	description varchar(100) NOT NULL,
	about blob,
	shows varchar(25) NOT NULL,
	albums varchar(25) NOT NULL,
	band_members varchar (100) NOT NULL,
	map blob,
	band boolean NOT NULL,
  PRIMARY KEY (`id`)
)ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

TRUNCATE TABLE bandInfo;
--
-- Dumping data for table `abduction_reports`
--
INSERT INTO `bandinfo` (`id`, `name`, `street_address`, `city`, `state`, `image`, `description`, `about`, `shows`, `albums`, `band_members`, `map`, `band`) VALUES
(1, 'Test Band', '1200 Anywhere St.', 'Fredericksburg', 'VA', '', 'Country, Blue Grass', NULL, 'No upcoming shows', 'First Album, Second Album', 'Bob, Jane, Sue, Alex', NULL, 1),
(2, 'Another Test', '1302 Street Ln', 'Alexandria', 'VA', '', 'Pop, Rock', NULL, 'No upcoming shows', 'One, Two, Three', 'Jeff, Julie, Jordan', NULL, 1),
(3, 'Best Club', '1 Awesome St.', 'Fredericksburg', 'VA', '', 'Really great music', NULL, 'No upcoming shows', '', '', NULL, 0),
(4, 'Another Club', '302 Amazing Rd.', 'Fredericksburg', 'VA', '', 'Our music is OK', NULL, 'No upcoming shows', '', '', NULL, 0);
