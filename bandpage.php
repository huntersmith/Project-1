<?php

$_GET['id'];

include "db_connect.php";

$band = $_GET['id'];
$query = "SELECT * FROM bandinfo WHERE
band_id = $band;";
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");
 
echo "<table boarder =1>";
echo "<th>Band Name</th>";
echo "<th>Band Members</th>";
echo "<th>Albums</th>";
echo "<th>Address</th>";
echo "<th>Origin</th>";
echo "<th>Description</th>";
echo "<th>About</th>";
echo "<th>Shows</th>";
echo "<th>Map</th>";


while($row = mysqli_fetch_array($result)) {
$id = $row['id'];
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
echo "Band Name: ".$name;
echo "Band Members: ".$band_members;
echo "Albums: ".$albums;
echo "Address: ".$street_address.", ".$city.", ".$state;
echo "Description: ".$description;

?>
