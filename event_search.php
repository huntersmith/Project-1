<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_esearchres.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">

<?php 
include "db_connect.php"; 

echo("<table border=0>");

	$event = mysqli_real_escape_string($db, trim($_POST['searchevent'])); 
	$query = "SELECT * FROM events WHERE 
		name LIKE '%$event%' ORDER BY name;";

	$result = mysqli_query($db, $query) 
		or die("Error Querying Database"); 

$countrows = mysqli_num_rows($result);
if ($countrows == 0) {
	echo "<h1>No results matched your search!</h1>";
} else {

echo "<table boarder =1>";  

	while($row = mysqli_fetch_array($result)) {
		$id = $row['event_id'];
		$name = $row['name'];
		$date = $row['date'];
		$time = $row['time'];
		
echo "
<b><h1><font color = 'blue'><a href='index.php?page=eventpage.php&id=$id'>$name</a></font><h1></a></h1></b>
<tr>
<p><font size = '5'><b>Date: </b></font>$date </p>
<p><font size = '5'><b>Time: </b></font>$time </p>
<br><br>
</tr>\n"; 
}
}
echo "</table>";

mysqli_close($db); 
?>

<br />
</td></tr>
</table>
