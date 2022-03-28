<?php
    session_start();
    if ($_SESSION['sid']=="")
    {
        header('location:index.php');
    }
    else{
        ?>
        <?php
        error_reporting(1);
        include('connection.php');
        $img=$_FILES['img']['name'];
        $company=$_POST['com'];
        $series=$_POST['ser'];
        $price=$_POST['pri'];
        if($_POST['sub'])
        {
            $qry="INSERT INTO cars (img,company,series,price) VALUES ('$img','$company','$series','$price')";
            $result = mysql_query($qry) or die("save car fail.");

            if($result)
            {mkdir("image/$i");
                move_uploaded_file($_FILES['img']['tmp_name'],"image/$i/".$_FILES['img']['name']);

                
	    $err="<font size='+2'>Car uploaded successfully !!!</font>";
	
            }
            else
	 {
	   echo "Fail to upload";
	   }
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
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="home.php">HOME</a> </li>
				<li>
                    <a href="popular-car.php"> Upload Popular Car </a>
				</li>
				<li>
                    <a href="insert.php"> Upload New Cars </a>
				</li>
			</ul>
		</div>
	</nav>
</div>
    <!--_______________________________________ Carousel__________________________________ -->
	<div class="reg">
	<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
			
			 <div  class="contact-form">
                <h1>Add New Car</h1>
                
				<form   method="post" enctype="multipart/form-data" class="form-group group-coustume">
				
				<input type="file" name="img" class="form-control img-form" required>
				
				
				<input type="text" name="com" class="form-control name-form" placeholder="Company Name" required >

				
				<input type="text" name="ser" class="form-control name-form" placeholder="Car Series" required>

				
				<input type="text" name="pri" class="form-control name-form" placeholder="Car Price" required>

				<input type="submit" name="sub" value="Add New Car">

				
				
			</form>
			<h2><?php echo $err;?></h2>
				</div>
				
</div>
</div>

</div>
</div>
	
			



	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<div class="bottomlogo">
		<span class="dotlogo">&bullet;</span><img src="img/logo1.png" alt="logo1"><span class="dotlogo">&bullet;;</span>
		</div>
		
		<h2 align="center"> <font color="#d3b300">“It does not do to dwell on dreams and forget to live.”</font></h2>
		 <img src="img/line.png" alt="line"> <br>
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
<?php }  ?>

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>
