<?php
include("mustlogin.php");
?>
<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
<img border="0" src="title_addvenue.jpg">
</td></tr>
<tr bgcolor="white"><td align="center">

<div id="contents">

    <form enctype="multipart/form-data" method="post" action="index.php?page=test_venue.php">
    <label for="name">Venue name:</label>
    <input type="text" id="name" name="name" /><br />
    <label for="street_address">Street Address:</label>
    <input type="text" id="street_address" name="street_address" /><br />
    <label for="city">City:</label>
    <input type="text" id="city" name="city" /><br />
    <label for="state">State:</label>
    <input type="text" id="state" name="state" /><br />
    <label for="about">Description:</label>
    <textarea id="about" name="about"></textarea><br />
    <label for="image">Select a Picture file:</label>
    <input type="file" id="image" name="image"  /><br />
    
    <input type="submit" value="Add Venue" name="submit" />
  </form>
  </div>

<br />
</td></tr>
</table>