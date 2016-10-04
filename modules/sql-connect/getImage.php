<?php
	include '../config.php';
	$userid = $_GET['id'];
	$q = "SELECT profile_picture FROM users WHERE users_id=$userid";
	
	if($res = $mysqli->query($q)){
		if($res->num_rows > 0){
			$row = $res->fetch_assoc();
			header("content-type: image/jpeg");
			echo $row['profile_picture'];

		}
		else{
		}
	}
	
?>