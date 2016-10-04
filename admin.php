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
if($_SESSION['groupID'] >= 1){
include 'modules/admin_head.php';


include 'modules/admin_body.php';
}else{
			echo    "<script>
                            alert('Page Not Found...');
                        </script>";
			header("Location:index.php");
	
}
?>



</body>
</html>
