<?php
	include("dbconnect.php");

	for($i=1; $i<=100; $i++){
		$sql = "INSERT INTO `trig_email`.`login_details` (`userid`, `email_id`, `password`) VALUES ('user$i', 'user$i@gmail.com', 'user$i')";
		//echo $sql;
		$conn->query($sql);

	}
?>