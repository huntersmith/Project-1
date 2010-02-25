	<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
	<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
		<font size="5" color="<?php echo($headingtext); ?>"><b>Band Search</b></font>
	</td></tr>
	<tr bgcolor="white"><td align="center">
		<font size="2" color="black"><b>Enter a band name to search:</b></font>
		<form action="artistSearch.php" method="post">
		<input type="text" name="searchband">
                <input name="submit" type="submit" value="Search">
		</form>
	</td></tr>
	</table>	

	<br />


	<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
	<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
		<font size="5" color="<?php echo($headingtext); ?>"><b>Venue Search</b></font>
	</td></tr>
	<tr bgcolor="white"><td align="center">
		<font size="2" color="black"><b>Enter a club name or zip code to search:</b></font>
		<form action="venue_display.php" method="post">
		<input type="text" name="venue_searchbox">
                <input name="submit" type="submit" value="Search">
		</form>
	</td></tr>
	</table>

