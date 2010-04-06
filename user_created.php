<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Create User</b></font>
</td></tr>
<tr bgcolor="white"><td align="left">

<?php
	include "db_connect.php";

	$email = $_POST['email'];
	echo $email."</br>";	
	
	function ValidateMail($emailAddress_str) {
	$theMailAddress_str = $emailAddress_str;
	$openBracket_num = strpos($emailAddress_str, '<');
	$closeBracket_num = strpos($emailAddress_str, '>');

	// check, if mailaddress has an illegal combination of brackets
	if ( (($openBracket_num !== false) and ( $closeBracket_num === false )) or
	(($openBracket_num === false) and ( $closeBracket_num !== false)) ) {
	return false;
	}

	// check, if mailaddress has a name (e.g. 'John Smith <john@smith.com>')
	// if so, get the emailaddress within the brackets for further checks
	if (( $openBracket_num !== false ) and ( $closeBracket_num !== false )) {
	$theMailAddress_str = substr( $emailAddress_str, ++$openBracket_num, $closeBracket_num - $openBracket_num );
	}

	// we now check that there's exactly one @ symbol, and that the lengths are right
	if (!ereg("[^@]{1,64}@[^@]{1,255}", $theMailAddress_str)) {
	return false;
	}

	// Split it into sections to make life easier
	$email_array = explode("@", $theMailAddress_str);
	$local_array = explode(".", $email_array[0]);
	foreach ($local_array as $entry) {
	if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $entry)) {
	return false;
	}
	}

	if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
	$domain_array = explode(".", $email_array[1]);
	if (sizeof($domain_array) < 2) {
	return false; // Not enough parts to domain
	}
	foreach ($domain_array as $entry) {
	if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $entry)) {
	return false;
	}
	}
	}
	return true;
	}
	
	if (!ValidateMail($email)) {
	        echo $email . ' is not a valid email address.';
		exit();
		}


	$first_name = mysqli_real_escape_string($db, trim($_POST['first_name']));

	$last_name = mysqli_real_escape_string($db, trim($_POST['last_name']));

	$user_name = mysqli_real_escape_string($db, trim($_POST['user_name']));

	$email = mysqli_real_escape_string($db, trim($email));

	$password = mysqli_real_escape_string($db, trim($_POST['password']));


        $query = "SELECT * FROM login WHERE username = '$user_name';";
        $result = mysqli_query($db, $query)
		or die("Error querying database.");
	
	$confirmation = mysqli_num_rows($result);

        if ($confirmation == 0){
		$userInfo = "INSERT INTO login(username, password, firstname, lastname, email) VALUES ('$user_name', SHA('$password'), '$first_name', '$last_name', '$email');";
		$result = mysqli_query($db, $userInfo);
$new_user = true;
$url = 'index.php?page=login.php&new_user='.$new_user;
                   echo('<meta http-equiv="refresh" content="0;url='.$url.'">'); 
                   exit;
?>
<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Create User</b></font>
</td></tr>
<tr bgcolor="white"><td align="left">
<?php
        //	echo "<p>Your user name and password has been set. Please follow the shown link to log in.</p>";

                echo "<p><a href=\"index.php?page=login.php\">Continue</a></p>";
        }else{
                echo "<p>User name is already in use please choose another.</p>";
                echo  "<p><a href=\"index.php?page=create_user.php\">Continue</a></p>";
       	}
?>
<br />
</td></tr>
</table>
