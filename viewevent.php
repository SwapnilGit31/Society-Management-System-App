<?php
	require 'dbconnect.php';

	$sql = "SELECT * FROM `events`";

	$res = mysqli_query($db, $sql);

	$result = array();
 
	while($row = mysqli_fetch_array($res)){
		array_push($result,
		array('event_name' => $row[1],
		'date' => $row[3],
		'time' => $row[4],
		));
	}

	echo json_encode(array("result" => $result));
	
	mysqli_close($db);
?>