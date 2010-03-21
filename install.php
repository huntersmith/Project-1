<?php
if(isset($_POST['create']))
{
$root = $_POST['root'];
$pw = $_POST['pw'];
$db = mysqli_connect('localhost',$root,$pw);
if(!$db)
die('Connect Error, did you enter the right information?');
mysqli_multi_query($db,"DROP DATABASE IF EXISTS bands; CREATE DATABASE IF NOT EXISTS bands;");
$db = mysqli_connect('localhost',$root,$pw,'bands');
mysqli_multi_query($db,file_get_contents("dbsetup.sql"));
//$url = 'index.php';
//header("Location: $url");
}
else
{
?>
<html>
<head>
<title> Band Set up page </title>
</head>
<body>
<form method="post" action="install.php">
Enter the information for your mysql database server.
<br>
Enter Root Name: <input type="text" name="root">
<br>
Enter Root Password: <input type="password" name="pw">
<br>
<input type="submit" name="create" value="Create DB">
</form>
</body>
</html>
<?php
}
?>
?>
