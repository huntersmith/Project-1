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
                	$band_id = $_POST['band_id'];

                	$query = "Select * FROM bands WHERE id = '$band_id';";
                	$result = mysqli_query($db, $query);
			$name = $row['name'];
			$street_address = $row['street_address'];
			$city = $row['city'];
			$state = $row['state'];
			$image = $row['image'];
			$genre = $row['genre'];
			$about = $row['about'];
			$members = $row['members'];
        	?>

  		<h1>Edit Band Information</h1>

    		<label for="name">Band name:</label>
    		<input type="text" id="name" name="name" value=$name /><br/>

    		<label for="street_address">Street Address:</label>
    		<input type="text" id="street_address" name="street_address" value=<?php echo $street_address ?> /><br/>

    		<label for="city">City:</label>
    		<input type="text" id="city" name="city" value=$city /><br/>

    		<label for="state">State:</label>
    		<input type="text" id="state" name="state" value=$state /><br/>

    		<label for="genre">Genre:</label>
    		<input type="text" id="genre" name="genre" value=$genre /><br/>

    		<label for="band_members">Band Members:</label>
    		<input type="text" id="band_members" name="band_members" value=$members /><br/>

    		<label for="about">Band Bio:</label>
    		<textarea id="about" name="about">$about</textarea><br/>

    		<label for="image">Select a Picture file:</label>
    		<input type="file" id="image" name="image" value=$image /><br/>


    		<input type="submit" value="Save Changes" name="submit"/>
		
  	</div>
</body>

</html>
