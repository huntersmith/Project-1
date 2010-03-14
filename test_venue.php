<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Venue Page</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php include "db_connect.php" ?>
<div id="contents">

<?php

  $name = mysqli_real_escape_string($db, trim($_POST['name']));
  $street_address = mysqli_real_escape_string($db, trim($_POST['street_address']));
  $city = mysqli_real_escape_string($db, trim($_POST['city']));
  $state = mysqli_real_escape_string($db, trim($_POST['state']));
  $image = mysqli_real_escape_string($db, trim($_POST['image']));
  $about = mysqli_real_escape_string($db, trim($_POST['about']));

  $filename = $_FILES['image']['name'];
     
  $target ="$filename";

  move_uploaded_file($_FILES['image']['tmp_name'], $target);   

  $query = "INSERT INTO venues (name, street_address,  city, state, image, about) VALUES ('$name', '$street_address', '$city', '$state', '$target', '$about')";
  

  $result = mysqli_query($db, $query)
   or die("Error 1 Querying Database");


$query = "SELECT * FROM venues WHERE name = '$name'";
  
  $result = mysqli_query($db, $query)
   or die("Error 2 Querying Database");


  while($row = mysqli_fetch_array($result)) {
  	$name = $row['name'];
  	$street_address = $row['street_address'];
	$city = $row['city'];
  	$state = $row['state'];
      $about = $row['about'];
      $image = $row['image'];
  }

  	echo "<h1>$name</h1>";
      echo "<p>$street_address</p>";
      echo "<p>$city " . ", " . "$state</p>";
	echo "<p>$about</p></div>";
      echo "<img src =\"$image\" style = \"width: 350px; height: 275 px;\"/>\n";
  
  mysqli_close($db);

?>

<br/>
<a href = "index.php">Back to Main Page</a>

</div>
</body>
</html>
