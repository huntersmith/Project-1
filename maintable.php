	<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
	<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
		<font size="5" color="<?php echo($headingtext); ?>"><b>Featured Band</b></font>
	</td></tr>
	<tr bgcolor="white"><td align="center">
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
           mysqli_close($db);
         ?>
	<br />
	</td></tr>
	</table>