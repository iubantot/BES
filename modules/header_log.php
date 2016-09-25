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
	  		  <div class="navbar-brand">

		  </div>

		</div>
	<div class="collapse navbar-collapse" id="myNavbar">

		<!-- Navbar Right -->
		<ul class="nav navbar-nav navbar-left">
		  <li><a href="index.php"><i class="fa fa-home fa-fw" aria-hidden="true"></i> Home</a></li>
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
		  <li><a href="portfolio.php"><i class="fa fa-picture-o fa-fw" aria-hidden="true"></i> Portfolio</a></li> 
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
		 <li><a href="team.php"><i class="fa fa-user-secret fa-fw" aria-hidden="true"></i> Our Team</a></li> 

		  <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">
		  <?php
				//include 'modules/sql-connect/getImage.php';
				echo '<i><img src="modules/sql-connect/getImage.php?id='.$_SESSION['users_id'].'" class="img-circle" width="20" height="20"/> </i>';
			echo "Welcome, ".$_SESSION['userName'];
		  ?>
		  
		  <span class="caret"></span></a>
			<ul class="dropdown-menu">
			
			<?php
			$group = $_SESSION['groupID'];
			switch($group){
			case 1:?><li><a href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> Employee Panel</a></li>
			<?php
			break;
			case 2:?><li><a href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> Admin Panel</a></li>
			<?php
			break;
			}
			?>
			  <li><a href="account.php"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> My Account</a></li>

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


