<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Life Automobile</title>
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

<!-- ____________________Featured Section ______________________________--> 
<br><br><br><br>
<div class="container-fluid">
<div class="allcontain">
<div class='feturedimage'>
<div class="latestcars">
	<h1 class="text-center">&bullet; MAZADA CAR SALES CENTER &bullet;</h1>
</div>
	
		<?php
					 error_reporting(1);
					 include("connection.php");
					
						$sel=mysql_query("select * from cars where company like 'mazda' ");

						$i=$arr['img'];
						
											
   echo"<form method='post'> ";
   
    while($arr=mysql_fetch_array($sel))
   {
	$i=$arr['img'];
   
					echo"
					<div class='col-lg-6 costumcol colborder1'>
				<div class='row costumrow'>
					<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon'>
					<img src='admin/image/$i' height='300' width='300'>
					</div>
					<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon'>
						<div class='txtcontant' align='center' style='color:goldenrod;font-weight:bold;font-size:18px;'>
						
							<h4 class='name' style='font-weight:bold;color:black;'><i class='fa fa-automobile'></i> Car Series:</h4>".$arr['company'].'&nbsp;- '.$arr['series'].
							 "<h4 class='name'style='font-weight:bold;color:black;'><i class='fa fa-dollar'></i> Price</h4>".$arr['price'].
							 "<h4 class='name'style='font-weight:bold;color:black;'><i class='fa fa-leaf'></i> Eco System</h4>".'<span> &nbsp; &nbsp; N/A</span>'.
							 "<h4 class='name'style='font-weight:bold;color:black;'><i class='fa fa-gears'></i> Engin Power</h4>".'<span> &nbsp; &nbsp; N/A</span>'.
							 "<br><a href='login.php?img=$i' class='bas'><i class='fa fa-shopping-basket'></i><b>Order</b></a><br>
							 
			 				
							
			 			</div>
					</div>
				</div><br>
				
				
			</div>";		
					
			}
		
			echo "</form>";
			?>
				</div>
			</div>
		</div>
	</div>

</div>

		
<!-- _______________________________News Letter ____________________-
	<div class="newslettercontent">
		<div class="leftside">
			<img src="image/border.png" alt="border">
			<h1>NEWSLETTER</h1>
			<p>Subscribe to the COLLECTIONCARS mailing list to <br>
				receive updates on new arrivals, special offers <br>
				and other discount information.</p>
		</div>
		<div class="rightside">
			<img class="newsimage" src="image/newsletter.jpg" alt="newsletter">
			<input type="text" class="form-control" id="subemail" placeholder="EMAIL">
			<button>SUBSCRIBE</button>
		</div>
	</div>-->
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