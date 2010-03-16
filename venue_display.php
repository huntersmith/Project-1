<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_vsearchres.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">

<?php
	
	$venue = mysqli_real_escape_string($db, trim($_POST['venue_searchbox']));
	$query = "SELECT * FROM venues WHERE name LIKE '%$venue%' ORDER BY name;";
  // echo "$query";
    $result = mysqli_query($db, $query)
		or die("Error Querying Database");

$countrows = mysqli_num_rows($result);
if ($countrows == 0) {
	echo "<h1>No results matched your search!</h1>";
} else{

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
    }
    //include("sidebar.php"); 
?>

<br />
</td></tr>
</table>
</body>
</html>
