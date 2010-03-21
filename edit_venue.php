<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edited Page</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">
<div id="main">
<?php
include "db_connect.php"; 
$venue_id = $_POST['venue_id'];
$name = $_POST['name'];
$street_address = $_POST['street_address'];
$city = $_POST['city'];
$state = $_POST['state'];
$image = $_POST['image'];
$about = $_POST['about'];

$filename = $_FILES['image']['name'];
     
$target ="$filename";

move_uploaded_file($_FILES['image']['tmp_name'], $target);

$query = "UPDATE venues
SET
name='$name',
street_address='$street_address',
city='$city',
state='$state',
image='$target',
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
</div>
</body>
</html>
