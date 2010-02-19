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
