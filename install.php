<?php
if(isset($_POST['create']))
{
$db = mysqli_connect('localhost', 'banduser', 'bands');
if(!$db)
die('Connect Error, did you enter the right information?');
mysqli_query($db,"DROP DATABASE IF EXISTS bands; CREATE DATABASE IF NOT EXISTS bands;");
$db = mysqli_connect('localhost', 'banduser', 'bands', 'bands');
mysqli_multi_query($db,mysqli_escape_string(file_get_contents("dbsetup.sql")));
$url = 'index.php';
header("Location: $url");
//echo "success";
}
?>