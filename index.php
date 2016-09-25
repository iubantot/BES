<html>
<head>
<?php
session_start();
include 'modules/loadboot.php'; 
include 'modules/config.php';

?>
</head>

<body>
<header>
</header>
<?php
if(isset($_SESSION['userName'])){
$i = 0;
}else{
	$i = 1;
}
if($i == 1){
	include 'modules/header.php';
}else {
	include 'modules/header_log.php';
}
	include 'modules/ad_head.php';
echo '<h1>Welcome to BlueEye Photography Services!</h1>
';
include 'modules/footer.php'; 

?>


</body>
</html>
