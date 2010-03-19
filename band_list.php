<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Bands</b></font>
</td></tr>
<tr bgcolor="white"><td align="left">

<?php include "db_connect.php" ?>
<div id="contents">

<?php   

$query = "SELECT name, image, band_id FROM $table";
  
  $result = mysqli_query($db, $query)
   or die("Error 1 Querying Database");

  while($row = mysqli_fetch_array($result)) {
  	$name = $row['name'];
      $image = $row['image'];
	$id = $row['band_id'];

      echo "<table style = \"width: 300px;\"/></>";
	echo "<tr><td><img src =\"$image\" style = \"width: 100px; height: 75px;\"/></td>";
  	echo "<td><a href='bandpage.php?id=$id'>$name</a></td></tr><br/>";
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
