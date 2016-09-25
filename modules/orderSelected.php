
<?php
include 'modules/loadboot.php'; 
?>
<br>
<br>

<section class="order-form">
<div class="container">
	<form class="form" role="form" method="post" action="modules/sql-connect/addOrder.php" accept-charset="UTF-8" id="addOrder">

<?php
	$selected = $_GET['pack_pick'];
	$_SESSION['pack_pick'] = $selected;
	$query = 'SELECT * from products where product_no='.$selected;
	if($res = $mysqli->query($query))
	{
		if($res->num_rows > 0)
		{
			$row = $res->fetch_assoc();
			$_POST['category_id'] = $row['category_id'];
			$_POST['product_name'] = $row['product_name'];
			$_POST['descriptions'] = $row['descriptions'];
			$_POST['quantity'] = $row['quantity'];
			$_SESSION['price'] = $row['price'];

		}
		else
		{
		}
	}
	//echo '<div class="well text-center col-md-4 col-md-offset-4"><h1>'. $product_name.'</h1></div>';
	
	//<------------------------ Order Summary ------------------------------------------->
	echo '
	<div class ="well col-md-offset-1 col-md-6">
			<div class="form-group ">
				<label for="Eaddress" class="cols-sm-2 control-label">Event Location : </label>
				<div class="cols-sm-10">
					<div class="input-group">
						<input class="form-control" id="Eaddress" name="Eaddress" required="required" type="text" placeholder="Event Address"/>
					</div>
				</div>
			</div>
			<div class="form-group ">
				<label  for="date">
					Schedule:
				</label>
				<div class="input-group">
					<input class="form-control" id="date" name="date" required="required" placeholder="MM/DD/YYYY" type="text"/>
				</div>
			</div>
			<div class="form-group">
				<label for="payment">Payment Method:</label>
				<br>
				<div class="radio-inline">
					<input type="radio" name="payment" value="0"><i class="fa fa-cc-paypal"></i>Paypal
				</div>
				<div class="radio-inline">
					<input type="radio" name="payment" value="1">Western Union
				</div>

			</div>
		
	</div>';
	echo '
	<div class="well text-center col-md-4 ">
		<h4>Order Summary</h4>
		<hr>
		<table class="table">
			<thead>
			  <tr>
				<th>Product Name</th>
				<th>Quantity</th>
				<th>Price</th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>'.$_POST['product_name'].'</td>
				<td>'.$_POST['quantity'].'</td>
				<td>'.$_SESSION['price'].'</td>
			  </tr>
			</tbody>
		</table>
		<hr>
		<div class="col-md-8">
			<h4>Total:</h4>
		</div>
		<div class="col-md-4">
		<h3>'.$_SESSION['price'].'</h3>
		</div>
	</div>';
	//<------------------------ Order Summary ------------------------------------------->

?>

	<div class="form-group col-md-offset-7">
	<button type="submit" class="btn btn-primary col-md-4 " name="addOrder" >Submit Order</button>
	</div>
	</form>
</div>

</section>





<?php
?>

