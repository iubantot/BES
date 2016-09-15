<html>
<head>
<?php
session_start();
include 'modules/loadboot.php'; 
include 'modules/config.php';

?>
</head>

<body>
<?php
if(isset($_SESSION['userName'])){
$i = 0;
}else{
	$i = 1;
}
if($i == 1){
	include 'modules/header.php';
	include 'modules/ad_head.php';
	include 'modules/services.php'; 
	include 'modules/photographers.php';
}else {
	include 'modules/header_log.php';
	include 'modules/client.php';
	include 'modules/services.php'; 
	include 'modules/photographers.php';
}

include 'modules/footer.php'; 

?>


</body>
</html>
