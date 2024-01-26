<?php
	require('dbconnect.php');

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$owner = $_POST['owner'];
		$flatno = $_POST['flatno'];
		$society = $_POST['society'];
		$complaint = $_POST['complaint'];
		
		if($owner == ''||$flatno == ''||$society == ''||$complaint == ''){
			echo 'please fill all values';
		}else{
			
			$sql = "SELECT * FROM complaint WHERE owner='$owner' ";
			
			$check = mysqli_fetch_array(mysqli_query($db,$sql));
			
			if(isset($check)){
				$response['success'] = "200";
				$response['message'] = "Complaint Already Exist!";
				die(print_r(json_encode($response),true));
			}else{				
			
				$sql1 = "INSERT INTO complaint (society,owner,flatno,complaint) VALUES('$society','$owner','$flatno','$complaint')";
				
				if(mysqli_query($db,$sql1)){
					$response['success'] = "200";
					$response['message'] = "Complaint Added Successfully...";
					die(print_r(json_encode($response),true));
				}else{
					$response['success'] = "201";
					$response['message'] = "Failed To Add Complaint!";
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