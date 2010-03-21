<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Edit Venue</b></font>
</td></tr>
<tr bgcolor="white"><td align="center">

<?php
include "db_connect.php"; 
$venue_id = $_POST['venue_id'];
$name = $_POST['name'];
$street_address = $_POST['street_address'];
$city = $_POST['city'];
$state = $_POST['state'];
$image = $_POST['image'];
$about = $_POST['about'];

$query = "UPDATE venues
SET
name='$name',
street_address='$street_address',
city='$city',
state='$state',
image='$image',
about='$about'
WHERE venue_id='$venue_id';";

$result = mysqli_query($db, $query)
	or die("Error Querying Database");

echo "The new information is:";

$query = "SELECT * FROM venues WHERE venue_id='$venue_id';";
$result = mysqli_query($db, $query)
	or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$id = $row['venue_id'];
$name = $row['name'];
$street_address = $row['street_address'];
$city = $row['city'];
$state = $row['state'];
$about = $row['about'];
}

echo "Name: ".$name."<br>";
echo "Address: ".$street_address.", ".$city.", ".$state."<br>";
echo "Description: ".$about."<br>";
?>
<br />
</td></tr>
</table>
