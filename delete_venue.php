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
$venue_id = $_POST['venue_id'];

$query = "DELETE FROM bandinfo
WHERE
venue_id='$venue_id';";

$result = mysqli_query($db, $query)
or die("Error Querying Database");

echo "The band has been deleted.";

$query = "DELETE FROM records
WHERE
venue_id='$venue_id';";

$result = mysql0_query($db, $query)
or die("Error Querying Database");

echo "The records created by the band have been deleted.";
?>
<br />
</td></tr>
</table>
