<?php

$_GET['id'];

include "db_connect.php";

$band = $_GET['id'];
$query = "SELECT * FROM bandinfo WHERE
band_id = $band;";
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");

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
echo "Band Name: ".$name."\n";
echo "Band Members: ".$band_members."\n";
echo "Albums: ".$albums."\n";
echo "Address: ".$street_address.", ".$city.", ".$state."\n";
echo "Description: ".$description."\n";

echo "<a href='band_editing.php?id=$id'>";

?>
