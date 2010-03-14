<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  	<title>Edit Your Band</title>
  	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="contents">
		<?php
                	include "db_connect.php";
                	$band_id = $_GET['id'];
			echo $band_id."\n";
                	$query = "Select * FROM bandinfo WHERE band_id = '$band_id';";
                	$result = mysqli_query($db, $query)
				or die("Error querying database.");
			while($row = mysqli_fetch_array($result)) {
				$name = $row['name'];
				echo "$name \n"; 
				$street_address = $row['street_address'];
				echo "$street_address \n";
				$city = $row['city'];
				echo "$city \n";
				$state = $row['state'];
				echo "$state \n";
				$image = $row['image'];
				echo "$image \n";
				$genre = $row['genre'];
				echo "$genre \n";
				$about = $row['about'];
				echo "$about \n";
				$members = $row['members'];
				echo "$members \n";
			}
        	?>

  		<h1>Edit Band Information</h1>

    		<label for="name">Band name:</label>
    		<input type="text" id="name" name="name" value=<?php echo $name ?> /><br/>

    		<label for="street_address">Street Address:</label>
    		<input type="text" id="street_address" name="street_address" value="<?php echo $street_address ?>" /><br/>

    		<label for="city">City:</label>
    		<input type="text" id="city" name="city" value=<?php echo $city ?> /><br/>

    		<label for="state">State:</label>
    		<input type="text" id="state" name="state" value=<?php echo $state ?>/><br/>

    		<label for="genre">Genre:</label>
    		<input type="text" id="genre" name="genre" value=<?php echo $genre ?> /><br/>

    		<label for="band_members">Band Members:</label>
    		<input type="text" id="band_members" name="band_members" value=<?php echo $members ?> /><br/>

    		<label for="about">Band Bio:</label>
    		<textarea id="about" name="about"><?php echo $about ?></textarea><br/>

    		<label for="image">Select a Picture file:</label>
    		<input type="file" id="image" name="image" value=<?php echo $image ?> /><br/>


    		<input type="submit" value="Save Changes" name="submit"/>
		
  	</div>
</body>

</html>
