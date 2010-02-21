	<div id="sidebar">
	<form method="post" action="artistSearch.php">
		<p><b>Search by Band:</b></p>
		<input type="text" id="searchbox" name="searchbox" />
		<input type="submit" value="Find Band" name="submit" />
	</form>
	
	<p class="side"><b>Featured Band:</b><br />
	<?php
		include "db_connect.php";
		$query = "SELECT name, band_members FROM bandInfo ORDER BY RAND() LIMIT 1";
		$result = mysqli_query($db, $query)
			or die("Error Querying Database");
		while($row = mysqli_fetch_array($result)) {
			$name = $row['name'];
			$band_members = $row['band_members'];		  }
		echo "<p>$name</p>";
		echo "<br/><p><i>Band members: $band_members</i></p>";
	?>
	
	</div>