<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Created</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="wrap">
<div id="main">
<?php
	include "db_connect.php";
	
	$first_name = mysqli_real_escape_string($db, trim($_POST['first_name']));

	$last_name = mysqli_real_escape_string($db, trim($_POST['last_name']));

	$user_name = mysqli_real_escape_string($db, trim($_POST['user_name']));

	$email = mysqli_real_escape_string($db, trim($_POST['email']));

	$password = mysqli_real_escape_string($db, trim($_POST['password']));


        $query = "SELECT * FROM login WHERE username = '$user_name';";
        $result = mysqli_query($db, $query)
		or die("Error querying database.");
	
	$confirmation = mysqli_num_rows($result);

        if ($confirmation == 0){
		$userInfo = "INSERT INTO login(username, password, firstname, lastname, email) VALUES ('$user_name', SHA('$password'), '$first_name', '$last_name', '$email');";
		$result = mysqli_query($db, $userInfo);
$url = 'index.php?page=login.php?new_user=yes';
                   header("Location: $url"); 
        //	echo "<p>Your user name and password has been set. Please follow the shown link to log in.</p>";

                echo "<p><a href=\"index.php?page=login.php\">Continue</a></p>";
        }else{
                echo "<p>User name is already in use please choose another.</p>";
                echo  "<p><a href=\"create_user.php\">Continue</a></p>";
       	}
?>
</div>
</body>
</html>
