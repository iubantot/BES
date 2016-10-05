<?php
	//include '../config.php';
	$userid = $_SESSION['users_id'];
	$q = "SELECT profile_picture FROM users WHERE users_id=$userid";
	
	if($res = $mysqli->query($q)){
		if($res->num_rows > 0){
			$row = $res->fetch_assoc();
			//header("content-type: image/jpeg");
			if(!empty($row['profile_picture'])){
			//echo '<i><img src="Image/'.$row['profile_picture'].'" class="img-circle" width="20" height="20"/></i>';
			echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['profile_picture'] ).'" class="img-circle" width="20" height="20"/>';
			}else{
			echo '<i><img src="img/tempo.jpg" class="img-circle" width="20" height="20"/></i>';

			}
		}
		else{
		}
	}
	
?>