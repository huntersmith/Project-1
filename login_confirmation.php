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

                $query = "select * from login WHERE username = '$name' AND password = SHA('$pw');";
                $result = mysqli_query($db, $query)
                        or die("Error querying database.");

                $confirmation = mysqli_num_rows($result);

                if ($confirmation == 0){
                        echo "<p>Thanks for logging in, $name</p>\n";

                        echo "<p><a href='index.php'>Continue</a></p>";
                }else{
                        echo "<p>Incorrect username or password. Please try again by clicking the link below.</p>\n";
                        echo "<p><a href='index.php?page=login.php'>Log In</a></p>";
                }
        ?>
        </div>

<br />
</td></tr>
</table>
