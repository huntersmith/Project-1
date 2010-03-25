	<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
	<tr bgcolor="white"><td align="center">
		<img border="0" src="title_bsearch.jpg">
	</td></tr>
	<tr bgcolor="white"><td align="center">
		<font size="2" color="black"><b>Enter a band name to search:</b></font>
		<form action="index.php?page=artistSearch.php" method="post">
		<input type="text" name="searchband" value = "Enter band..." onFocus="if (value == 'Enter band...') {value=''}" onBlur="if (value== '') {value='Enter band...'}">
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
		<input type="text" name="venue_searchbox" value = "Enter venue..." onFocus="if (value == 'Enter venue...') {value=''}" onBlur="if (value== '') {value='Enter venue...'}">
                <input name="submit" type="submit" value="Search">
		</form>
	</td></tr>
	</table>

	<br />


	<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
	<tr bgcolor="white"><td align="center">
		<img border="0" src="title_esearch.jpg">
	</td></tr>
	<tr bgcolor="white"><td align="center">
		<font size="2" color="black"><b>Enter an event to search:</b></font>
		<form action="index.php?page=event_search.php" method="post">
		<input type="text" name="searchevent" value = "Enter event..." onFocus="if (value == 'Enter event...') {value=''}" onBlur="if (value== '') {value='Enter event...'}">
                <input name="submit" type="submit" value="Search">
		</form>
	</td></tr>
	</table>