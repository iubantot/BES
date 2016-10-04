<?php
		$users_id = $_SESSION['users_id'];
		$q = "SELECT pc.category,p.product_name,p.price
				FROM products p JOIN product_category pc
				ON p.category_id = pc.category_id
				";
		
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			while($bow = $res->fetch_assoc()) {

				echo '
						<tr>
							<td>'.$bow['category'].'</td>
							<td>'.$bow['product_name'].'</td>';
							echo '<td>'.$bow['price'].'</td>
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