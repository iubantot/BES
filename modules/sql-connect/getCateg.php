<?php
//include("modules/config.php");
if(isset($_GET['pick']))
{
	$pick = secure($_GET['pick'], $mysqli);
	$q = "select p.product_no,pc.category, p.product_name, p.product_picture, p.descriptions, p.price ,p.quantity
			from product_category pc join products p
			on(p.category_id=pc.category_id)
			where p.category_id= '$pick'";
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			$row = $res->fetch_assoc();
			$_SESSION['product_no'] = $row['product_no'];
			$_SESSION['category'] = $row['category'];
			$_SESSION['descriptions'] = $row['descriptions'];
			$_SESSION['product_name'] = $row['product_name'];
			$_SESSION['price'] = $row['price'];
			
			//$_SESSION['descript'] = $row['product_name'];

			//echo $_SESSION['category'];
			$desc = $_SESSION['descriptions'];

		}
		else
		{
		}
	}
}





?>