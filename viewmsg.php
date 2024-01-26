<?php

	require('dbconnect.php');
	date_default_timezone_set('Asia/Kolkata');
	
	$id = $_GET['id'];
	$medical = $_GET['medical'];
	
	$result = array();
	
	$sql = "select * from user order by `id` desc";
	$res = mysqli_query($db,$sql);
	if(mysqli_num_rows($res)>0){
		while($data=mysqli_fetch_array($res)){
			array_push($result,array(
									"name"=>$data['name'],
									"message"=>$data['message']));
									
									/* "username"=>$data['username'],
									"medical"=>$data['medical'],
									"mobile"=>$data['mobile'],
									"email"=>$data['email'],
									"token"=>$data['token']	)); */
									
		}
		
		$response['result'] = $result;
		die(print_r(json_encode($response),true));
	}else{
		die(print("Something went wrong!"));
	}


?>