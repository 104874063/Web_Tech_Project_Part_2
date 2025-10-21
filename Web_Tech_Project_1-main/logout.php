<?php
// Essentially all the logout.php file does is end the users session
// and redirect them to the login page.
session_start();
session_destroy();
header("Location: login.php");
exit();
?>