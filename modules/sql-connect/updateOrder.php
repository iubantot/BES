<?php
session_start();
include("../config.php");
$trans = $_GET['trans_id'];
$status = $_GET['status'];

$action = $_POST['action'];
if($action == "Delete Order"){
	$q = "DELETE FROM `transactions` WHERE `transactions`.`transaction_id` = '$trans'";
	if ($mysqli->query($q) === TRUE) {
			   echo    "<script>
										alert('Transaction Deleted!!');
										window.location.href='../../admin.php';
									</script>";
				
	}
}else if($action == "Approve Order"){
	$date = date("Y/m/d");
	$q = "UPDATE `transactions` SET `status` = '2', `date_confirmed` = '$date' WHERE `transactions`.`transaction_id` = '$trans'";
	if ($mysqli->query($q) === TRUE) {
			   echo    "<script>
										alert('Transaction Approved!!');
										window.location.href='../../admin.php';
									</script>";
				
	}
	
}else if($action == "Decline Order"){
	$q = "UPDATE `transactions` SET `status` = '3' WHERE `transactions`.`transaction_id` = '$trans'";
	if ($mysqli->query($q) === TRUE) {
			   echo    "<script>
										alert('Transaction Declined!!');
										window.location.href='../../admin.php';
									</script>";
				
	}
	
}else if($action == "Cancel Order"){
	if($status == 2){
		echo    "<script>
					alert('You cannot cancel an approved order!');
					window.location.href='../../account.php';
				 </script>";
	}else{
	$q = "UPDATE `transactions` SET `status` = '4' WHERE `transactions`.`transaction_id` = '$trans'";
	if ($mysqli->query($q) === TRUE) {
			   echo    "<script>
										alert('Transaction Declined!!');
										window.location.href='../../account.php';
									</script>";
				
	}
	}
}

?>