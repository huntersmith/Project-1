<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Venue Editing</b></font>
</td></tr>
<tr bgcolor="white"><td align="center">

	<div id="contents">
		<?php
                        include "db_connect.php";
                        $venue_id = $_GET['id'];

                        $query = "Select * FROM venues WHERE id = '$venue_id';"
                        $result = mysqli_query($db, $query);
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
                                $about = $row['about'];
                                echo "$about \n";
                        }
                ?>

  		<h1>Venue To Edit</h1>

    		<label for="name">Venue name:</label>
    		<input type="text" id="name" name="name" value="<?php echo $name ?>"  /><br/>

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
  	</div>

<br />
</td></tr>
</table>