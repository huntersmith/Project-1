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

$query = "SELECT events.name, events.date, events.time, venues.name
FROM events
INNER JOIN venues
ON events.venue_id = venues.venue_id, AND events.event_id = $id;
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$name = $row['name'];
}

echo "Venue: ";
echo "<a href = venuepage.php?id=$venue_id>$name</a><br/>";

$query = "SELECT bandinfo.name
FROM bandinfo
INNER JOIN events
ON events.band_id1 = bandinfo.band_id, AND events.event_id = $id;";
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$name1 = $row['name'];
}

echo "Band 1: ";
echo "<a href = bandpage.php?id=$band1>$name1</a><br/>";

$query = "SELECT bandinfo.name
FROM bandinfo
INNER JOIN events
ON events.band_id2 = bandinfo.band_id, AND events.event_id = $id;";
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$name2 = $row['name'];
}

if($band2 != 0)
{
	echo "Band 2: ";
	echo "<a href = bandpage.php?id=$band2>$name2</a><br/>";
}

$query = "SELECT bandinfo.name
FROM bandinfo
INNER JOIN events
ON events.band_id3 = bandinfo.band_id, AND events.event_id = $id;";
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$name3 = $row['name'];
}

if($band3 != 0)
{
	echo "Band 3: ";
	echo "<a href = bandpage.php?id=$band3>$name3</a><br/>";
}


?>

<br />
</td></tr>
</table>