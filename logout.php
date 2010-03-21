<?php
//session destroy

header("Location: {$_SERVER['HTTP_REFERER']}"); /* Redirect browser */

session_destroy();

/* Make sure that code below does not get executed when redirect. */
exit;
?>