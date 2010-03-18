<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Login</b></font>
</td></tr>
<tr bgcolor="white"><td align="center">

	<div id="contents">
		<form enctype="multipart/form-data" method="post" action="index.php?page=login_confirmation.php">
                
		<label for="user_name">User Name:</label>
                <input type="text" id="user_name" name="user_name" /><br/>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" /><br />

                <input type="submit" value="Login" name="submit" />
                </form>		
	</div>

<br />
</td></tr>
</table>
