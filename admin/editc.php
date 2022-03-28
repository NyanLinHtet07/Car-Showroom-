<?php 
error_reporting(1);
include('connection.php');
$sql=mysql_query("select * from cars where series='{$_GET['series']}'");
$row=mysql_fetch_array($sql);

extract($_POST); 
if($upd)
{
mysql_query("update cars set  company='$company',price='$price' where series='{$_GET['series']}'");
header('location:viewcar.php');
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
				<a class="navbar-brand logo" href="home.php"><img src="img/logo.jpg" alt="logo"></a>
			</div>	 
		</div>
		
	</nav>
</div>
<div class="ords">
	<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
			
			 <div  class="contact-form">
    <form method="post" enctype="multipart/form-data">
	
        <label for="company">Company Name</company>
            <input type="text" class="form-control name-form" readonly="readonly" name="company" value="<?php echo $row['company'];?>"/><br>
      
            <label for="series">Series</label>
           <input readonly="readonly" class="form-control name-form" value="<?php echo $row['series'];?>" type="text" name="series"/><br>
       
            <label for="price">Price</label>
			<input value="<?php echo $row['price'];?>" type="text" name="price" class="form-control name-form"><br>
			
			
            
            <input type="submit" value="Update" name="upd"/>
            
        </form>
        </div>
				
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