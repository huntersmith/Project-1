<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
<font size="5" color="<?php echo($headingtext); ?>"><b>Create User</b></font>
</td></tr>
<tr bgcolor="white"><td align="center">

<body>
	<div id="contents">
		<form enctype="multipart/form-data" method="post" action="index.php?page=user_created.php">
    		<label for="first_name">First Name:</label>
    		<input type="text" id="first_name" name="first_name"/><br/>

    		<label for="last_name">Last  Name:</label>
    		<input type="text" id="last_name" name="last_name"/><br/>

    		<label for="user_name">Login Name:</label>
    		<input type="text" id="user_name" name="user_name"/><br/>

    		<label for="email">Email Address:</label>
    		<input type="text" id="email" name="email"/><br/>
    
    		<label for="password">Password:</label>
    		<input type="password" id="password" name="password"/><br/>

    		<input type="submit" value="Create User" name="submit" />
		</form>
	</div>

<br />
</td></tr>
</table>
