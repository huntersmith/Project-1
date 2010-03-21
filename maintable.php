<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_featured.jpg">
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
	  $

	  echo "<a href = "">$name</a>";
	  echo "<br/><br/> $about";
	  echo "<br/><br/> <img src =\"$image\" style = \"width: 350px; height: 275 px;\"/><br/>";
           
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
	  echo "<br/><br/> <img src =\"$image\" style = \"width: 350px; height: 275 px;\"/><br/>";
           mysqli_close($db);
         ?>
	<br />
	</td></tr>
	</table>
