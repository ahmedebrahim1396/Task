<?php

	if (isset($_POST['signup'])) {
		$city= $_POST['ncity'];
		$sector= $_POST['sector'];
		$fundamount= $_POST['fundamount'];
		$empnumber= $_POST['empnumber'];
		
		$link=mysqli_connect("localhost","root","","mashro3k");

		$isrt="INSERT INTO reports (city,category,t_funding_amount,employeee_numbers) VALUES ('$city','$sector','$fundamount','$empnumber')";	
		$result=mysqli_query($link,$isrt);
		if ($result) {
			echo "<h2>You Signed Up Successfully</h2> <br /><br />";
			

		}
		else{
			echo "Error...Someone Else Uses This E-Mail ";
		}
	}
	else{
		require_once("signup.html");
	}

?>