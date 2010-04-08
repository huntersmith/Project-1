<?php
include("mustlogin.php");
?>

<script type="text/javascript" src="datepickercontrol.js"></script>
<link type="text/css" rel="stylesheet" href="datepickercontrol.css">

<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_addevent.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">

<div id="contents">

		<?php
			if (isset($_GET['errors']) && is_array($_GET['errors']))
			{
				foreach($_GET['errors'] as $error)
				{
					echo '<div>'.htmlentities($error).'</div>';
				}
			}
			?>

    <form enctype="multipart/form-data" method="post" action="index.php?page=test_event.php">
    <label for="name">Event name:</label>
    <input type="text" id="name" name="name" /><br />
    <label for="date">Date (yyyy/mm/dd):</label>
    <input name="date" type="text" id="DPC_date_YYYY-MM-DD" value="" width="80"><br />
    <label for="time">Time:</label>
    <input type="text" id="time" name="time" /><br />

    <label for="venue">Venue:</label>
    <select name = "venue">
	<?php
	  include "db_connect.php";

	  $query = "SELECT DISTINCT name FROM venues";
	  $result = mysqli_query($db, $query)
			or die("Error Querying Database");
	
	  while($row = mysqli_fetch_array($result))
        {
  	     $name = $row['name'];
  	     echo "<option>$name</option>";
        }
	?>
    </select>
<br/>
    <label for="band1">Band 1:</label>
    <select name = "band1">
	<?php
	  $query = "SELECT DISTINCT name FROM bandinfo";
	  $result = mysqli_query($db, $query)
			or die("Error Querying Database");
	
	  while($row = mysqli_fetch_array($result))
        {
  	     $name = $row['name'];
  	     echo "<option>$name</option>";
        }
       ?>
</select>
<br />
<!--<label for="band2">Band 2:</label>
    <select name = "band2">
	<option>None</option>
	<?php
	  $query = "SELECT DISTINCT name FROM bandinfo";
	  $result = mysqli_query($db, $query)
			or die("Error Querying Database");
	
	  while($row = mysqli_fetch_array($result))
        {
  	     $name = $row['name'];
		
  	     		echo "<option>$name</option>";
		
        }
  ?>
</select>
<br />
    <label for="band3">Band 3:</label>
    <select name = "band3">
	<option>None</option>
	<?php
	  $query = "SELECT DISTINCT name FROM bandinfo";
	  $result = mysqli_query($db, $query)
			or die("Error Querying Database");
	
	  while($row = mysqli_fetch_array($result))
        {
  	     $name = $row['name'];
  	     echo "<option>$name</option>";
        }
      mysqli_close($db);
     ?>
</select>
      -->
<br/>
   

    <input type="submit" value="Add Event" name="submit" />
  </form>
  </div>

<br />
</td></tr>
</table>