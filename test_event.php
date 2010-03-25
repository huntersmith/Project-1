<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Test Event</b></font>
</td></tr>
<tr bgcolor="white"><td align="center">


<?php include "db_connect.php" ?>
<div id="contents">

<?php

  $name = mysqli_real_escape_string($db, trim($_POST['name']));
  $date = mysqli_real_escape_string($db, trim($_POST['date']));
  $time = mysqli_real_escape_string($db, trim($_POST['time']));
  $venue = mysqli_real_escape_string($db, trim($_POST['venue']));
  $band1 = mysqli_real_escape_string($db, trim($_POST['band1']));
/*  $band2 = mysqli_real_escape_string($db, trim($_POST['band2']));
  $band3 = mysqli_real_escape_string($db, trim($_POST['band3']));*/

$query = "SELECT venue_id FROM venues WHERE name = '$venue'";

$result = mysqli_query($db, $query)
    or die("Error 1 Querying Database");

$row = mysqli_fetch_array($result);
$venue_id = $row['venue_id'];


$query = "SELECT band_id FROM $table WHERE name = '$band1'";

$result = mysqli_query($db, $query)
    or die("Error 2 Querying Database");

$row = mysqli_fetch_array($result);
$band_id1 = $row['band_id'];
/*
$query = "SELECT band_id FROM $table WHERE name = '$band2'";

$result = mysqli_query($db, $query)
    or die("Error 2 Querying Database");

$row = mysqli_fetch_array($result);
$band_id2 = $row['band_id'];

$query = "SELECT band_id FROM $table WHERE name = '$band3'";

$result = mysqli_query($db, $query)
    or die("Error 2 Querying Database");

$row = mysqli_fetch_array($result);
$band_id3 = $row['band_id'];

  $query = "INSERT INTO events (name, venue_id, date, time, band_id1, band_id2, band_id3) VALUES ('$name', '$venue_id', '$date', '$time', '$band_id1', '$band_id2', '$band_id3')";
*/
  $query = "INSERT INTO events (name, venue_id, date, time, band_id1, band_id2, band_id3) VALUES ('$name', '$venue_id', '$date', '$time', '$band_id1')";
  

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
  	$band_id1 = $row['band_id1'];
 	/*$band_id2 = $row['band_id2'];
	$band_id3 = $row['band_id3'];*/
  }

$query = "SELECT name FROM venues WHERE venue_id = '$venue_id'";
$result = mysqli_query($db, $query)
    or die("Error 5 Querying Database");
$row = mysqli_fetch_array($result);
$venue_name = $row['name'];

$query = "SELECT name FROM bandinfo WHERE band_id = '$band_id1'";
$result = mysqli_query($db, $query)
    or die("Error 6 Querying Database");
$row = mysqli_fetch_array($result);
$band_name1 = $row['name'];
/*
$query = "SELECT name FROM bandinfo WHERE band_id = '$band_id2'";
$result = mysqli_query($db, $query)
    or die("Error 6 Querying Database");
$row = mysqli_fetch_array($result);
$band_name2 = $row['name'];

$query = "SELECT name FROM bandinfo WHERE band_id = '$band_id3'";
$result = mysqli_query($db, $query)
    or die("Error 6 Querying Database");
$row = mysqli_fetch_array($result);
$band_name3 = $row['name'];
*/
  	echo "<h1>$name</h1>";
      echo "<p>$venue_name</p>";
      echo "<p>$date</p>";
      echo "<p>$time</p>";
      echo "<p>$band_name1</p>";
/*	echo "<p>$band_name2</p>";
	echo "<p>$band_name3</p>";*/
  
  mysqli_close($db);

?>

<br/>
<a href = "index.php">Back to Main Page</a>

</div>

<br />
</td></tr>
</table>