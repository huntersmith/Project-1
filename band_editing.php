<?php
include("mustlogin.php");
?>
<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_editband.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">
	<div id="contents">
		<?php
                	include "db_connect.php";
                	$band_id = $_GET['id'];
                	$query = "Select * FROM bandinfo WHERE band_id = '$band_id';";
                	$result = mysqli_query($db, $query)
				or die("Error querying database.");
			while($row = mysqli_fetch_array($result)) {
				$name = htmlentities($row['name']); 
				$street_address = htmlentities($row['street_address']);
				$city = htmlentities($row['city']);
				$state = htmlentities($row['state']);
				$image = htmlentities($row['image']);
				$genre = htmlentities($row['genre']);
				$members = htmlentities($row['members']);
				$about = htmlentities($row['about']);
			}
        	?>
			
		<?php
			if (isset($_GET['errors']) && is_array($_GET['errors']))
			{
				foreach($_GET['errors'] as $error)
				{
					echo '<div>'.htmlentities($error).'</div>';
				}
			}
			?>

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

    		<label for="image">Select a Picture file:</label>
    		<input type="file" id="image" name="image" value="<?php echo $image ?>" /><br/>
			
			<label for="about">About Your Band:</label>
    		<textarea id="about" name="about"><?php echo $about ?></textarea><br/>


    		<input type="submit" value="Save Changes" name="submit"/>
		</form>
  	</div>

<br />
</td></tr>
</table>
