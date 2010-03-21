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
$about = $row['about'];
$shows = $row['shows'];
$band_members = $row['members'];
}
echo "Band Name: ".$name."<br>";
echo "Band Members: ".$band_members."<br>";
echo "Address: ".$street_address.", ".$city.", ".$state."<br>";
echo "Description: ".$about."<br>";

echo "<a href='index.php?page=band_editing.php&id=$id'>Edit this Band</a>";

//echo "<a href = 'band_editing.php?id=$id>Edit this Band</a>";
?>

<br />
</td></tr>
</table>
