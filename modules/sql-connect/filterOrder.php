<?php
	session_start();
	include("../config.php");
		$filter = $_GET['filterby'];
		$users_id = $_SESSION['users_id'];
		$q = "SELECT t.users_id,t.transaction_id,p.product_name,t.status,t.date_ordered
				FROM transactions t JOIN products p
				ON t.product_no = p.product_no
				";
		switch($filter){
			case 0 :
				$temp_add = "WHERE t.status = 0";
				$q .= $temp_add;
			break;
			case 1 :
				$temp_add = "WHERE t.status = 2";
				$q .= $temp_add;
			break;
			case 2 :
				$temp_add = "ORDER BY t.date_ordered";
				$q .= $temp_add;
			break;
		}
		
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			while($bow = $res->fetch_assoc()) {

				echo '
						<tr>
							<td>'.$bow['users_id'].'</td>
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
							<a data-toggle="modal" href="#orderInfo"><span class="fa fa-cog fa-fw"></span></a>
							<a data-toggle="modal" href="#deleteconfirm"><i class="fa fa-times-circle fa-fw"></i></a>
							<a data-toggle="modal" href="#orderInfo"><i class="fa fa-question-circle fa-fw"></i></a>

							</td>
						';
						echo '</tr>';
			}

		}
		else
		{
		}
	}






?>