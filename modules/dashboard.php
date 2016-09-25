<head>
  <link rel="stylesheet" href="../css/dashboard.css">
  <script src="../js/dashboard.js"></script>
</head>
<body>
<!-- header -->


<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-sm-offset-1">
            <!-- Left column -->
            <a href="#">
			<?php
			echo '<i><img src="modules/sql-connect/getImage.php?id='.$_SESSION['users_id'].'" id="displaypic" class="img-thumbnail" width="250" height="200"/> </i>';

			?>
			</a>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php
							echo '<h4>'.$_SESSION['lname'].', '.$_SESSION['fname'].'</h4>';
							?></div>
                        <div class="panel-body">
							<ul>
								<li id = "address">Address</li>
								<li id = "contact#">Contact #</li>
								<li id = "contact#">Birthdate</li>


							</ul>
                        </div>
                    </div>

           

           
        </div>
        <!-- /col-3 -->
        <div class="col-sm-7">


            <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>
            <hr>

            <div class="row">
                <!-- center left-->
                <div class="col-md-12">


                    <div class="btn-group btn-group-justified" >
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-plus"></i>
                            <br> My Orders
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-cloud"></i>
                            <br> My Schedules
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-cog"></i>
                            <br> Tools
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-question-sign"></i>
                            <br> Help
                        </a>
                    </div>


                    <div class="panel panel-default">

                        
                        <!--/panel-body-->
                    </div>
                    <!--/panel-->


                    <!--tabs-->
                    
                    <!--/tabs-->

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>My Orders</h4></div>
                        <div class="panel-body">
						<?php
                            echo '
							<table class="table">
								<thead>
								  <tr>
									<th>Order Id</th>
									<th>Package Name</th>
									<th>Status</th>
								  </tr>
								</thead>
								<tbody>
								';
							include ("sql-connect/getOrder.php");

							echo '	</tbody>
							</table>
							';
							?>
                        </div>
                    </div>
                </div>
                <!--/col-->



            </div>
            <!--/row-->
            </div>
        </div>
        <!--/col-span-9-->
    </div>
</div>
<!-- /Main -->


<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>
<!-- /.modal -->
</body>
