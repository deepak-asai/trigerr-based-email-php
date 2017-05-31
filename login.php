 <?php
	session_start();
	
	$message="";
	//echo "hellllllllo";
	if(count($_POST)>0) {
		include("dbconnect.php");
		//echo "Connected successfully";
		$valid=0;
		$sql_select = "SELECT * FROM $dbname.login_details where userid ='".$_POST["user_name"]."';";
		$data = $conn->query($sql_select);
		$row = $data-> fetch_assoc();	
		if($row["password"] == $_POST["pwd"]){
			$valid=1;
			//$_SESSION["user_id"] = $row[""];
			$_SESSION["user_name"] = $row["userid"];
			$_SESSION["email_id"] = $row["email_id"];
			//$_SESSION["full_name"] = $row["full_name"];
		}
		/*
		if($data->num_rows >0){
			while($row = $data-> fetch_assoc()){
				if($row["username"] == $_POST["user_name"] &&  $row["password"] == $_POST["pwd"]){
					$valid=1;
					//$_SESSION["user_id"] = $row[""];
					$_SESSION["user_name"] = $row["username"];
					$_SESSION["full_name"] = $row["full_name"];
					
				}
			}
		}*/
		if($valid == 0){
			echo "<p style='text-align:center; color:red'>Invalid username or password</p>";
		}
		$conn->close();
		
	}
	if(isset($_SESSION["user_name"])) {
		header("Location:mainpage.php");
	}
?>
<html >
<head>
  <meta charset="UTF-8">
  <title></title>
  

<link rel="stylesheet" href="css/login_page.css">
  
</head>

<body>
  <body>

<div class="container">
	<section id="content">
		<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="message"><?php if($message!="") { echo $message; } ?></div>
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username"  name="user_name"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name="pwd"/>
			</div>

			<div>
				<input type="submit" align="center" value="Submit" />
				<!--
				<a href="#">Lost your password?</a>
				<a href="#">Register</a>
				-->
			</div>
		</form><!-- form -->
		<!--
		<div class="button">
			<a href="#">Download source file</a>
		</div><!-- button
		-->
	</section><!-- content -->
</div><!-- container -->
</body>
  
    <script src="js/index.js"></script>

</body>
</html>