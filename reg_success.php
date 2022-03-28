<?php
	error_reporting(1);
	
	include("connection.php");
	
	if($_REQUEST['log']=='out')
	{
		session_destroy();
		header("location:index.php");
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>lifeautomobile</title>
	<meta name="description" content="">

	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>
<body>
<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<ul class="givusacall">
				<li>Give us a call : +95250015864 </li>
			</ul>
			<ul class="logreg">
				
				<li><a href="register.php"><span class="register">Register</span></a></li>
			</ul>
	</div>
	<!-- Navbar Up -->
	<nav class="topnavbar navbar-default topnav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
					<span class="sr-only"> Toggle navigaion</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo" href="index.php"><img src="images/logo.jpg" alt="logo"></a>
			</div>	 
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="index.php">HOME</a> </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Car Sales Center <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume">
						<li><a href="car.php">All Car Categories</a></li>
						<li><a href="toyota.php">Toyota Categories</a></li>
						<li><a href="suzuki.php">Suzuki Categories</a></li>
						<li><a href="mazda.php">Mazda Categories</a></li>
						<li><a href="ford.php">Ford Categories</a></li>
						<li><a href="mercedes.php">Mercedes Categories</a></li>
					</ul>
				</li>
				
				<li>
					<a href="contact.php">CONTACT Us</a>
 
				</li>
				<li>
					<a href="about.php">About Us</a>
 
				</li>
			</ul>
		</div>
	</nav>
</div>

<div class="succ">
		<div class="contact">
		<div class="newslettercontent">
			
			
<h3>Congratulations!!! <br> <?php echo "<font color=gold>".$_REQUEST['name']."</font>"; ?> </h3>
	 
			<br>
			<p>You have created your account successfully!!!</p><br>
			
			<p>Thank you for registration.</p>
			<p style="font-size: 20px; text-align:center;"><a href="?log=out">Go back</a></p>
</div>
</div>
</div>

<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="images/logo1.png" alt="logo1"><span class="dotlogo">&bullet;;</span>
		</div>
		
		<h2 align="center"> <font color="#d3b300">“It does not do to dwell on dreams and forget to live.”</font></h2>
		 <img src="images/line.png" alt="line"> <br>
		 <div class="bottomsocial">
		 	<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-pinterest"></i></a>
		</div>
			<div class="footer">
				<div class="copyright">
				  &copy; Copy right 2020 | <a href="#">Privacy </a>| <a href="#">Policy</a>
				</div>
				<div class="atisda">
					 Designed by <a href="#">Nyan Lin Htet </a> 
				</div>
			</div>
	</div>
</div>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>