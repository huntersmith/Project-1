<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Events</b></font>
</td></tr>
<tr bgcolor="white"><td align="left">

<?php include "db_connect.php" ?>
<div id="contents">

<?php   

$query = "SELECT name, date, time, event_id FROM events";
  
  $result = mysqli_query($db, $query)
   or die("Error 1 Querying Database");

  while($row = mysqli_fetch_array($result)) {
  	$name = $row['name'];
      $date = $row['date'];
	$time = $row['time'];
	$id = $row['event_id'];

      echo "<table style = \"width: 300px;\"/></>";
  	echo "<td><a href='eventpage.php?id=$id'>$name</a></td></tr><br/>";
	echo "<tr><td>$date</td>";
	echo "<tr><td>$time</td>";
}
  
  mysqli_close($db);

?>

<br/>


</div>



<br />
</td></tr>
</table>
<br />
<br />
<a href='index.php'>Back to Main Page</a>