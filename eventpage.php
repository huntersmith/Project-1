<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Event Page</b></font>
</td></tr>
<tr bgcolor="white"><td align="center">

<?php

$_GET['id'];

include "db_connect.php";

$id = $_GET['id'];
$query = "SELECT * FROM events WHERE
event_id = $id;";
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$id = $row['event_id'];
$name = $row['name'];
$venue_id = $row['venue_id'];
$date = $row['date'];
$time = $row['time'];
$band1 = $row['band_id1'];
$band2 = $row['band_id2'];
$band3 = $row['band_id3'];
}

echo "Event Name: ".$name."<br>";
echo "Date: ".$date."<br>";
echo "Time: ".$time."<br>";

$query = "SELECT name FROM venues WHERE
venue_id = $venue_id;";
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$name = $row['name'];
}

echo "Venue: ".$name."<br>";

$query = "SELECT name FROM bandinfo WHERE
band_id = $band1;";
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$name1 = $row['name'];
}

echo "Band 1: ".$name1."<br>";

$query = "SELECT name FROM bandinfo WHERE
band_id = $band2;";
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$name2 = $row['name'];
}

if($band2 != 0)
{
	echo "Band 2: ".$name2."<br>";
}

$query = "SELECT name FROM bandinfo WHERE
band_id = $band3;";
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$name3 = $row['name'];
}

if($band3 != 0)
{
	echo "Band 3: ".$name3."<br>";
}


?>

<br />
</td></tr>
</table>