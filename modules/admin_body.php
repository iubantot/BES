<head>
  <link rel="stylesheet" href="../css/dashboard.css">
  <script src="../js/dashboard.js"></script>
    <script src="../js/table_pager.js"></script>
<script>
$(document).ready(function(){
	$("#mySched").hide();
	$("#myAcc").hide();
	$("#myHelp").hide();
    $("#orders").click(function(){
        $("#myOrders").show(100);
		$("#mySched").hide(100);
		$("#myAcc").hide(100);
		$("#myHelp").hide(100);
		$("#myWelcome").hide(100);

		
    });
    $("#schedules").click(function(){
        $("#mySched").show(100);
        $("#myOrders").hide(100);
		$("#myAcc").hide(100);
		$("#myHelp").hide(100);
		$("#myWelcome").hide(100);

    });
	$("#settings").click(function(){
        $("#myAcc").show(100);
        $("#myOrders").hide(100);
		$("#mySched").hide(100);
		$("#myHelp").hide(100);
		$("#myWelcome").hide(100);

    });

});



</script>
</head>
<body>
<!-- header -->


<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <!-- /col-3 -->
        <div class="col-sm-8 col-sm-offset-2">


   

            <div class="row ">
                <!-- center left-->
                <div class="col-md-12">


                    <div class="btn-group btn-group-justified" >
                        <a href="#" class="btn btn-primary col-sm-3" id="orders">
                            <i class="glyphicon glyphicon-plus"></i>
                            <br> Manage Orders
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3" id="schedules">
                            <i class="fa fa-calendar-check-o fa-fw"></i>
                            <br> Manage Products
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3" id="settings">
                            <i class="glyphicon glyphicon-cog"></i>
                            <br> Account Settings
                        </a>
                        <a href="index.php" class="btn btn-primary col-sm-3" >
                            <i class="glyphicon glyphicon-question-sign"></i>
                            <br> Return to Site
                        </a>
                    </div>


                    <div class="panel panel-default">

                        
                        <!--/panel-body-->
                    </div>
                    <!--/panel-->


                    <!--tabs-->
                    
                    <!--/tabs-->

                    <div class="panel panel-info" id="myOrders">
                        <div class="panel-heading " >
							
                            <h4>Orders</h4></div>
							
							
							
                        <div class="panel-body">
						<!--<div class="row">
								<div class="col-md-4">
								Filter by :
								<div class ="row">
								<form method="get" action="modules/sql-connect/filterOrder.php">
									<select name="filterby" id="filterby">
										<option value="0" selected>Pending Orders</option> 
										<option value="1" selected>Approved Orders</option> 
										<option value="2" selected>Order Date</option> 


									</select>
										
									</form>
								</div>
								</div>
								<div class="col-md-4">
									<div class="row">
										Search : 
										<form method="get" action="modules/sql-connect/filterOrder.php">
											<select name="filterby" id="filterby">
												<option value="0" selected>Account ID</option> 
												<option value="1" selected>Order Date</option> 
											</select>

											</form>
											
									</div>
								</div>
							</div> -->
								<?php
									echo '
									<table class="table table-hover">
										<thead>
										  <tr>
											<th>Account Id</th>
											<th>Customer Name</th>
											<th>Order Id</th>
											<th>Package Name</th>
											<th>Status</th>
											<th>Date Ordered</th>
											<th>Actions</th>

										  </tr>
										</thead>
										<tbody>
										';
									include ("sql-connect/showOrder.php");

									echo '	</tbody>
									</table>
									';
								?>
                        </div>
                    </div>
					<div class="panel panel-default" id="mySched">
						<div class="panel-heading">
						<h4>Products</h4></div>
						<div class="panel-body">
						<div class="table-responsive">
						<?php
									echo '
									<table class="table table-hover">
										<thead>
										  <tr>
											<th>Category ID</th>
											<th>Product Name</th>
											<th>Price</th>
											<th>Actions</th>

										  </tr>
										</thead>
										<tbody>
										';
									include ("sql-connect/showProducts.php");

									echo '	</tbody>
									</table>
									';
								?>
						</div>
						<div class="col-md-12 text-center">
						  <ul class="pagination pagination-lg pager" id="myPager"></ul>
						</div>
						</div>
					</div>
					<div class="panel panel-default" id="myAcc">
						<div class="panel-heading">
						<h4>Account Settings</h4></div>
					</div>
					<div class="panel panel-default" id="myHelp">
						<div class="panel-heading">
						<h4>Help</h4></div>
					</div>
					<div class="panel panel-default" id="myWelcome">
						<div class="panel-heading">
						<h4>Welcome to BlueEye Photography Services!</h4></div>
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

<div>
</body>
