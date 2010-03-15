<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Login</b></font>
</td></tr>
<tr bgcolor="white"><td align="center">

<script type="text/javascript" src="calendarDateInput.js"/>

	<div id="contents">
	<?php
  		include "db_connect.php";
  		$name = $_POST['username'];
  		$pw = $_POST['pw'];

   		$query = "select * from users WHERE username = '$name' AND password = '$pw'";
   		$result = mysqli_query($db, $query);

   		if ($row = mysqli_fetch_array($result)){
			echo "<p>Thanks for logging in, $name</p>\n";

                	echo "<p><a href=\"index.php?page=search.php\">Continue</a></p>";
   		}else{
                	echo "<p>Incorrect username or password</p>\n";
                	echo  "<h1>Log In</h1>\n  <form method=\"post\" action=\"login.php\">";
        		echo "<label for=\"username\">Username:</label><input type=\"text\" id=\"username\" name=\"username\" /><br />";
        		echo "<label for=\"pw\">Password:</label><input type=\"password\" id=\"pw\" name=\"pw\" /><br />";
        		echo "<input type=\"submit\" value=\"Login\" name=\"submit\" /></form> <p><a href=\"createAccount.php\">Create Account</a></p>";
    		}
	?>
	</div>

<br />
</td></tr>
</table>
