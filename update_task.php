<?php
	require_once 'conn.php';
	
	if($_GET['task_id'] != ""){
		$task_id = $_GET['task_id'];
		
		$conn->query("UPDATE `todos` SET `isdone` = 'Done' WHERE `$task_id` = $task_id") or die(mysqli_errno($conn));
		header('location: index.php');
	}
?>