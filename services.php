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
	include 'modules/grad.php';
}





include 'modules/footer.php'; 
?>