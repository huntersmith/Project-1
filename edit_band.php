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
$band_id = $_GET['id'];
$name = $_POST['name'];
$street_address = $_POST['street_address'];
$city = $_POST['city'];
$state = $_POST['state'];
$image = $_POST['image'];
$genre = $_POST['genre'];
$about = $_POST['about'];
$members = $_POST['members'];

$query = "UPDATE bandinfo
SET
name=$name,
street_address=$street_address,
city=$city,
state=$state,
image=$image,
genre=$genre,
about=$about,
members=$members
WHERE band_id=$band_id;";

$result = mysqli_query($db, $query)
or die("Error Querying Database");

echo "the new information is:"

$query = "SELECT * FROM bandinfo WHERE band_id=$band_id";
$result = mysqli_query($db, $query)
	or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$id = $row['band_id'];
$name = $row['name'];
$street_address = $row['street_address'];
$city = $row['city'];
$state = $row['state'];
$description = $row['description'];
$about = $row['about'];
$shows = $row['shows'];
$albums = $row['albums'];
$band_members = $row['band_members'];
$map = $row['map'];
}

echo "Band Name: ".$name."\n";
echo "Band Members: ".$band_members."\n";
?>
echo "Albums: ".$albums."\n";
echo "Address: ".$street_address.", ".$city.", ".$state."\n";
echo "Description: ".$description."\n";