<?php
include("mustlogin.php");
?>
<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_editband.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">

<?php
include "db_connect.php"; 
$venue_id = $_GET['id'];

$query = "DELETE FROM venues
WHERE
venue_id='$venue_id';";

$result = mysqli_query($db, $query)
or die("Error Querying Database");

echo "The venue has been deleted.";

$query = "DELETE FROM events
WHERE
venue_id='$venue_id';";

$result = mysqli_query($db, $query)
or die("Error Querying Database");

echo "</br>The events held in this venue have been deleted.";

?>
</td></tr>
</table>
