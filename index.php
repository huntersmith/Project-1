<?php

include("settings.php");

?>
<HTML>
<BODY bgcolor="<?php echo($background); ?>">
<CENTER>

<script language="JavaScript">
function hoveron(cell) {
  cell.style.background='<?php echo($hovercolor); ?>'
}
function hoveroff(cell) {
  cell.style.background='<?php echo($cellbg); ?>'
}
</script>

<table border="0" cellpadding="5" cellspacing="0" width="90%">

<tr><td colspan=2>

	<table border="1" bordercolor="white" cellpadding="5" cellspacing="0" width="100%">
	<tr bgcolor="<?php echo($cellbg); ?>"><td align="center">
		<font size="7" color="<?php echo($headingtext); ?>"><b>Site Title</b></font>
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

include("maintable.php");

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