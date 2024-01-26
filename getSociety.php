<?php
	require 'dbconnect.php';

	$sql = "SELECT * FROM `society`";

	$res = mysqli_query($db, $sql);
	
	$result = array();
 
	while($row = mysqli_fetch_array($res)){
		array_push($result,
		array('society_name' => $row[1],
		));
	}

	echo json_encode(array("result" => $result));

	mysqli_close($db);
?>