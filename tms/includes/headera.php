<?php if($_SESSION['login'])
{?>
<div class="top-header">
	<div class="container">
		
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Welcome :</li>				
			<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
			<li class="sigi"><a href="logout.php" >/ Logout</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="admin.php"><i class="fa fa-home"></i></a></li>
				<li class="hm"><a href="admin.php">Admin Login</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Tel Number : +254-0708654469</li>				
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>

<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php"><span>KARA Tours Management System</span></a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp; SECURE </div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="viewusers.php">View Users</a></li>
								<li><a href="managedestinations.php">Manage Destinations</a></li>
								<li><a href="managehotels.php">Manage Hotels</a></li>
								<li><a href="managebookings.php">Manage Bookings</a></li>
								<li><a href="managereservations.php">Manage Reservations</a></li>
								<li><a href="billing.php">Manage Bills</a></li>

								
								<?php if($_SESSION['login']) {?>

								<li><a href="#" data-toggle="modal" data-target="#myModal3"> / Feedbacks </a>  </li>
								<?php } else { ?>
								
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div>	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
