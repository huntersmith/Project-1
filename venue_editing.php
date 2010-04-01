<?php
include("mustlogin.php");
?>
<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_editvenue.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">

	<div id="contents">
		<?php
                        include "db_connect.php";
                        $venue_id = $_GET['id'];

                        $query = "Select * FROM venues WHERE venue_id = '$venue_id';";
                        $result = mysqli_query($db, $query)
				or die("Error querying database.");
			while($row = mysqli_fetch_array($result)) {
                                $name = $row['name'];
                                $street_address = $row['street_address'];
                                $city = $row['city'];
                                $state = $row['state'];
                                $image = $row['image'];
                                $about = $row['about'];
                        }
                ?>

		<form enctype="multipart/form-data" method="post" action="index.php?page=edit_venue.php">
    		<label for="name">Venue name:</label>
    		<input type="text" id="name" name="name" value="<?php echo $name ?>"  /><br/>

                <input type="hidden" name="venue_id" value="<?php echo $venue_id ?>"  />

    		<label for="street_address">Street Address:</label>
    		<input type="text" id="street_address" name="street_address" value="<?php echo $street_address ?>"  /><br/>

    		<label for="city">City:</label>
    		<input type="text" id="city" name="city" value="<?php echo $city ?>"  /><br/>

    		<label for="state">State:</label>
    		<input type="text" id="state" name="state" value="<?php echo $state ?>"  /><br/>

    		<label for="about">Description:</label>
    		<textarea id="about" name="about"><?php echo $name ?></textarea><br/>

    		<label for="image">Select a Picture file:</label>
    		<input type="file" id="image" name="image" value="<?php echo $image ?>"  /><br/>

    		<input type="submit" value="Save Changes" name="submit"/>
		</form>
  	</div>

<br />
</td></tr>
</table>
