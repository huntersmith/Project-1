<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Add An Event</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="contents">
  <h1>Add an Event</h1>

    <form enctype="multipart/form-data" method="post" action="test_event.php">
    <label for="name">Event name:</label>
    <input type="text" id="name" name="name" /><br />
    <label for="date">Date (yyyy/mm/dd):</label>
    <input type="date" id="date" name="date" /><br />
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
<label for="band2">Band 2:</label>
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
      
<br/>
   

    <input type="submit" value="Add Event" name="submit" />
  </form>
  </div>
</body>
</html>
