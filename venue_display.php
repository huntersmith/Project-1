<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Venue Search</title>
</head>
<body>

<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Venue Results</b></font>
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