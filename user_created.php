<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Create User</b></font>
</td></tr>
<tr bgcolor="white"><td align="left">

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
$new_user = true;
$url = 'index.php?page=login.php?new_user=$new_user';
                   header("Location: $url"); 
        //	echo "<p>Your user name and password has been set. Please follow the shown link to log in.</p>";

                echo "<p><a href=\"index.php?page=login.php\">Continue</a></p>";
        }else{
                echo "<p>User name is already in use please choose another.</p>";
                echo  "<p><a href=\"create_user.php\">Continue</a></p>";
       	}
?>
<br />
</td></tr>
</table>
