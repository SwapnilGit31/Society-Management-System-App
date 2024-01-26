<?php
require('dbconnect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
		$password = $_POST['password'];
		$mob = $_POST['mobile'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$pincode = $_POST['pincode'];
		$email = $_POST['email'];
		$cardno = $_POST['cardno'];
		$emergencyno = $_POST['emergencyno'];
		$society = $_POST['society'];

		//echo '$name';
		
			require_once('dbconnect.php');
			$sql = "SELECT * FROM user WHERE mobile='$mob'";
			
			$check = mysqli_fetch_array(mysqli_query($db,$sql));
			
			if(isset($check)){
				$response['success'] = "201";
				$response['message'] = "Mobile no already exists!";
				mysqli_close($db);
				die(print_r(json_encode($response),true));
			}else{				
				$sql = "INSERT INTO user (name,password,mobile,address,city,pincode,email,cardno,emergencyno,society) VALUES('$name','$password','$mob','$address','$city','$pincode','$email','$cardno','$emergencyno','$society')";
				if(mysqli_query($db,$sql))
				{
					$response['success'] = "200";
					$response['message'] = "Registration done.";
					mysqli_close($db);
					die(print_r(json_encode($response),true));
				}else{
					$response['success'] = "201";
					$response['message'] = "Error in inserting values in database.";
					mysqli_close($db);
					die(print_r(json_encode($response),true));
				}
			}
}else{
					$response['success'] = "201";
					$response['message'] = "Server Method Error!";
					mysqli_close($db);
					die(print_r(json_encode($response),true));
}
?>