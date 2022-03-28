<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Life Automobile </title>
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
	<div class="header" data-role="header" data-position="fixed">
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
</div><br><br><br>


    <!--_______________________________________ Carousel__________________________________ -->
    <form method="post">
    <div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
    
	<?php

error_reporting(1);
	
include("connection.php");
if($_POST['sub'])
{ 
$name=$_POST['n'];
$email=$_POST['e'];
$phone=$_POST['ph'];
$password=$_POST['pass'];
$address=$_POST['add'];

if(mysql_query("insert into register(name,email,phone,password,address) values('$name','$email','$phone','$password','$address')"))
{

header("location:reg_success.php?name=$name & email=$email");}

else {$error= "user already exists";}}

?>
		<div class="reg">
		<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
			
			 <div  class="contact-form">
            <form  method="post"  class="form-group group-coustume">
			<h3>REGISTER FORM</h3>
			  
			  <label for="name">Name</label>
				<input type="text" name="n" class="form-control name-form"placeholder="NAME" required>
				
			  <label for="email">E-mail</label>
                <input type="email" name="e" class="form-control email-form" placeholder="E-MAIL" required/>
				
			<label for="password">Password</label>
                <input type="password" name="pass" class="form-control password-form" placeholder="PASSWORD" required/>
				
			<label  for="phone">Phone Number</label>
                <input type="text" name="ph" class="form-control phone-form" placeholder="PHONE NUMBER" required/>
				
			<label for="address">Address</label>
			
				 <textarea class="form-control name-form" name="add"></textarea>
				
                <input type="submit" name="sub" id="sub" value="Register"  />
				<span> <a href="index.php">Cancel</a></span>
				<label><?php echo "<font color='red'>$error</font>";?></label>
            </form>
			</div>
</div>

</div>
</div>
		
			</div>
			
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<div class="bottomlogo">
		<!--<span class="dotlogo">&bullet;</span><img src="images/logo1.png" alt="logo1"><span class="dotlogo">&bullet;;</span>-->
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