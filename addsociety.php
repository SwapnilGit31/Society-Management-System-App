<?php
	require('dbconnect.php');

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$sname = $_POST['sname'];
		$cname = $_POST['cname'];
		$sadd = $_POST['sadd'];
		$tfloor = $_POST['tfloor'];
		$tflat = $_POST['tflat'];
		$sregno = $_POST['sregno'];
		
		if($sname == ''||$cname == ''||$sadd == ''||$tfloor == ''||$tflat == ''||$sregno == ''){
			echo 'please fill all values';
		}else{
			
			$sql = "SELECT * FROM society WHERE society_name='$sname' ";
			
			$check = mysqli_fetch_array(mysqli_query($db,$sql));
			
			if(isset($check)){
				$response['success'] = "200";
				$response['message'] = "Society Already Exist!";
				die(print_r(json_encode($response),true));
			}else{				
			
				$sql1 = "INSERT INTO society (society_name,chairman_name,address,floors,flats,regno) VALUES('$sname','$cname','$sadd','$tfloor','$tflat','$sregno')";
				
				if(mysqli_query($db,$sql1)){
					$response['success'] = "200";
					$response['message'] = "Society Added Successfully...";
					die(print_r(json_encode($response),true));
				}else{
					$response['success'] = "201";
					$response['message'] = "Failed To Add Society!";
					die(print_r(json_encode($response),true));
				} 
			}
			
		}
	}else{
		$response['success'] = "201";
		$response['message'] = "Connectivity Failed!";
		die(print_r(json_encode($response),true));
	}
?>