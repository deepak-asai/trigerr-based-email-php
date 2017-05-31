<?php 
session_start();
include("../dbconnect.php");
if(isset($_POST['timeSpent']) ){
	$time = $_POST['timeSpent'];
	$rule = $_POST['rule'];
	$sql = "INSERT INTO $dbname.logs (userid, email_id, rule, date, time) VALUES ('".$_SESSION["user_name"]."', '".$_SESSION["email_id"]."','". $rule."', CURDATE(),'$time')";

	$conn->query($sql);
	/*
	if ($conn->query($sql) === TRUE) {
	    //echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}*/


}

?>