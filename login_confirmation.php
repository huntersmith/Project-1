<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Login</b></font>
</td></tr>
<tr bgcolor="white"><td align="center">

        <div id="contents">
        <?php
                include "db_connect.php";
                $name = $_POST['user_name'];
                $pw = $_POST['password'];

                $query = "select * from login WHERE username = '$name' AND password = '$pw';";
                $result = mysqli_query($db, $query)
                        or die("Error querying database.");

                $confirmation = mysqli_num_rows($result);

                if ($confirmation == 0){
                        echo "<p>Thanks for logging in, $name</p>\n";

                        echo "<p><a href='index.php'>Continue</a></p>";
                }else{
                        echo "<p>Incorrect username or password</p>\n";
                        echo  "<h1>Log In</h1>\n  <form method=\"post\" action=\"login.php\">";
                        echo "<label for=\"username\">Username:</label><input type=\"text\" id=\"username\" name=\"username\" /><br />";
                        echo "<label for=\"pw\">Password:</label><input type=\"password\" id=\"pw\" name=\"pw\" /><br />";
                        echo "<input type=\"submit\" value=\"Login\" name=\"submit\" /></form> <p><a href=\"create_user.php\">Create Account</a></p>";
                }
        ?>
        </div>

<br />
</td></tr>
</table>
