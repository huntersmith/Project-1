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



     $filename = $_FILES['picture']['name'];
     
     $target ="$filename";

     move_uploaded_file($_FILES['picture']['tmp_name'], $target);   

  $query = "INSERT INTO band_info (name, stree_address,  city, state, image, description, about, shows, albums,  band_members, map, band) VALUES ('$name', '$city', '$state', '$target', '$description', '$about', '$shows', '$albums', '$band_members', '$map', '$band')";
  

  $result = mysqli_query($db, $query)
   or die("Error 1 Querying Database");


$query = "SELECT * FROM band_info WHERE band_name = '$band_name'";
  
  $result = mysqli_query($db, $query)
   or die("Error 2 Querying Database");


  while($row = mysqli_fetch_array($result)) {
  	$band_name = $row['band_name'];
  	$city = $row['city'];
  	$state = $row['state'];
  	$genre = $row['genre'];
  	$members = $row['band_members'];
      $record_label = $row['record_label'];
      $bio = $row['bio'];
      $pic = $row['band_pic'];
  }

  	echo "<h1>$band_name</h1>";
      echo "<p>$city " . ", " . "$state</p>";
      echo "<p>$genre</p>";
      echo "<p>Members: $members</p>";
	echo "<p>Record Label: $record_label</p>";
	echo "<p>Bio: $bio</p></div>";
      echo "<img src =\"$pic\" />\n";
  
  mysqli_close($db);

?>

</div>
</body>
</html>
