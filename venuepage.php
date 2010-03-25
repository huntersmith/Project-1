<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_venuepage.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">

<?php

include "db_connect.php";

$id = $_GET['id'];
$query = "SELECT * FROM venues WHERE
venue_id = $id;";
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
		$venue_id = $row['venue_id'];
		$venue = $row['name'];
		$street_address = $row['street_address'];
		$city = $row['city'];
		$state = $row['state'];
		$pic = $row['image'];
		$about = $row['about'];
		$image = $row['image'];
		$map = $row['map'];
		
		$map = 'http://maps.google.com/maps?f=q&source=s_q&hl=en&q='.urlencode($street_address.' '.$city.' '.$state);
		
		echo "
		<h1>$venue</h1>
		<br><br><img src =\"$image\" style = \"width: 350px; height: 275 px;\"/><br/>
		<p>Location: <br/>$street_address <br/> $city, $state </p>
		<p> $about </p>
		<a href='$map'>Need a map?</a>
		<a href='index.php?page=venue_editing.php&id=$venue_id'>Edit this Venue</a>
		";
    }




?>

<br />
</td></tr>
</table>
