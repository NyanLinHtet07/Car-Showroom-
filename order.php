<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if($_POST['send'])
{ 
$carname=$_POST['carname'];
$price=$_POST['price'];
$name=$_POST['name'];
$phone=$_POST['ph'];
$address=$_POST['add'];
$ord_no=ord.rand(1000,5000);
if(mysql_query("insert into orders (carname,price,name,mobile,address,order_no) values ('$carname','$price','$name','$phone','$address','$ord_no')"))
{

header("location:ordersent.php?order_no=$ord_no & name=$name & carname=$carname");
 }
else {$error= "user already exists";}}

?>

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
<body class="b">
<!-- Header -->
<div class="allcontain">
	<div class="header" data-role="header" data-position="fixed">
			<ul class="socialicon">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
				<li><a href="#"><i class="fa fa-search"></i></a></li>
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
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Car Sell Center <span class="caret"></span></a>
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
	<div class="order">
	<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
			
			 <div  class="contact-form">
            <form  method="post"  class="form-group group-coustume">
        <?php
			include("connection.php");
			$sel=mysql_query("select * from cars  where img='$i' ");
			$mat=mysql_fetch_array($sel);
			
			$car ="<img src='admin/image/$i' class='img'>";
			
			?>
		
            
				
		<div class="">
		<h3>Order Detail</h3>
		<div class="div1">
			<h4  style="text-align: center;" id="h4">!!! Confirmation Alert !!!</h4>
			<p>If your order is confirmed, please fills requirment.</p>
			<p>Or,if you want to cancel your order press <a href="index.php">"cancel"</a>.  </p>
			</div><br><br>
			
			<?php echo $car; ?>
			<br>
			
			
		</div>
 				<label>Car Model</label>
				<input type="text" name="carname" class="form-control name-form" value="<?php echo $mat['company'];?> <?php echo $mat['series'];?>" readonly >
				<label>Price :</label> 
				<input type="text" name="price" class="form-control name-form" value="<?php echo $mat['price'];?>" readonly >
				 <label>Owner Name : </label>
				<input type="text" name="name" placeholder="name" class="form-control name-form"  class="input_field" />
				 <label>Phone Number : </label>
                <input type="text" name="ph" placeholder="09*********"class="form-control name-form"  class="input_field"  />
				 <label>Address</label>
				 <textarea class="form-control name-form" name="add"  class="input_field" ></textarea>
				 
                <input type="submit" name="send"  value="sent order"  />
				 <a href="index.php"><input type="submit" name="Cancel" value="Cancel"  /></a>
				
				 
            </form>
            
        
</div>
</div>

</div>
</div>
		
			</div>
			
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<!--<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="images/logo1.png" alt="logo1"><span class="dotlogo">&bullet;;</span>
		</div>-->
		
		<h2 align="center"> <font color="#d3b300">???It does not do to dwell on dreams and forget to live.???</font></h2>
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