<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Band Page</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php include "db_connect.php" ?>
<div id="contents">

<?php

  $name = $_POST['name'];
  $street_address = $_POST['street_address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $image = $_POST['image'];
  $description = $_POST['description'];
  $about = $_POST['about'];
  $shows = $_POST['shows'];
  $albums = $_POST['albums'];
  $band_members = $_POST['band_members'];
  $map = $_POST['map'];
  $band = $_POST['band'];  



     $filename = $_FILES['image']['name'];
     
     $target ="$filename";

     move_uploaded_file($_FILES['picture']['tmp_name'], $target);   

  $query = "INSERT INTO $table (name, street_address,  city, state, image, description, about, shows, albums,  band_members, map, band) VALUES ('$name', '$street_address', '$city', '$state', '$target', '$description', '$about', '$shows', '$albums', '$band_members', '$map', '$band')";
  

  $result = mysqli_query($db, $query)
   or die("Error 1 Querying Database");


$query = "SELECT * FROM $table WHERE name = '$name'";
  
  $result = mysqli_query($db, $query)
   or die("Error 2 Querying Database");


  while($row = mysqli_fetch_array($result)) {
  	$name = $row['name'];
  	$street_address = $row['street_address'];
	$city = $row['city'];
  	$state = $row['state'];
  	$description = $row['description'];
  	$members = $row['band_members'];
      	$albums = $row['albums'];
      	$about = $row['about'];
      	$image = $row['image'];
  }

  	echo "<h1>$band_name</h1>";
      echo "<p>$street_address $city " . ", " . "$state</p>";
      echo "<p>$description</p>";
      echo "<p>Members: $members</p>";
	echo "<p>Albums: $albums</p>";
	echo "<p>Bio: $about</p></div>";
      echo "<img src =\"$image\" />\n";
  
  mysqli_close($db);

?>

</div>
</body>
</html>
