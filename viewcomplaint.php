<?php
	require 'dbconnect.php';

	$sql = "SELECT * FROM `complaint`";

	$res = mysqli_query($db, $sql);

	$result = array();
 
	while($row = mysqli_fetch_array($res)){
		array_push($result,
		array('society' => $row[1],
		'owner' => $row[2],
		'flatno' => $row[3],
		'complaint' => $row[4],
		));
	}

	echo json_encode(array("result" => $result));
	
	mysqli_close($db);
?>