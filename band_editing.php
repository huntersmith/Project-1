<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Band Editing</b></font>
</td></tr>
<tr bgcolor="white"><td align="center">
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
		<form enctype="multipart/form-data" method="post" action="index.php?page=edit_band.php">
    		
		<input type="hidden" name="band_id" value="<?php echo $band_id ?>"  />

		<label for="name">Band name:</label>
    		<input type="text" id="name" name="name" value="<?php echo $name ?>" /><br/>

    		<label for="street_address">Street Address:</label>
    		<input type="text" id="street_address" name="street_address" value="<?php echo $street_address ?>" /><br/>

    		<label for="city">City:</label>
    		<input type="text" id="city" name="city" value="<?php echo $city ?>" /><br/>

    		<label for="state">State:</label>
    		<input type="text" id="state" name="state" value="<?php echo $state ?>" /><br/>

    		<label for="genre">Genre:</label>
    		<input type="text" id="genre" name="genre" value="<?php echo $genre ?>" /><br/>

    		<label for="band_members">Band Members:</label>
    		<input type="text" id="band_members" name="band_members" value="<?php echo $members ?>" /><br/>

    		<label for="about">Band Bio:</label>
    		<textarea id="about" name="about"><?php echo $about ?></textarea><br/>

    		<label for="image">Select a Picture file:</label>
    		<input type="file" id="image" name="image" value="<?php echo $image ?>" /><br/>


    		<input type="submit" value="Save Changes" name="submit"/>
		</form>
  	</div>

<br />
</td></tr>
</table>
