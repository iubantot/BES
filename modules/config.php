<?php
$db_username = 'blueeye';
	$db_password = 'blueeye';
	$db_name = 'blue-eye';
	$db_host = 'localhost';
	$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
	
	function secure($str,$sqlHandle)
	{
		$secured = strip_tags($str);
		$secured = htmlspecialchars($secured);
		$secured = mysqli_real_escape_string($sqlHandle,$secured);
		
		return $secured;
	}
?>