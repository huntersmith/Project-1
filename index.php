<?php

session_start();
include("settings.php");
include "db_connect.php";

function buildnav($number,$link) {
	$navoutput = "<td height=\"30\" width=\"150\" onclick=\"window.location.href='".$link."'\" onMouseOver=\"this.style.background='url(nav".$number."b.jpg)'\" onMouseOut=\"this.style.background='url(nav".$number."a.jpg)'\" background=\"nav".$number."a.jpg\" align=\"center\"></td>";
	return $navoutput;
}

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

<table border="0" cellpadding="0" cellspacing="0" width="750">

<tr><td colspan="3">

	<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="750">
	<tr><td align="center">
		<img src="header.jpg" border="0" width="750" height="200">
	</td></tr>
	</table>


<table border="1" bordercolor="white" cellpadding="0" cellspacing="0">
<tr><td>
	<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr">
	<?php
	echo(buildnav(1, "index.php"));
	echo(buildnav(2, "index.php?page=band_list.php"));
	echo(buildnav(3, "index.php?page=band_entry.html"));
	echo(buildnav(4, "index.php?page=venue_entry.html"));
	echo(buildnav(5, "index.php?page=event_entry.php"));
	echo '<a href = "index.php?page=venue_list.php">Venues</a>';
	echo '<a href = "index.php?page=event_list.php">Events</a>';

	?>
	</tr>
	</table>
</td></tr>
</table>

</td></tr>

<tr><td colspan="3" align="right">
<?php
if(isset($_SESSION['user_name'])) {
?>
<a href="index.php?page=logout.php"><font size="2" color="white"><b>Logout</b></font></a>
<?php
} else {
?>
<a href="index.php?page=login.php"><font size="2" color="white"><b>Login</b></font></a>
<font size="2" color="white">|</font>
<a href="index.php?page=create_user.php"><font size="2" color="white"><b>New User</b></font></a>
<?php } ?>
<br /><br />
</td></tr>

<tr><td width="525" align="left" valign="top">

<?php

if(isset($_GET['page']) && $_GET['page'] != "" && $_GET['page'] != "index.php") {
	$pagename = $_GET['page'];
	if(file_exists(dirname($_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF'])."/".$pagename)) {
		include($pagename);
	} else {
		echo("<table border=\"1\" bordercolor=\"white\" cellpadding=\"5\" cellspacing=\"0\" width=\"100%\">
			<tr bgcolor=\"white\"><td align=\"center\">
			<p><b>Page Not Found</b></p>
			<br />
			</td></tr>
			</table>");
	}
} else {
	include("maintable.php");
}
?>

</td>

<td width="15">&nbsp;</td>

<td width="210" align="right" valign="top">

<?php
include("searchbar.php");
?>
</td></tr>

</table>


</CENTER>
</BODY>
</HTML>
