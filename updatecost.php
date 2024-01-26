<?php
	
	require('dbconnect.php');
	date_default_timezone_set('Asia/Kolkata');
	
	$cost = $_GET['cost'];
	$pid = $_GET['pid'];
	
	$sql = "update prescription set cost='$cost' where id='$pid'";
	if(mysqli_query($db,$sql)){
		die(print("200"));
	}else{
		die(print("Something went wrong!"));
	}


?>