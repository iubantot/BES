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
	//include 'modules/grad.php';
	if(isset($_GET['pick'])){
		include 'modules/sql-connect/getCateg.php';
		include 'modules/pack_sel.php';
	}else{
		
		
	}
}else {
	
	include 'modules/header_log.php';
	if(isset($_GET['pick'])){
		include 'modules/sql-connect/getCateg.php';
		include 'modules/pack_sel.php';
	}else{
		
		
	}
}





include 'modules/footer.php'; 
?>