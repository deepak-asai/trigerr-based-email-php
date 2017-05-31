<?php 
	session_start();
	//print_r($_SESSION);	
	if(!isset($_SESSION["user_name"])) {
		header("Location:login.php");
	}
?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src = "../TimeMe/timeme.js"></script>
		
		<script>
			TimeMe.initialize({
				currentPageName: "my-home-page", // current page
				idleTimeoutInSeconds: 30 // idleTimeoutInSeconds
			});	
		</script>
		<script type="text/javascript">
			window.onbeforeunload = function(event) {
				var tot_time =  TimeMe.getTimeOnCurrentPageInSeconds();
				//if(tot_time>5){
					$.ajax({
						type: "POST",
						url: "setLogs.php",
						dataType:"json",
						//contentType:"application/json",
						data:{'timeSpent': tot_time, 'rule': 'rule4'},	
						success: function(data) {
							//alert("hi");
							
							//$('#success').txt(data); 
						},
						 error: function (jqXHR, exception) {
						    var msg = '';
						    if (jqXHR.status === 0) {
						        msg = 'Not connect.\n Verify Network.';
						    } else if (jqXHR.status == 404) {
						        msg = 'Requested page not found. [404]';
						    } else if (jqXHR.status == 500) {
						        msg = 'Internal Server Error [500].';
						    } else if (exception === 'parsererror') {
						        msg = 'Requested JSON parse failed.';
						    } else if (exception === 'timeout') {
						        msg = 'Time out error.';
						    } else if (exception === 'abort') {
						        msg = 'Ajax request aborted.';
						    } else {
						        msg = 'Uncaught Error.\n' + jqXHR.responseText;
						    }
						   //alert(msg);
						},
					});

				//}		
			};
			$(document).ready(function(){
				TimeMe.startTimer("my-activity");

				$("#but1").click(function(){

					//alert("entered");
					var timeelap = TimeMe.getTimeOnCurrentPageInSeconds();
					$("#here").text(timeelap);

					
					
				});
			});
		</script>
		<script>
			//function disp(){
				/*var timeelap = TimeMe.getTimeOnCurrentPageInSeconds();
				$("#here").text(timeelap);

				
				xmlhttp=new XMLHttpRequest();
				xmlhttp.open("POST","time.php", true);
				xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				var timeSpentOnPage = "timeSpent="+TimeMe.getTimeOnCurrentPageInSeconds();
				xmlhttp.send(timeSpentOnPage);	*/
			//}


		</script>
	</head>
	<a href="../logout.php">logout</a>
	hiii... displaying rule 4

	
</html>