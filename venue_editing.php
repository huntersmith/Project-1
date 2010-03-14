<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Venue Editing</b></font>
</td></tr>
<tr bgcolor="white"><td align="center">

	<div id="contents">
		<?php
                        include "db_connect.php";
                        $band_id = $_GET['id'];

                        $query = "Select * FROM bands WHERE id = '$band_id';"
                        $result = mysqli_query($db, $query);
                        $name = $row['name'];
                        $street_address = $row['street_address'];
                        $city = $row['city'];
                        $state = $row['state'];
                        $image = $row['image'];
                        $about = $row['about'];
                ?>

  		<h1>Venue To Edit</h1>

    		<label for="name">Venue name:</label>
    		<input type="text" id="name" name="name" value=$name /><br/>

    		<label for="street_address">Street Address:</label>
    		<input type="text" id="street_address" name="street_address" value=$street_address/><br/>

    		<label for="city">City:</label>
    		<input type="text" id="city" name="city" value=$city /><br/>

    		<label for="state">State:</label>
    		<input type="text" id="state" name="state" value=$state /><br/>

    		<label for="about">Description:</label>
    		<textarea id="about" name="about">$about</textarea><br/>

    		<label for="image">Select a Picture file:</label>
    		<input type="file" id="image" name="image" value=$image /><br/>

    		<input type="submit" value="Save Changes" name="submit"/>
  	</div>

<br />
</td></tr>
</table>