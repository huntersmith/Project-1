<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Venues</b></font>
</td></tr>
<tr bgcolor="white"><td align="left">

<?php include "db_connect.php" ?>

<?php   

$query = "SELECT name, image, venue_id FROM venues";
  
  $result = mysqli_query($db, $query)
   or die("Error 1 Querying Database");

  while($row = mysqli_fetch_array($result)) {
  	$name = $row['name'];
      $image = $row['image'];
	$id = $row['venue_id'];

      echo "<table style = \"width: 300px;\"/></>";
	echo "<tr><td><img src =\"$image\" style = \"width: 100px; height: 75px;\"/></td>";
  	echo "<td><a href='index.php?page=venuepage.php&id=$id'>$name</a></td></tr><br/>";
}
  
  mysqli_close($db);

?>
</table>
<br/>


<br />
</td></tr>
</table>
