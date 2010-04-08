<?php
include("mustlogin.php");
include "db_connect.php";
$errors = array(); 
//$venue_id = $_POST['venue_id'];
$venue_id = mysqli_real_escape_string($db, $_POST['venue_id']);
if (!is_numeric($venue_id) || strlen($venue_id)==0)
{
	$errors[] = "Invalid entry for venue Id.";
}
//$name = $_POST['name'];
$name = mysqli_real_escape_string($db, $_POST['name']);
if (strlen($name)==0)
{
	$errors[] = "Invalid entry for Name.";
}
//$street_address = $_POST['street_address'];
$street_address = mysqli_real_escape_string($db, $_POST['street_address']);
if (strlen($street_address)==0)
{
	$errors[] = "Invalid entry for Street Address.";
}
//$city = $_POST['city'];
$city = mysqli_real_escape_string($db, $_POST['city']);
if (strlen($city)==0)
{
	$errors[] = "Invalid entry for venue Id.";
}
//$state = $_POST['state'];
$state = mysqli_real_escape_string($db, $_POST['state']);
if (strlen($state)==0)
{
	$errors[] = "Invalid entry for State.";
}
//$image = $_POST['image'];
//$about = $_POST['about'];
$about = mysqli_real_escape_string($db, $_POST['about']);
if (strlen($about)==0)
{
	$errors[] = "Invalid entry for About.";
}

$filename = $_FILES['image']['name'];
if (strlen($filename)>0)
{
	$target ="$filename";
	move_uploaded_file($_FILES['image']['tmp_name'], $target);

}
else
{
	$query = "SELECT image FROM bandinfo WHERE band_id = '$band_id'";
	$result = mysqli_query($db, $query);
	$row = mysqli_fetch_array($result);
	$target = $row['image'];
}

if (sizeOf($errors)>0)
{
	// redirect
	header("Location: index.php?page=venue_editing.php&id=$venue_id&errors[]=".implode("&errors[]=", $errors));
	exit;
}
?>

<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_editvenue.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">

<?php
$query = "UPDATE venues
SET
name='$name',
street_address='$street_address',
city='$city',
state='$state',
image='$target',
about='$about'
WHERE venue_id='$venue_id';";

$result = mysqli_query($db, $query)
	or die("Error Querying Database");

echo "The new information is:";

$query = "SELECT * FROM venues WHERE venue_id='$venue_id';";
$result = mysqli_query($db, $query)
	or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$id = $row['venue_id'];
$name = $row['name'];
$street_address = $row['street_address'];
$city = $row['city'];
$state = $row['state'];
$about = $row['about'];
}

echo "Name: ".$name."<br>";
echo "Address: ".$street_address.", ".$city.", ".$state."<br>";
echo "Description: ".$about."<br>";
?>
<br />
</td></tr>
</table>
