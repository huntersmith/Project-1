<?php

session_start();
include("settings.php");

?>
<HTML>

<style  TYPE="text/css">
    BODY {
	Background-color: #000000;
	background-image: url(bgimage.jpg);
	background-repeat: repeat-x; 
	background-position: top;
}
</style>

<BODY>
<CENTER>

<script language="JavaScript">
function hoveron(cell) {
  cell.style.background='<?php echo($hovercolor); ?>'
}
function hoveroff(cell) {
  cell.style.background='<?php echo($cellbg); ?>'
}
</script>

<table border="0" cellpadding="0" cellspacing="0" width="650">

<tr><td colspan=2>

	<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="650">
	<tr><td align="center">
		<img src="header.jpg" border="0" width="650" height="200">
	</td></tr>
	</table>

	<table border="1" bordercolor="white" cellpadding="3" cellspacing="5" width="100%">
	<tr bgcolor="<?php echo($cellbg); ?>"><td onMouseOver="hoveron(this)" onMouseOut="hoveroff(this)" align="center"><font size="2" color="<?php echo($headingtext); ?>">Home</td>
	<td onMouseOver="hoveron(this)" onMouseOut="hoveroff(this)" align="center"><font size="2" color="<?php echo($headingtext); ?>">Bands</td>
	<td onMouseOver="hoveron(this)" onMouseOut="hoveroff(this)" align="center"><font size="2" color="<?php echo($headingtext); ?>"><a href = "band_entry.html">Add Your Band</a></td>
	<td onMouseOver="hoveron(this)" onMouseOut="hoveroff(this)" align="center"><font size="2" color="<?php echo($headingtext); ?>"><a href = "venue_entry.html">Add a Venue</a></td>
	<td onMouseOver="hoveron(this)" onMouseOut="hoveroff(this)" align="center"><font size="2" color="<?php echo($headingtext); ?>"><a href = "event_entry.php">Add an Event</a></td></tr>
	</table>

</td></tr>

<tr><td width="70%" align="left" valign="top">

<?php

if(isset($_GET['page']) && $_GET['page'] != "") {
	$pagename = $_GET['page'];
	if(file_exists(dirname($_SERVER['PHP_SELF'])."/".$pagename)) {
		include($pagename);
	} else {
		echo("<p><b>Page Not Found</b></p>");
	}
} else {
	include("maintable.php");
}
?>
</td>
<td width="30%" align="right" valign="top">

<?php
include("searchbar.php");
?>
</td></tr>

</table>


</CENTER>
</BODY>
</HTML>