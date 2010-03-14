<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Create User</b></font>
</td></tr>
<tr bgcolor="white"><td align="center">

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

<br />
</td></tr>
</table>