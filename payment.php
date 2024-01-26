<?php

	require('dbconnect.php');
	date_default_timezone_set('Asia/Kolkata');
	
	$mobile = $_GET['mobile'];
	$cost = 2000;
	
	$sql1 = "select * from user where mobile = '$mobile' and status = 0 ";
	$row1 = mysqli_fetch_array(mysqli_query($db,$sql1));
	
	$balance = $row1['amount'];
	if($balance > $cost){
		$balance = $balance-$cost;
		$sql2 = "update user set amount='$balance' where mobile = '$mobile'";
		if(mysqli_query($db,$sql2)){
			$sql3 = "update user set status = 1 where mobile='$mobile'";
			if(mysqli_query($db,$sql3)){
				die(print("200"));
			}else{
				die(print("Something went wrong!"));
			}
		}else{
			die(print("Something went wrong!"));
		}
	}else{
		die(print("Something went wrong!"));
	}


?>