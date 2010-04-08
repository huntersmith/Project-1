<?php
include("mustlogin.php");
include "db_connect.php"; 
$errors = array();
//$band_id = $_POST['band_id'];
$band_id = mysqli_real_escape_string($db, $_POST['band_id']);
if (!is_numeric($band_id) || strlen($band_id)==0)
{
	$errors[] = "Invalid entry for band Id.";
}
//$name = $_POST['name'];
$name = mysqli_real_escape_string($db, $_POST['name']);
if (strlen($name)==0)
{
	$errors[] = "Invalid entry for name.";
}
//$street_address = $_POST['street_address'];
$street_address = mysqli_real_escape_string($db, $_POST['street_address']);
if (strlen($street_address)==0)
{
	$errors[] = "Invalid entry for street address.";
}
//$city = $_POST['city'];
$city = mysqli_real_escape_string($db, $_POST['city']);
if (strlen($city)==0)
{
	$errors[] = "Invalid entry for city.";
}
//$state = $_POST['state'];
$state = mysqli_real_escape_string($db, $_POST['state']);
if (strlen($state)==0)
{
	$errors[] = "Invalid entry for state.";
}
/*$image = $_POST['image'];
$image = mysqli_real_escape_string($db, $_POST['image']);
if (strlen($image)==0)
{
	$errors[] = "Invalid entry for image.";
}*/
//$genre = $_POST['genre'];
$genre = mysqli_real_escape_string($db, $_POST['genre']);
if (strlen($genre)==0)
{
	$errors[] = "Invalid entry for genre.";
}
//$about = $_POST['about'];
$about = mysqli_real_escape_string($db, $_POST['about']);
if (strlen($about)==0)
{
	$errors[] = "Invalid entry for about.";
}
//$members = $_POST['band_members'];
$members = mysqli_real_escape_string($db, $_POST['band_members']);
if (strlen($members)==0)
{
	$errors[] = "Invalid entry for band members.";
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
	header("Location: index.php?page=band_editing.php&id=$band_id&errors[]=".implode("&errors[]=", $errors));
	exit;
}
?>

<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_editband.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">

<?php
$query = "UPDATE bandinfo
SET
name='$name',
street_address='$street_address',
city='$city',
state='$state',
image='$target',
genre='$genre',
about='$about',
members='$members'
WHERE band_id='$band_id';";

$result = mysqli_query($db, $query)
or die("Error Querying Database");

echo "The new information is:";

$query = "SELECT * FROM bandinfo WHERE band_id='$band_id';";
$result = mysqli_query($db, $query)
	or die("Error Querying Database");

while($row = mysqli_fetch_array($result)) {
$id = $row['band_id'];
$name = $row['name'];
$street_address = $row['street_address'];
$city = $row['city'];
$state = $row['state'];
$about = $row['about'];
$band_members = $row['members'];
}

echo "Band Name: ".$name."<br>";
echo "Band Members: ".$band_members."<br>";
echo "Address: ".$street_address.", ".$city.", ".$state."<br>";
echo "Description: ".$about."<br>";
?>
<br />
</td></tr>
</table>
