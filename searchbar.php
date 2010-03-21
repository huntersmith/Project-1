	<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
	<tr bgcolor="white"><td align="center">
		<img border="0" src="title_bsearch.jpg">
	</td></tr>
	<tr bgcolor="white"><td align="center">
		<font size="2" color="black"><b>Enter a band name to search:</b></font>
		<form action="index.php?page=artistSearch.php" method="post">
		<input type="text" name="searchband" value = "Enter band..." onfocus = "this.value">
                <input name="submit" type="submit" value="Search">
		</form>
	</td></tr>
	</table>	

	<br />


	<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
	<tr bgcolor="white"><td align="center">
		<img border="0" src="title_vsearch.jpg">
	</td></tr>
	<tr bgcolor="white"><td align="center">
		<font size="2" color="black"><b>Enter a club name or zip code to search:</b></font>
		<form action="index.php?page=venue_display.php" method="post">
		<input type="text" name="venue_searchbox" value = "Enter venue..." onfocus = "this.value">
                <input name="submit" type="submit" value="Search">
		</form>
	</td></tr>
	</table>

	<br />


	<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
	<tr bgcolor="white"><td align="center">
		<img border="0" src="title_vsearch.jpg">
	</td></tr>
	<tr bgcolor="white"><td align="center">
		<font size="2" color="black"><b>Enter an event to search:</b></font>
		<form action="index.php?page=eventSearch.php" method="post">
		<input type="text" name="searchevent" value = "Enter event..." onfocus = "this.value">
                <input name="submit" type="submit" value="Search">
		</form>
	</td></tr>
	</table>