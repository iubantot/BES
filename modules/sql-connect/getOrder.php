<?php
		$users_id = $_SESSION['users_id'];
		$q = "SELECT pm.mode_name,t.address,t.users_id,concat(u.lname,', ',u.fname)  as Full_Name,t.transaction_id,p.product_name,t.status,t.date_ordered,t.schedule,t.total_price,t.mode_id
				FROM transactions t JOIN products p 
				ON t.product_no = p.product_no
				JOIN users u
                ON u.users_id =t.users_id
				JOIN payment_mode pm
				ON t.mode_id = pm.mode_id
		where t.users_id = '$users_id'";
		
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			while($bow = $res->fetch_assoc()) {

				echo '
						<tr>
							<td>'.$bow['transaction_id'].'</td>
							<td>'.$bow['product_name'].'</td>';
							
							switch($bow['status']){
								case 0 : $status = "Pending";echo '<td><span class="label label-default">'.$status.'</span></td>';break;
								case 1 : $status = "Processing";echo '<td><span class="label label-info">'.$status.'</span></td>';break;
								case 2 : $status = "Approved";echo '<td><span class="label label-success">'.$status.'</span></td>';break;
								case 3 : $status = "Declined";echo '<td><span class="label label-danger">'.$status.'</span></td>';break;
								case 4 : $status = "Cancelled";echo '<td><span class="label label-warning">'.$status.'</span></td>';break;

							}
							
							
							echo '<td>'.$bow['date_ordered'].'</td>
						';
						echo '
							<td>
							<a data-toggle="modal" href="#'.$bow['transaction_id'].'"><span class="fa fa-cog fa-fw"></span></a>

							</td>
						';
						echo '</tr>';
						echo '
							 <div id="'.$bow['transaction_id'].'" class="modal fade" role="dialog">
								<div class="modal-dialog"> 
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Order Information</h4>
										</div>

										<div class="modal-body">
											<div class="row">
												<div class="col-md-7">
													<label class="cols-sm-7 control-label">Account Id : </label>'.$users_id.'
													<br>
													<label class="cols-sm-7 control-label">Transaction Id : </label>'.$bow['transaction_id'].'
													<br>
													<label class="cols-sm-7 control-label">Users ID : </label>'.$bow['users_id'].'
													<br>
													<label class="cols-sm-7 control-label">Event Location : </label>'.$bow['address'].'
													<br>
													<label class="cols-sm-7 control-label">Customer Name : </label>'.$bow['Full_Name'].'
													<br>
													<label class="cols-sm-7 control-label">Package Name : </label>'.$bow['product_name'].'
													<br>
													<label class="cols-sm-7 control-label">Schedule : </label>'.$bow['schedule'].'
													<br>
													<label class="cols-sm-7 control-label">Total Price : </label>'.$bow['total_price'].'
													<br>
													<label class="cols-sm-7 control-label">Mode of Payment : </label>'.$bow['mode_name'].'
													<br>
													
												<label class="cols-sm-7 control-label">Date Ordered : </label>'.$bow['date_ordered'].'<br>';
											
											echo '<label class="cols-sm-7 control-label">Status : </label>';
											switch($bow['status']){
								case 0 : $status = "Pending";echo '<span class="label label-default">'.$status.'</span>';break;
								case 1 : $status = "Processing";echo '<span class="label label-info">'.$status.'</span>';break;
								case 2 : $status = "Approved";echo '<span class="label label-success">'.$status.'</span>';break;
								case 3 : $status = "Declined";echo '<span class="label label-danger">'.$status.'</span>';break;
								case 4 : $status = "Cancelled";echo '<span class="label label-warning">'.$status.'</span>';break;

							}
											echo '</div>
												<div class="col-md-5">
													<form class="form" role="form" method="post" action="modules/sql-connect/updateOrder.php?trans_id='.$bow['transaction_id'].'&status='.$bow['status'].'" >
													<input class="btn btn-danger btn-block" type="submit" name="action" value="Cancel Order"/>
													
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						';
			}

		}
		else
		{
		}
	}






?>