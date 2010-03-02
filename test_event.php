<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Event Page</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php include "db_connect.php" ?>
<div id="contents">

<?php

  $name = $_POST['name'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $venue = $_POST['venue'];
  $band = $_POST['band'];

$query = "SELECT venue_id FROM venues WHERE name = '$venue'";

$result = mysqli_query($db, $query)
    or die("Error 1 Querying Database");

$row = mysqli_fetch_array($result);
$venue_id = $row['venue_id'];


$query = "SELECT band_id FROM $table WHERE name = '$band'";

$result = mysqli_query($db, $query)
    or die("Error 2 Querying Database");

$row = mysqli_fetch_array($result);
$band_id = $row['band_id'];

  $query = "INSERT INTO events (name, venue_id, date, time, band_id1) VALUES ('$name', '$venue_id', '$date', '$time', '$band_id')";
  

  $result = mysqli_query($db, $query)
   or die("Error 3 Querying Database");


$query = "SELECT * FROM events WHERE name = '$name'";
  
  $result = mysqli_query($db, $query)
   or die("Error 4 Querying Database");


  while($row = mysqli_fetch_array($result)) {
  	$name = $row['name'];
  	$venue_id = $row['venue_id'];
	$date = $row['date'];
  	$time = $row['time'];
  	$band_id = $row['band_id1'];
  }

$query = "SELECT name FROM venues WHERE venue_id = '$venue_id'";
$result = mysqli_query($db, $query)
    or die("Error 5 Querying Database");
$row = mysqli_fetch_array($result);
$venue_name = $row['name'];

$query = "SELECT name FROM bandinfo WHERE band_id = '$band_id'";
$result = mysqli_query($db, $query)
    or die("Error 6 Querying Database");
$row = mysqli_fetch_array($result);
$band_name = $row['name'];

  	echo "<h1>$name</h1>";
      echo "<p>$venue_name</p>";
      echo "<p>$date</p>";
      echo "<p>$time</p>";
      echo "<p>$band_name</p>";
  
  mysqli_close($db);

?>

<br/>
<a href = "index.php">Back to Main Page</a>

</div>
</body>
</html>