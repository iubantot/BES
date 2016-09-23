<?php
$db_username = 'blue_eye';
	$db_password = 'blue_eye';
	$db_name = 'blue_eye_studio';
	$db_host = '25.45.193.96';
	$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
	
	function secure($str,$sqlHandle)
	{
		$secured = strip_tags($str);
		$secured = htmlspecialchars($secured);
		$secured = mysqli_real_escape_string($sqlHandle,$secured);
		return $secured;
	}
?>