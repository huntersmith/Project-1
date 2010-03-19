<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Venue Page</b></font>
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
		$map = $row['map'];
		
		$map = 'http://maps.google.com/maps?f=q&source=s_q&hl=en&q='.urlencode($street_address.' '.$city.' '.$state);
		
		echo "
		<h1>$venue</h1>
		<!--<img src='$pic' alt='$venue'/>-->
		<p>Location: <br/>$street_address <br/> $city, $state </p>
		<p> $about </p>
		<a href='$map'>Need a map?</a>
		<a href='venue_editing.php?id=$venue_id'>Edit this Venue</a>
		";
    }




?>

<br />
</td></tr>
</table>

<br />
<br />
<a href='index.php'>Back to Main Page</a>