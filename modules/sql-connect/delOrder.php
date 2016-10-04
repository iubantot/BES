<?php
session_start();
include("../config.php");
$trans = $_GET['trans_id'];
$q = "DELETE FROM `transactions` WHERE `transactions`.`transaction_id` = '$trans'";
echo $q;
if ($mysqli->query($q) === TRUE) {
			   echo    "<script>
										alert('Transaction Deleted!!');
										window.location.href='../../admin.php';
									</script>";
				
			}
?>