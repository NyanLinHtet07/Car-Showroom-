<?php
    session_start();
        if($_SESSION['sid']== "")
        {
            header('location:index.php');
        }
        else{
?>
<!doctype html>
<html class="no-js " lang="en">


<head>
<meta charset="utf-8">

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<title>lifeautomobile</title>
<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
<link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css"/>

<link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">
<!-- Css -->

	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>

<body class="theme-blush">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/loader.svg" width="48" height="48" alt="Aero"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Main Search -->


<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="home.php"><img src="assets/images/logo.svg" width="25" alt="Aero"><span class="m-l-10">Lifeautomobile</span></a>
    </div>
   
    <div class="menu">
        <ul class="list">
           
            <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i> Change Theme Color </a></li>
            <li class="active open"><a href="home.php"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Upload New Car</span></a>
                <ul class="ml-menu">
                    <li><a href="popular-car.php"><i class="zmdi zmdi-upload"></i><span>Upload Popular Cars</span></a></li>
                    <li><a href="insert.php"><i class="zmdi zmdi-upload"></i><span>Upload New Cars</span></a></li>
                                      
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Check Car List</span></a>
                <ul class="ml-menu">
                    <li><a href="viewpopular.php"><i class="zmdi zmdi-directions-car"></i><span>View Popular Cars </span></a></li>
                    <li><a href="viewcar.php"><i class="zmdi zmdi-directions-car"></i><span>View Car List</span></a></li>
                    
                </ul>
            </li>
            
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment-account"></i><span>User Pannel</span></a>
                <ul class="ml-menu">
                    <li><a href="viewreg.php"><i class="zmdi zmdi-face"></i><span>User Dashboard</span></a></li>
                    <li><a href="viewfeedback.php"><i class="zmdi zmdi-email"></i><span>User Feedback</span></a></li>
                    <li><a href="vieworder.php"><i class="zmdi zmdi-eye"></i><span>Order List</span></a></li>
                </ul>
            </li>
            <li><a href="logout.php"><i class="zmdi zmdi-close"></i><span>Logout</span></a></li>
            
           
        </ul>
    </div>
</aside>



<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs sm">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
       
    </ul>
    
    <div class="tab-content">
        <div class="tab-pane active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Theme Option</h6>
                    <div class="light_dark">
                        <div class="radio">
                            <input type="radio" name="radio1" id="lighttheme" value="light" checked="">
                            <label for="lighttheme">Light Mode</label>
                        </div>
                        <div class="radio mb-0">
                            <input type="radio" name="radio1" id="darktheme" value="dark">
                            <label for="darktheme">Dark Mode</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Color Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush" class="active"><div class="blush"></div></li>
                    </ul>                                        
                </div>
                        
            </div>                
        </div>       
        
            </div>
        </div>
    </div>
</aside>
    <!--_______________________________________ Carousel__________________________________ -->
	<section class="content">
    <div class="">
        <div class="block-header">
        
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="home.php"><i class="zmdi zmdi-home"></i> Life Automobile</a></li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-6 col-md-10 col-sm-12">
                        <marquee style="font-size: 20px; color:red; font-weight:bold; text-shadow:2px 2px #000000">Welcome Admin !!! You can control anything from our site</marquee>
                </div>
            </div>
        </div>
	</div>
	<br><br>
				

<!-- edit start-->
            
<div class="container-fluid">
            <div class="row clearfix">
			
            <div class="col-sm-12">
                    <div class="card">
                        <div class="header" style="text-align: center; text-shadow:2px 2px 2px gold; background-color:white;">
                            <h1><strong>View</strong> Car List </h1>
                           
                        </div>
                        <div class="table-responsive social_media_table">

                            <form method="post">
                            <table class="table table-hover c_table">
                       
                                <thead>
                                    <tr>
                                        
                                        <th>Our Cars </th>
                                        <th>Company</th>
                                        <th>Car Series</th>
                                        <th>Price</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        
                                    </tr>
                                </thead>
                                <?php
                                    error_reporting(1);
                                    include('connection.php');
                                   $sel = mysql_query("SELECT * from cars");
                                   $i=$row['img'];
                                   while($row = mysql_fetch_array($sel))
                                   {
                                    $i=$row['img'];
                                       $car ="<img src='image/$i' style='max-width:200px;' 'max-height:200px;'>";
                                       $com = $row['company'];
                                       $ser = $row['series'];
                                       $pri =$row['price'];
                                       
                                     
                                       ?>
                                       <tbody>
                                           <tr>
                                          
                                           <th><?php echo $car;?></th>
                                           <th><?php echo $com; ?></th>
                                           <th><?php echo $ser;?></th>
                                           <th><?php echo $pri;?></th>
                                           
                                           <th><a href='editc.php?series=<?php  echo "$ser"; ?>'><i class="zmdi zmdi-edit"></i></a></th>
                                           <th><a href='deletec.php?img=<?php echo "$i";?> & series=<?php  echo "$ser"; ?>'>
                                           <i class="zmdi zmdi-delete"></i></a></th>
                                          
                                           </tr>
                                       </tbody>
                                   <?php }?>
                                   



                            
                            </table>
                                   </form>
                        </div>
                    </div>
                </div>            
			</div>  
		</div>      
		</section>
        <?php } ?>			
       
	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>


</html>