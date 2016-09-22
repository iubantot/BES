<?php
session_start();
include("../config.php");
if(isset($_POST['addOrder']))
{
	$users_id = $_SESSION['users_id'];
	$price = $_SESSION['price'];
	$product_no = $_SESSION['pack_pick'];
	$Eaddress = secure($_POST['Eaddress'], $mysqli);
	$date = secure($_POST['date'], $mysqli);
	$payment = secure($_POST['payment'], $mysqli);
	$formatted_date = date('Y-m-d', strtotime($date));
	echo $formatted_date;
	echo $users_id;
	$date_ordered = date("Y-m-d");
	
 $sql = "INSERT INTO `transactions` (`transaction_id`, `users_id`, `product_no`,`address`, `mode_id`, `status`, `total_price`, `schedule`, `date_ordered`, `date_confirmed`) 
		VALUES (NULL,'$users_id','$product_no','$Eaddress','$payment','0', '$price', '$formatted_date', '$date_ordered', '0000-00-00 00:00:00')";
echo  $sql;
			if ($mysqli->query($sql) === TRUE) {
				echo    "<script>
							alert('Order Placed Successfully Created!!');
							window.location.href='../../index.php';
						</script>";
						
					} else {  
								   echo    "<script>
												alert('Username already in Use');
											</script>";
								exit;
							}
}else{
	echo 'failed';
}
?>