<?php
		$users_id = $_SESSION['users_id'];
		$q = "Select * from transactions where users_id='$users_id'";
	
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			while($bow = $res->fetch_assoc()) {

				echo '
						<tr>
							<td>'.$bow['transaction_id'].'</td>
							<td>'.$bow['product_no'].'</td>';
							
							switch($bow['status']){
								case 0 : $status = "Pending";break;
								case 1 : $status = "Processing";break;
								case 2 : $status = "Approved";break;
							}
							
							echo '<td>'.$status.'</td>
						</tr>';
			}

		}
		else
		{
		}
	}






?>