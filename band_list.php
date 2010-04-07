<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_bands.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">

<?php include "db_connect.php" ?>
<div id="contents">

<?php   

$query = "SELECT name, image, band_id FROM $table ORDER BY name";
  
  $result = mysqli_query($db, $query)
   or die("Error 1 Querying Database");

  while($row = mysqli_fetch_array($result)) {
  	$name = $row['name'];
      $image = $row['image'];
	$id = $row['band_id'];

      echo "<table style = \"width: 300px;\"/></>";
	echo "<tr><td><img src =\"$image\" style = \"width: 100px; height: 75px;\"/></td>";
  	echo "<td><a href='index.php?page=bandpage.php&id=$id'>$name</a></td></tr><br/>";
}
  
  mysqli_close($db);

?>

</table>
<br/>


</div>



<br />
</td></tr>
</table>
