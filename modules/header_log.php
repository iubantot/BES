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
		  <a class="navbar-brand" href="../bes%20v1.0/">
		  <img src="../bes%20v1.0/img/logo.png" width="auto" height="100px">
		  </a>
		</div>
	<div class="collapse navbar-collapse" id="myNavbar">

		<!-- Navbar Right -->
		<ul class="nav navbar-nav navbar-right">
		  <li><a href="index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i> Home</a></li>
		  <li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-camera fa-fw" aria-hidden="true"></i> Services
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="services.php">Graduation Photo</a></li>
			  <li class="divider"></li>
			  <li><a href="#">Family Pictures</a></li>
			  <li class="divider"></li>
			  <li><a href="#">Debut Coverage</a></li>
			  <li class="divider"></li>
			  <li><a href="#">Kid's Party Coverage</a></li> 
			  <li class="divider"></li>
			  <li><a href="#">Wedding Coverage</a></li>
			  <li class="divider"></li>
			  <li><a href="#">Baptisim Coverage</a></li>
			  
			  
			</ul>
		  </li>
		  <li><a href="#"><i class="fa fa-picture-o fa-fw" aria-hidden="true"></i> Portfolio</a></li> 
		 <li><a href="#"><i class="fa fa-user-secret fa-fw" aria-hidden="true"></i> Our Team</a></li> 

		  <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">
		  <?php
		  
			echo "Welcome, ".$_SESSION['userName'];
		  ?>
		  <i class="fa fa-user fa-fw" aria-hidden="true"></i>
		  <span class="caret"></span></a>
			<ul class="dropdown-menu">
			
			<?php
			$group = $_SESSION['groupID'];
			if( $group > 0){
			?>
			<li><a href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> Admin Panel</a></li>
			<?php
			}
			?>
			  <li><a href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> My Account</a></li>
			  <li><a href="#"><i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i> Orders</a></li>
			  <li class="divider"></li>
			  <li><a href="modules/logout.php"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Sign-Out</a></li>
			  <li class="divider"></li>

			  
			  
			</ul>
		  </a></li> 
		</ul>
		</div>
		</div>
	  </nav>
</div>
  


  </div>
</div>


