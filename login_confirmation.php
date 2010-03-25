<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_login.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">

        <div id="contents">
        <?php
                include "db_connect.php";
                $name = $_POST['user_name'];
                $pw = $_POST['password'];

                $query = "SELECT * FROM login WHERE username = '$name' AND password = SHA('$pw');";
                $result = mysqli_query($db, $query)
                        or die("Error querying database.");

                $confirmation = mysqli_num_rows($result);

                if ($confirmation == 0){
                        echo "<p>Incorrect username or password. Please try again by clicking the link below.</p>\n";

			echo "<p><a href='index.php?page=login.php'>Log In</a></p>";
                }else{

			$_SESSION['user_name'] = $name;
			$_SESSION['password'] = $pw;

			echo "<p>Thanks for logging in, {$_SESSION['user_name']}</p>\n";
			echo "<p><a href='index.php'>Continue</a></p>";
                }
        ?>
        </div>

<br />
</td></tr>
</table>
