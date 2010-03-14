         <?php
	  $query = "SELECT * FROM $table ORDER BY RAND() LIMIT 1";
	  $result = mysqli_query($db, $query)
   		or die("Error Querying Database");
	  $row = mysqli_fetch_array($result);
	  $name = $row['name'];
	  $about = $row['about'];
	  $image = $row['image'];

	  echo "$name";
	  echo "<br/><br/> $about";
	  echo "<br/><br/> <img src =\"$image\" style = \"width: 350px; height: 275 px;\"/>\n";
           
         ?>
	<br />
		<font size="5" color="<?php echo($headingtext); ?>"><b>Featured Venue</b><br/></font>
         <?php
	  $query = "SELECT * FROM venues ORDER BY RAND() LIMIT 1";
	  $result = mysqli_query($db, $query);
   	  if(!$result) { echo(mysqli_error()); }
	  $row = mysqli_fetch_array($result);
	  $name = $row['name'];
	  $about = $row['about'];
	  $image = $row['image'];

	  echo "$name";
	  echo "<br/><br/> $about";
	  echo "<br/><br/> <img src =\"$image\" style = \"width: 350px; height: 275 px;\"/>\n";
           mysqli_close($db);
         ?>