<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
	include "db_connect.php";
	
	$venue = $_POST['venue_searchbox'];
	$query = "SELECT * FROM $table WHERE name LIKE '%$venue%';";
//    echo "$query";
    $result = mysqli_query($db, $query)
		or die("Error Querying Database");

?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!--<link rel="stylesheet" type="text/css" href="style.css" />-->
</head>
<script type="text/javascript" src="calendarDateInput.js" />

<body>
<div id="wrap">
    <!--<?php include("header.html"); ?>-->
	<div id="main">
<?php

while($row = mysqli_fetch_array($result)) {
		$venue = $row['name'];
		$street_address = $row['street_address'];
		$city = $row['city'];
		$state = $row['state'];
		//$pic = $row['image'];
		$about = $row['about'];
		//$map = $row['map'];
		
		echo "
	<h1>$venue</h1>
	<!--<img src='$pic' alt='$venue'/>-->
	<p>Location: <br/>$street_address <br/> $city, $state </p>
	<p> $about </p>
	";
	//<p> <a href=$map>Link to map</a> <p>
    }

	//<p> <a href=$map>Link to map</a> <p>
	
    //include("sidebar.php"); ?>
	</div>
</div>
</body>
</html>
