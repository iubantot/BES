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
	include 'modules/photographers.php';
}else {
	include 'modules/header_log.php';
	$group = $_SESSION['groupID'];
	if($group == 0){
	include 'modules/client.php';	
	}else if ($group == 1){
		include 'modules/employee.php';
	}else if ($group == 2){
		include 'modules/admin.php';
	}
	include 'modules/photographers.php';


}

include 'modules/footer.php'; 

?>


</body>
</html>
