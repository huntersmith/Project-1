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
  $genre = $_POST['genre'];
  $about = $_POST['about'];
  $band_members = $_POST['band_members'];  



     $filename = $_FILES['image']['name'];
     
     $target ="$filename";

     move_uploaded_file($_FILES['image']['tmp_name'], $target);   

  $query = "INSERT INTO $table (name, street_address, city, state, image, genre, about, members) VALUES ('$name', '$street_address', '$city', '$state', '$target', '$genre', '$about', '$band_members')";
  

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
  	$genre = $row['genre'];
  	$members = $row['members'];
      $about = $row['about'];
      $image = $row['image'];
  }

  	echo "<h1>$name</h1>";
      echo "<p>$street_address</p>";
      echo "<p>$city " . ", " . "$state</p>";
      echo "<p>$genre</p>";
      echo "<p>Members: $members</p>";
	echo "<p>Bio: $about</p></div>";
      echo "<img src =\"$image\" style = \"width: 350px; height: 275 px;\"/>\n";
  
  mysqli_close($db);

?>

<br/>
<a href = "index.php">Back to Main Page</a>

</div>
</body>
</html>
