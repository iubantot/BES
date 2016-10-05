<head>
  <link rel="stylesheet" href="../css/dashboard.css">
  <script src="../js/dashboard.js"></script>
    <script src="../js/table_pager.js"></script>
<script>
$(document).ready(function(){
	$("#mySched").hide();
	//$("#myOrders").hide();
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
	$("#help").click(function(){
        $("#myHelp").show(100);
        $("#myOrders").hide(100);
		$("#myAcc").hide(100);
		$("#mySched").hide(100);
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
        <div class="col-sm-3 col-sm-offset-1">
			
			<div>
            <!-- Left column --><center>
            <a href="#">
			<?php
			echo '<i>';
							include 'modules/sql-connect/getImage3.php';
			
			//echo '<i><img src="modules/sql-connect/getImage.php?id='.$_SESSION['users_id'].'" id="displaypic" class="img-thumbnail" width="250" height="200"/> </i>';
			echo '</i>';
			?>
			</a>
			</center>
			</div>

                    <div class="panel panel-primary">
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


   

            <div class="row">
                <!-- center left-->
                <div class="col-md-12">


                    <div class="btn-group btn-group-justified" >
                        <a href="#" class="btn btn-primary col-sm-3" id="orders">
                            <i class="glyphicon glyphicon-plus"></i>
                            <br> My Orders
                        </a>
						<!--
                        <a href="#" class="btn btn-primary col-sm-3" id="schedules">
                            <i class="fa fa-calendar-check-o fa-fw"></i>
                            <br> My Schedules
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3" id="settings">
                            <i class="glyphicon glyphicon-cog"></i>
                            <br> Account Settings
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3" id="help">
                            <i class="glyphicon glyphicon-question-sign"></i>
                            <br> Help
                        </a> -->
                    </div>


                    <div class="panel panel-default">

                        
                        <!--/panel-body-->
                    </div>
                    <!--/panel-->


                    <!--tabs-->
                    
                    <!--/tabs-->

                    <div class="panel panel-primary" id="myOrders">
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
											<th>Date Ordered</th>
											<th>Actions</th>

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
					<div class="panel panel-default" id="mySched">
						<div class="panel-heading">
						<h4>My Schedules</h4></div>
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
