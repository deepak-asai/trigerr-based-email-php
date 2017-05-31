<?php
	session_start();
	unset($_SESSION["user_name"]);
	//unset($_SESSION["full_name"]);
	header("Location: login.php");
?>