<?php
session_start();
include("../config.php");
$prod_id = $_GET['prod_id'];
$prod_name = $_POST['prodname'];
$desc = $_POST['desc'];
$price = $_POST['price'];

if($prod_name != ""){
$q1 = "UPDATE `products` SET `product_name` = '$prod_name' WHERE `products`.`product_no` = $prod_id;";
$mysqli->query($q1);
}
if($desc != ""){
$q1 = "UPDATE `products` SET `descriptions` = '$desc' WHERE `products`.`product_no` = $prod_id;";
$mysqli->query($q1);
}
if($price != ""){
$q1 = "UPDATE `products` SET `price` = '$price' WHERE `products`.`product_no` = $prod_id;";
$mysqli->query($q1);
}
echo    "<script>
							alert('Product Updated Successfully!!');
							window.location.href='../../admin.php';
						</script>";
?>