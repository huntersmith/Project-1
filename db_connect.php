<?php
	$db = @mysqli_connect('localhost', 'banduser', 'bands', 'bands');
if (!$db)
{
$url = 'install.php';
header("Location: $url");
}


$table = 'bandinfo';
	
?>