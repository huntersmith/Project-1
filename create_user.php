<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login Information</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="contents">
  		<h1>Create Your Login</h1>

    		<label for="first_name">First Name:</label>
    		<input type="text" id="first_name" name="first_name"/><br/>

    		<label for="last_name">Last  Name:</label>
    		<input type="text" id="last_name" name="last_name"/><br/>

    		<label for="user_name">Login Name:</label>
    		<input type="text" id="user_name" name="name"/><br/>

    		<label for="email">Email Address:</label>
    		<input type="text" id="email" name="email"/><br/>
    
    		<label for="password">Password:</label>
    		<input type="text" id="password" name="password"/><br/>

    		<input type="submit" value="Create User" name="submit"/>
		$userInfo = "INSERT INTO name_of_table(first_name, last_name, user_name, email, password) VALUES ('first_name', 'last_name', 'user_name', 'password');"
                        
                insert line to add information to table in database.
		<?php
                	include "db_connect.php";
                	$userInfo = "INSERT INTO name_of_table(first_name, last_name, user_name, email, password) VALUES ('first_name', 'last_name', 'user_name', 'password');"
			$confirmation = 'user_name';
                	insert line to add information to table in database.

                	$query = "SELECT * FROM users WHERE user_name = '$confirmation'";
                	$result = mysqli_query($db, $query);

                	if ($confirmation = mysqli_fetch_array($result)){
                        	echo "<p>Your user name and password has been set. Please follow the shown link to log in.</p>\n";

                        	echo "<p><a href=\"login.php\">Continue</a></p>";
                	}else{
                        	echo "<p>User name is already in use please choose another.</p>\n";
                        	echo  "<p><a href=\"create_user.php\">Continue</a></p>";
                	}
        	?>
	</div>
</body>

</html>