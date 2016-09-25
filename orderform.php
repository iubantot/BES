<html>
<head>
<?php
session_start();
include 'modules/loadboot.php'; 
include 'modules/config.php';

?>
  <link rel="stylesheet" href="/css/orderform.css">

</head>

<body>
<?php
if(isset($_SESSION['userName'])){
$i = 0;
}else{
	$i = 1;
}
//--------------------------- Header Selector --------------------------------
if($i == 1){ 
	include 'modules/header.php';
	include 'modules/loginfirst.php';
}else { 
	include 'modules/header_log.php';
//----------------------------------------------------------------------------
//--------------------------- Content Selector --------------------------------
	$group = $_SESSION['groupID'];
	if($group == 0){
	echo '<br>';
	echo '<br>';
	echo '<br>';
	include 'modules/orderSelected.php';

	}else if ($group == 1){
		include 'modules/employee.php';
	}else if ($group == 2){
		include 'modules/admin.php';
	}
}
//----------------------------------------------------------------------------


?>
<footer>
<br>
<br>
<br>
<?php
include 'modules/footer.php'; 
?>
</footer>

</body>
</html>
