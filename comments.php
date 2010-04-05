<?php
echo "<br><P ALIGN = 'left'><font size = '5'><b><font color = 'blue'>Comments:</font></font></P>";
	$band_id = $_GET['id'];
if ($_POST["comment"])
{
	$comment=$_POST["comment"];
	echo "</br>Thank you for your comment!";

        include "db_connect.php";
        
	$query = "INSERT INTO comments(band_id, comment)
			VALUES ($band_id, '$comment');";
	//echo $query;
        $result = mysqli_query($db, $query)
		or die("Error querying database.");
}

?>

<html>
<table border="1" bordercolor="white" cellpadding="0" cellspacing="0" width="100%">
<tr bgcolor="white"><td align="center">
</td></tr>
<tr bgcolor="white"><td align="center">

<div id="contents">
<?php
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

	$query = "SELECT comment FROM comments WHERE band_id = '$band_id';";
        $result = mysqli_query($db, $query)
		or die("Error querying database.");
	while($row = mysqli_fetch_array($result)) {
		$comment = $row['comment']; 
		echo "</br>".$comment;
	}
?>


<form enctype="multipart/form-data" method="post" action="<?php $url?>">
    <textarea name="comment" cols=40 rows=5>Please enter your comment here</textarea>
    </br>
    <input type="submit" value="submit" name="Comment" />
  </form>
  </div>
</td></tr>
</table>
</html>
