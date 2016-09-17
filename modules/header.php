<div id="container">
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
		<!-- Logo -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
		  <a class="navbar-brand" href="../BES/">
		  <img src="../BES/img/logo.png" width="auto" height="100px">
		  </a>
		</div>
	<div class="collapse navbar-collapse" id="myNavbar">

		<!-- Navbar Right -->
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="../BES/"><i class="fa fa-home fa-fw" aria-hidden="true"></i> Home</a></li>
		  <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-camera fa-fw" aria-hidden="true"></i> Services
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="services.php?pick=1">Graduation Photo</a></li>
			  <li class="divider"></li>
			  <li><a href="services.php?pick=2">Family Pictures</a></li>
			  <li class="divider"></li>
			  <li><a href="services.php?pick=3">Debut Coverage</a></li>
			  <li class="divider"></li>
			  <li><a href="services.php?pick=4">Kid's Party Coverage</a></li> 
			  <li class="divider"></li>
			  <li><a href="services.php?pick=5">Wedding Coverage</a></li>
			  <li class="divider"></li>
			  <li><a href="services.php?pick=6">Baptisim Coverage</a></li>
			  
			  
			</ul>
		  </li>
		  <li><a href="#"><i class="fa fa-picture-o fa-fw" aria-hidden="true"></i> Portfolio</a></li> 
		 <li><a href="#"><i class="fa fa-user-secret fa-fw" aria-hidden="true"></i> Our Team</a></li> 

				
			  <li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i> Sign in <span class="caret"></span></a>
				<ul id="login-dp" class="dropdown-menu">
					<li>
						 <div class="row">
								<div class="col-md-12">
									 <form class="form" role="form" method="post" action="modules/sql-connect/login.php" accept-charset="UTF-8" id="login-nav">
											
											<div class="form-group">
												<label for="name" class="cols-sm-2 control-label">Username</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>

														<input class="form-control" id="username" name="username" required="required" type="text" placeholder="Enter your Username"/>

													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label for="password" class="cols-sm-2 control-label">Password</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
													<input class="form-control" id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 

													</div>
												</div>
											</div>
											
											<div class="form-group">
												 <button type="submit" class="btn btn-primary btn-block" name="login" >Sign in</button>
							
											</div>
											<div class="checkbox">
												 <label>
												 <input type="checkbox"> keep me logged-in
												 </label>
											</div>
									 </form>
								</div>
								<div class="bottom text-center">
									New here ? <a  data-toggle="modal" href="#myModal">Register</a>
								</div>
						 </div>
					</li>
				</ul>
			</li>
		
		
		</ul>
		</div>
		</div>
	  </nav>
</div>
  
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registration Form</h4>
      </div>
		<div class="modal-body">
			<div class="modal-body">
				  <div class="row">
					<div class="col-md-6">
						<form class="form" role="form" method="post" action="modules/login.php" accept-charset="UTF-8" id="reg-nav">

						<div class="form-group">
						  <label for="fname">First Name:</label>
						  <input class="form-control" id="fname" name="fname" required="required" type="text" placeholder=""/>
						</div>
						<div class="form-group">
						  <label for="usr">Username:</label>
						  <input type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
						  <label for="usr">Password:</label>
						  <input type="password" class="form-control" id="usr">
						</div>
						 <div class="form-group ">
						  <label  for="date">
						   Birthdate:
						  </label>
						  
						  
						   <div class="input-group">
							<div class="input-group-addon">
							 <i class="fa fa-calendar">
							 </i>
							</div>
							<input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
						   </div>
						  
						 </div>
						<div class="form-group">
						  <label for="address">Address 1 :</label>
						  <input type="text" class="form-control" id="address">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="lname">Last Name:</label>
						  <input type="text" class="form-control" id="lname">
						</div>
						<div class="form-group">
						  <label for="email">E-mail:</label>
						  <input type="text" class="form-control" id="email">
						</div>
						<div class="form-group">
						  <label for="confirm_pass">Confirm Password:</label>
						  <input type="password" class="form-control" id="confirm_pass">
						</div>
						<div class="form-group">
						</div>
						
						<div class="form-group">
										<label for="email">Gender:</label>
										<br>
										<div class="radio-inline">
										<label><input type="radio" name="optradio" value="0">Male</label>
										</div>
										<div class="radio-inline">
										<label><input type="radio" name="optradio" value="1">Female</label>
										</div>
										</div>
					</div>
				  </div>
				  </form>
			</div>
		</div>
      <div class="modal-footer">
	    <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


