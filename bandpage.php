<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Band Page</b></font>
</td></tr>
<tr bgcolor="white"><td align="center">

<?php

$_GET['id'];

include "db_connect.php";

$band = $_GET['id'];
$query = "SELECT * FROM bandinfo WHERE
band_id = $band;";
 
$result = mysqli_query($db, $query)
or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$id = $row['band_id'];
$name = $row['name'];
$street_address = $row['street_address'];
$city = $row['city'];
$state = $row['state'];
$image = $row['image'];
$genre = $row['genre'];
$band_members = $row['members'];
}
echo "<br><br><img src =\"$image\" style = \"width: 350px; height: 275 px;\"/><br/>";
echo "<br><P ALIGN = 'left'><font size = '5'><b><font color = 'blue'>Band Name: </b></font></font>".$name."</P>";
echo "<P ALIGN = 'left'><font size = '5'><b><font color = 'blue'>Band Members: </b></font></font>".$band_members."</P>";
echo "<P ALIGN = 'left'><font size = '5'><b><font color = 'blue'>Address: </b></font></font>".$street_address.", ".$city.", ".$state."</P>";
echo "<P ALIGN = 'left'><font size = '5'><b><font color = 'blue'>Genres: </b></font></font>".$genre."</P>";

echo "<a href='band_editing.php?id=$id'><font color = 'green'><h2><b>>>Edit this Band<<</b></h2></font></a>";

?>

<br />
</td></tr>
</table>
