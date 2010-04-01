<?php

if(!isset($_SESSION['user_name'])) {

echo('<meta http-equiv="refresh" content="0;url=index.php?page=login.php">');
exit;

}

?>