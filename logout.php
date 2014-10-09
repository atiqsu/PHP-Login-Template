<?php

	session_start();
	unset($_SESSION['user_name']);
	unset($_SESSION['user_email']);
	unset($_SESSION['user_nick']);
	$_SESSION['message'] = "You have successfully logged out";
	$_SESSION['state'] = "invalid";
	header("Location: index.php");
?>