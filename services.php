<?php
session_start();
include 'modules/loadboot.php'; 
include 'modules/config.php';


if(isset($_SESSION['userName'])){
$i = 0;
}else{
	$i = 1;
}
if($i == 1){
	include 'modules/header.php';
	include 'modules/grad.php';
}else {
	
	include 'modules/header_log.php';
	include 'modules/client.php';
	if(isset($_GET['pick'])){
		$user_pick = $_GET['pick'];
		switch($user_pick){
			case 1 : 	include 'modules/grad.php';
						break;
			case 2 : 	include 'modules/fam.php';
						break;
		}
	}else{
		
		
	}
}





include 'modules/footer.php'; 
?>