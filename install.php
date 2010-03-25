<?php
if(isset($_POST['create']))
{
 
$root = $_POST['root'];
$pw = $_POST['pw'];
$db = mysqli_connect('localhost',$root,$pw);
if(!$db)
die('Connect Error, did you enter the right information?');
$db = mysqli_connect('localhost',$root,$pw);
mysqli_query($db,"DROP DATABASE IF EXISTS bands");
 
mysqli_query($db,"CREATE DATABASE IF NOT EXISTS bands");
mysqli_query($db,"GRANT ALL PRIVILEGES ON bands.* to 'banduser'@'localhost' identified by 'bands'");
 
mysqli_select_db($db,"bands");
 
mysqli_query($db,"CREATE TABLE IF NOT EXISTS `bandinfo` (
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
)");
 
 
mysqli_query($db,"INSERT INTO `bands`.`bandinfo` (`band_id`, `name`, `street_address`, `city`, `state`, `image`, `genre`, `about`, `members`) VALUES 
(NULL, 'Test Band', '1200 Anywhere St.', 'Fredericksburg', 'VA', 'default.jpeg', 'Country, Blue Grass', NULL, 'Bob, Jane, Sue, Alex'), 
(NULL, 'Another Test', '1302 Street Ln', 'Alexandria', 'VA', 'default.jpeg', 'Pop, Rock', NULL, 'Jeff, Julie, Jordan'), 
(NULL, 'The Beatles', '465 Rosebud Ave', 'Gregory', 'SD', 'beatles_abbey-road.jpeg', 'Rock and Roll', NULL, 'John Lennon, Paul McCartney, George Harrison, Ringo Star'), 
(NULL, 'Blue', '333 SW 1st St', 'Afton', 'OK', 'default.jpeg', 'Techno', NULL, 'Linda, Jessica, Dan'), 
(NULL, 'Sunshine', '270 Charles St', 'Fredericksburg', 'VA', 'default.jpeg', 'Pop', NULL, 'Elizabeth, Ben, Zac'), 
(NULL, 'The Judges','200 UCLA Medical Plaza', 'Los Angeles', 'CA', 'default.jpeg', 'Heavy metal', NULL, 'Jack Sonni, Ken Lopez, Howard Schilling, Charles Andrews'), 
(NULL, 'Led Zeppelin','501 University Avenue','Fort Collins', 'CO', 'default.jpeg', 'Rock', NULL, 'Jimmy Page, John Paul Jones, Robert Plant, John Bonham'), 
(NULL, 'Pink Floyd', '147 Shenango Avenue', 'Sharon', 'PA', 'default.jpeg', 'Rock', NULL, 'Syd Barrett, David Gilmour, Bob Klose, Nick Mason, Roger Waters, Richard Wright'), 
(NULL, 'The Beach Boys','75 3rd Avenue', 'New York', 'NY', 'default.jpeg', 'Sunshine Pop', NULL, 'Al Jardine, Bruce Johnston, Mike Love, Brian Wilson');");
 
 
mysqli_query($db,"CREATE TABLE IF NOT EXISTS `events` (
  `event_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `venue_id` smallint(6) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `band_id1` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
)");
mysqli_query($db,"INSERT INTO `events` (`event_id`, `name`, `venue_id`, `date`, `time`, `band_id1`)
VALUES
(NULL, 'Summer Fun', '1', '2010-02-24','22:30:00','1'),
(NULL, 'Event 2', '2', '2010-03-14','10:45:00','4'),
(NULL, 'Winter Time', '3', '2010-01-15','21:30:00','7'),
(NULL, 'Event 26', '4', '2010-05-16','20:00:00','1')");
 
mysqli_query($db,"CREATE TABLE IF NOT EXISTS `venues` (
  `venue_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(2) NOT NULL,
  `image` varchar(25) NOT NULL,
  `about` blob,
  `map` blob,
  PRIMARY KEY (`venue_id`)
)");
 
mysqli_query($db,"INSERT INTO `venues` (`venue_id`, `name`, `street_address`, `city`, `state`, `image`, `about`, `map`) VALUES
(NULL, 'Best Club', '1 Awesome St.', 'Fredericksburg', 'VA', 'default.jpeg', NULL, NULL),
(NULL, 'Another Club', '302 Amazing Rd.', 'Fredericksburg', 'VA', 'default.jpeg', NULL, NULL),
(NULL, 'Great Hall', '1301 College Ave', 'Fredericksburg', 'VA', 'greathall.jpg', NULL, NULL),
(NULL, 'The Underground', '1301 College Ave', 'Fredericksburg', 'VA', 'underground.jpg', NULL, NULL),
(NULL, 'Hyperion', '1200 Williams St', 'Fredericksburg', 'VA', 'Hyperion.JPG', NULL, NULL),
(NULL, 'The Griffin', '723 Caroline St', 'Fredericksburg', 'VA', 'griffin.jpg', NULL, NULL)");
 
mysqli_query($db,"CREATE TABLE IF NOT EXISTS `records` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `releaseDate` DATE NOT NULL,
  `band_id` smallint(6) NOT NULL,
  CONSTRAINT bandinfo_band_id_fk
  FOREIGN KEY (`band_id`)
  REFERENCES bandinfo (`band_id`)
)");
mysqli_query($db,"INSERT INTO `records` (`record_id`, `name`, `releaseDate`, `band_id`) VALUES
(NULL, 'Introducing... the Beatles', '1964-01-10', 3),
(NULL, 'The Beatles Second Album', '1964-04-10', 3),
(NULL, 'Something New', '1964-07-20', 3),
(NULL, 'The Beatles Story', '1964-11-23', 3),
(NULL, 'Beatles 65', '1964-12-15', 3),
(NULL, 'The Early Beatles', '1965-03-22', 3),
(NULL, 'Surfin Safari', '1962-10-01', 9),
(NULL, 'Surfin USA', '1963-03-25', 9),
(NULL, 'Surfer Girl', '1963-09-16', 9),
(NULL, 'Led Zeppelin', '1969-01-12', 7),
(NULL, 'Led Zeppelin II', '1969-10-22', 7),
(NULL, 'Led Zeppelin III', '1970-10-05', 7),
(NULL, 'Led Zeppelin IV', '1971-11-08', 7)");
 
mysqli_query($db,"CREATE TABLE IF NOT EXISTS `login` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
)");
 
if(file_exists("install.bak.php")) unlink("install.bak.php");
rename("install.php","install.bak.php");
$url = 'index.php';
header("Location: $url");
exit;
}
?>
<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="left">
<html>
<head>
<title> Band Set up page </title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>">
Enter the information for your mysql database server.
<br>
Enter Root Name: <input type="text" name="root">
<br>
Enter Root Password: <input type="password" name="pw">
<br>
<input type="submit" name="create" value="Create DB">
</form>
</body>
</html>
</td></tr>
</table>
