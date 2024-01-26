<?php
	require('dbconnect.php');

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$ename = $_POST['ename'];
		$sdate = $_POST['sdate'];
		$society = $_POST['society'];
		$stime = $_POST['stime'];
		
		if($ename == ''||$sdate == ''||$stime == ''||$society == ''){
			echo 'please fill all values';
		}else{
			
			$sql = "SELECT * FROM events WHERE event_name='$ename' ";
			
			$check = mysqli_fetch_array(mysqli_query($db,$sql));
			
			if(isset($check)){
				$response['success'] = "200";
				$response['message'] = "Event Already Exist!";
				die(print_r(json_encode($response),true));
			}else{				
			
				$sql1 = "INSERT INTO events (event_name,society_name,cdate,ctime) VALUES('$ename','$society','$sdate','$stime')";
				
				if(mysqli_query($db,$sql1)){
					$response['success'] = "200";
					$response['message'] = "Event Added Successfully...";
					die(print_r(json_encode($response),true));
				}else{
					$response['success'] = "201";
					$response['message'] = "Failed To Add Event!";
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