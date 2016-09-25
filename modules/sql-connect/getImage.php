<?php
	session_start();
	$q = "SELECT profile_picture FROM users WHERE users_id=".$_SESSION['users_id'];
	$res = $mysqli->query($q);
	while($row = $res->fetch_assoc())
	{
		echo $row["displaypic"];
	}
	header("content-type: image/jpeg");
	
?>