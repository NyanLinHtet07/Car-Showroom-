<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>lifeautomobile</title>
	<meta name="description" content="">
<!--

Template 2079 Garage

http://www.tooplate.com/view/2079-garage

-->
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
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="images/bgc8.jpg" >
				<div class="carousel-caption">
					
				</div>
			</div>
			<div class="item">
				<img src="images/bgc5.jpg">
				<div class="carousel-caption">
					
				</div>
			</div>
			<div class="item">
				<img src="images/bgc6.jpg" >
				<div class="carousel-caption">
					
				</div>
			</div>
		</div>
		
	</div>
</div>
<!-- ____________________Featured Section ______________________________--> 
<br><br>
					
						
<div class="container-fluid">
	<div class="allcontain">
		<div class='feturedimage'>
			<div class="latestcars">
				<h1 class="text-center">&bullet; MOST POPULAR CARS &bullet;</h1>
			</div>
	
		

				<?php
					 error_reporting(1);
					 include("connection.php");
					
						$sel=mysql_query("select * from popularcar ");

						$i=$arr['img'];
						
											
   echo"<form method='post'> ";
   
    while($arr=mysql_fetch_array($sel))
   {
	$i=$arr['img'];
   
					echo"
					
							
			<div class='col-lg-6 costumcol colborder1'>
				<div class='row costumrow'>
					<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon'>
					<img src='admin/images/$i' height='300' width='300'>
					</div>
					<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon '>
						<div class='txtcontant' align='center' style='color:goldenrod;font-weight:bold;font-size:18px;'>
						
							<h4 class='name' style='font-weight:bold;color:black;'><i class='fa fa-automobile'></i> Car Series:</h4>".$arr['company'].'&nbsp;- '.$arr['series'].
							 "<h4 class='name'style='font-weight:bold;color:black;'><i class='fa fa-dollar'></i> Price</h4>".$arr['price'].
							 "<h4 class='name'style='font-weight:bold;color:black;'><i class='fa fa-leaf'></i> Eco System</h4>".'<span> &nbsp; &nbsp; N/A</span>'.
							 "<h4 class='name'style='font-weight:bold;color:black;'><i class='fa fa-gears'></i> Engin Power</h4>".'<span> &nbsp; &nbsp; N/A</span>'.
							 "<br><a href='login1.php?img=$i' class='bas'><i class='fa fa-shopping-basket'></i><b>Order</b></a><br>
							 
			 				
							
			 			</div>
					</div>
				</div><br>
				
				
			</div>";
			}
		
			echo "</form>";
			?>
			
				<div class="icon"><a href="car.php"><i class="fa fa-binoculars"></i> View More Cars</a></div>
			</div>
		</div>
	</div>
			
<hr>
<div class="aside1">
                		<h2 style="font-size:50px; text-shadow:2px 2px 2px red;">Main Partner With<h2>
						<a href="toyota.php"><img src="images/toyota.jpg" class="image"></a>
						<a href="mercedes.php"><img src="images/mercedes.jpg" class="image"></a>
						<a href="mazda.php"><img src="images/mazda.png" class="image"></a>
						<a href="suzuki.php"><img src="images/suzuki.png" class="image"></a>
						<a href="ford.php"><img src="images/Ford.png" class="image"></a>
					</div>   <hr>	


	<!-- ______________________________________________________Bottom Menu ______________________________-->
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