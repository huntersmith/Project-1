<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_events.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">

<?php include "db_connect.php" ?>

<?php   

$query = "SELECT name, date, time, event_id FROM events ORDER BY date";
  
  $result = mysqli_query($db, $query)
   or die("Error 1 Querying Database");

  while($row = mysqli_fetch_array($result)) {
  	$name = $row['name'];
      $date = $row['date'];
	$time = $row['time'];
	$id = $row['event_id'];

      echo "<table style = \"width: 300px;\"/></>";
  	echo "<td><a href='index.php?page=eventpage.php&id=$id'>$name</a></td></tr><br/>";
	echo "<tr><td>$date</td>";
	echo "<tr><td>$time</td>";
}
  
  mysqli_close($db);

?>
</table>
<br/>


<br />
</td></tr>
</table>
