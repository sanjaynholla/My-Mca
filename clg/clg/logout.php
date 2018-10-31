<?php
	session_start();
	unset($_SESSION["username"]);
	session_destroy();
	header("location:adlogin.php"); //to redirect back to "index.php" after logging out
?>
