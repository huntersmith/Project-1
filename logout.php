<?php
//session destroy
session_destroy();

header("Location: {$_SERVER['HTTP_REFERER']}"); /* Redirect browser */

/* Make sure that code below does not get executed when redirect. */
exit;
?>