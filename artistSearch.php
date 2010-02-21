<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Band Page</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body> 
<div id="wrap"> 
<?php include("artistHeader.html"); ?> 
<div id="main"> 
<?php 

include "db_connect.php"; 

	$search = $_POST['searchbox']; 
	$query = "SELECT * FROM bandInfo WHERE 
		band = '1' AND
		name LIKE '%$search%' OR 
		street_address LIKE '%$search%' OR 
		city LIKE '%$search%' OR 
		state LIKE '%$search%' OR 
		description LIKE '%$search%' OR 
		about LIKE '%$search%' OR
		shows LIKE '%$search%' OR
		albums LIKE '%$search%' OR
		band_members LIKE '%$search%' OR
		map LIKE '%$search%';";

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

echo "<tr> 
<td>$name</td> 
<td>$band_members</td> 
<td >$albums</td> 
<td>$city $state</td>
<td >$description</td>
<td >$about</td>
<td >$shows</td>
<td >$map</td> 
</tr>\n"; 
} 
echo "</table>"; 

mysqli_close($db); 
?> 
</div> 
<?php include("searchByArtistSidebar.php"); ?> 
<div id="footer"><p></p></div> 
</div> 
</body> 
</html>