<?php

session_destroy();

echo('<meta http-equiv="refresh" content="0;url='.$_SERVER['HTTP_REFERER'].'">');

exit;
?>