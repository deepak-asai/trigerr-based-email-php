<?php 
	include("db.php");
	session_start();
	if(!isset($_SESSION["user_name"])) {
		header("Location:login.php");
	}
?>
<php>
	<a href="logout.php">logout</a>
	hiii

	<a href="rules/rule1.php">Rule1</a>
	<a href="rules/rule2.php">Rule2</a>
	<a href="rules/rule3.php">Rule3</a>
	<a href="rules/rule4.php">Rule4</a>
	<a href="rules/rule5.php">Rule5</a>
</php>