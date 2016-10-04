<?php
		$users_id = $_SESSION['users_id'];
		$q = "SELECT t.users_id,concat(u.lname,', ',u.fname)  as Full_Name,t.transaction_id,p.product_name,t.status,t.date_ordered,t.schedule,t.total_price,t.mode_id
				FROM transactions t JOIN products p 
				ON t.product_no = p.product_no
				JOIN users u
                ON u.users_id =t.users_id
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
<<<<<<< HEAD
												<h1>Transaction Id : '.$bow['transaction_id'].'</h1>
													<h2>Users ID : '.$bow['users_id'].'</h2>
													<h2>Customer Name : '.$bow['Full_Name'].'</h2>
													<h2>Package Name : '.$bow['product_name'].'</h2>
													<h2>Schedule : '.$bow['schedule'].'</h2>
													<h2>Total Price : '.$bow['total_price'].'</h2>
													<h2>Mode of Payment : '.$bow['mode_id'].'</h2>
													
													<h2>Date Ordered : '.$bow['date_ordered'].'</h2>
=======
													<h1>Transaction Id : '.$bow['transaction_id'].'</h1>
													<h1>Users ID : '.$users_id.'</h1>
>>>>>>> origin/master
												</div>
												<div class="col-md-5">
													<form class="form" role="form" method="post" action="modules/sql-connect/updateOrder.php?trans_id='.$bow['transaction_id'].'&status='.$bow['status'].'" >
													<input class="btn btn-default" type="submit" name="action" value="Delete Order"/>
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