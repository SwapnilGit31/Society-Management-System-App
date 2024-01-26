<?php

	require('dbconnect.php');
	date_default_timezone_set('Asia/Kolkata');
	
	$card = $_GET['card'];
	$paying = $_GET['paying'];
	
	$sql = "select * from user where cardno='$card'";
	$res = mysqli_fetch_array(mysqli_query($db,$sql));
	
	$amount = $res['amount'];
	$amount = $amount+$paying;
	
	$sql1= "update user set amount='$amount' where cardno='$card'";
	if(mysqli_query($db,$sql1)){	
		die(print("200"));
	}else{
		die(print("Something went wrong! Try again"));
	}

?>