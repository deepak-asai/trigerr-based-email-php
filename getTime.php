<?php 


if(isset($_POST['timeSpent']) ){


	$servername = "localhost";
	$username = "root";
	$password = "deep411ak";
	$dbname = "trig_email";
	$time = $_POST['timeSpent'];
	//echo "hello";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);


	// Check connection
	if (!$conn) {
	  //  echo "Connection failed: " . mysqli_connect_error();
	 }
	

	$sql = "INSERT INTO logs (time) VALUES ($time)";

	$conn->query($sql);
	/*
	if ($conn->query($sql) === TRUE) {
	    //echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}*/


}

?>