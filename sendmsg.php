<?php

	require('dbconnect.php');
	date_default_timezone_set('Asia/Kolkata');
	
	$id = $_POST['id'];
	$message = $_POST['message'];
	
	$sql = "UPDATE `user` SET `message` = '$message' where `id`='$id'";
	if(mysqli_query($db,$sql)){
		die(print("200"));
	}else{
		die(print("Something went wrong! Try again"));
	}



?>