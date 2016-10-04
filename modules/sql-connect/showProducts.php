<?php
		$users_id = $_SESSION['users_id'];
		$q = "SELECT p.product_no,pc.category,p.product_name,p.price,p.descriptions
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
							<a data-toggle="modal" href="#'.$bow['product_no'].'"><span class="fa fa-cog fa-fw"></span></a>

							</td>
						';
						echo '</tr>';
						echo '
							 <div id="'.$bow['product_no'].'" class="modal fade" role="dialog">
								<div class="modal-dialog"> 
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Product Information</h4>
										</div>

										<div class="modal-body">
											<div class="row">
												<div class="col-md-7">
													<form class="form" role="form" method="post" action="modules/sql-connect/updateProduct.php?prod_id='.$bow['product_no'].'" >
													<label class="cols-sm-7 control-label">Product Id : </label>'.$bow['product_no'].'
													<br>
													<label class="cols-sm-7 control-label">Product Name : </label>
													<input required="required" class="form-control" id="prodname" name="prodname" type="text" placeholder="'.$bow['product_name'].'"/>
													<br>
													<label class="cols-sm-7 control-label">Description : </label>
													<textarea required="required" id="desc" name="desc" class="form-control" rows="4" cols="50">'.$bow['descriptions'].'</textarea>
													<br>
													<label class="cols-sm-7 control-label">Price : </label>
													<input required="required" class="form-control" id="price" name="price" type="number" placeholder="'.$bow['price'].'"/>
													';
													
												
											
											
											echo '</div>
												<div class="col-md-5">
													<input class="btn btn-info btn-block" type="submit" name="action" value="Update Product"/>
	
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