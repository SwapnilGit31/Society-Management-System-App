<?php

	require 'dbconnect.php';
	
	//$user = $_GET['user'];
	$email = $_GET['email'];
	//$mobile = $_GET['mobile'];
	
	$sql = "select * from user where email='$email'";
	$res = mysqli_query($db,$sql);
	
	if(mysqli_num_rows($res)>0){
		//$key = rand(100000,999999);
		$data = mysqli_fetch_array($res);
		
		$response['success'] = '200';
		$response['key'] = $data['password'];
		$response['mobile'] = $data['mobile'];
		die(print_r(json_encode($response),true));
	}else{
		echo 'Invalid email ID or mobile no!';
	}


?>