<?php
session_start();
error_reporting(1);
include("connection.php");
if(isset($_POST['log']))
{ if($_POST['id']=="" || $_POST['pwd']=="")
{ $err="fill your name and password first"; }
else 
{$d=mysql_query("select * from login where name='{$_POST['id']}' ");
$row=mysql_fetch_object($d);
$fid=$row->name;
$fpass=$row->password; 
if($fid==$_POST['id'] && $fpass==$_POST['pwd'])
{$_SESSION['sid']=$_POST['id'];
header('location:home.php'); }
else { $er=" your password is not"; }}
}
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Life Automobile</title>
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
				<a class="navbar-brand logo" href="index.php"><img src="img/logo.jpg" alt="logo"></a>
			</div>	 
		</div>
		
		
	</nav>
</div>

    <!--_______________________________________ Carousel__________________________________ -->
	<br><br><br><br><br><br>
<div class="log">

	<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
			
			 <div  class="contact-form">
   
                <h2>Admin Log In</h2>
                <form method="post" name="contact" action="#">
                      <div class="col_4 no_margin_right">
                        <label for="name">User Name:</label>
                        <input type="text" class="form-control name-form" name="id" />
                    </div>
                    <div class="col_4 no_margin_right">
                        <label for="pass">Password:</label>
                        <input type="password" class="form-control password-form" name="pwd"  />
                    </div>
              
                     
                    <div class="clear"></div>
                    
                     <input type="submit" name="log"  value="Log in"  />
                </form>
                	
				</div>
				
				</div>
				</div>
				
				</div>
				</div>
            	
       <br></br></br>
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	
	<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="img/logo1.png" alt="logo1"><span class="dotlogo">&bullet;;</span>
		</div>
		
		
		 
			<div class="footer">
				<div class="copyright">
				  &copy; Copy right 2016 | <a href="#">Privacy </a>| <a href="#">Policy</a>
				</div>
				<div class="atisda">
					 Designed by Nyan Lin Htet</a> 
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