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
<div id="main"> 
<?php 
include "db_connect.php"; 

	$band = mysqli_real_escape_string($db, trim($_POST['searchband'])); 
	$query = "SELECT * FROM bandinfo WHERE 
		name LIKE '%$band%' OR
		street_address LIKE '%$band%' OR
		city LIKE '%$band%' OR
		state LIKE '%$band%' OR
		genre LIKE '%$band%' OR
		about LIKE '%$band%' OR
		members LIKE '%$band%' ORDER BY name;";

	$result = mysqli_query($db, $query) 
		or die("Error Querying Database"); 

$countrows = mysqli_num_rows($result);
if ($countrows == 0) {
	echo "<h1>No results matched your search!</h1>";
} else {

echo "<table boarder =1>"; 
echo "<th>Band Name</th>"; 
echo "<th>Band Members</th>";
echo "<th>Origin</th>"; 
echo "<th>Genres</th>"; 
echo "<th>About</th>";  

	while($row = mysqli_fetch_array($result)) {
		$id = $row['band_id'];
		$name = $row['name']; 
		$street_address = $row['street_address'];  
		$city = $row['city']; 
		$state = $row['state'];
		$genre = $row['genre'];
		$about = $row['about'];
		$members = $row['members'];
		
echo "<tr>
<td><b><a href='bandpage.php?id=$id'>$name</a></b></td>
<td>$members</td>  
<td>$city $state</td>
<td>$genre</td>
<td>$about</td> 
</tr>\n"; 
}
}
echo "</table>";

mysqli_close($db); 
?>
</div>  
<div id="footer"><p></p></div> 
</div> 
</body> 
</html>
