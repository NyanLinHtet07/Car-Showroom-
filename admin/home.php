<?php
    session_start();
    if($_SESSION['sid']=="")
{
    header('location:index.php');
}
else{
?>
<?php
            include("connection.php");
            $query=mysql_query("SELECT * From orders");
            $total_order= mysql_num_rows($query);
            ?>

<?php
            include("connection.php");
            $query=mysql_query("SELECT * From register");
            $total_reg= mysql_num_rows($query);
            ?>
<?php
            include("connection.php");
            $query=mysql_query("SELECT * From feedback");
            $total_feed= mysql_num_rows($query);
            ?>
<?php
            include("connection.php");
            $query=mysql_query("SELECT * From cars");
            $total_car= mysql_num_rows($query);
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


	
<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
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

<!-- Main Content -->

<section class="content">
    
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

        

    <div class="row clearfix">
        
                <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="home.php">
                    <div class="card mcard_4">
                        <div class="body">
                           
                            <div class="img">
                                <img src="assets/images/admin.png" class="rounded-circle" alt="profile-image">
                            </div>
                            <br><br>
                            <div class="user">
                                <h4 class="mt-3 mb-1">ADMIN</h4><br>
                                <middle class="text-muted">Lifeautomobile</middle>
                            </div>
                            
                        </div>
                    </div>
                    </a>     
                </div>
                      
                <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="vieworder.php"> 
                    <div class="card w_data_1">
                       <div class="body">
                            <div class="w_icon green"><i class="zmdi zmdi-eye"></i></div>
                           <br>
                            <h4 class="mt-3 mb-1">View Order List</h4>
                            
                        </div>
                    </div>
                </a>
                <a href="viewreg.php">
                    <div class="card w_data_1">
                        <div class="body"  style="background-color:#a1a349;">
                            <div class="w_icon cyan"><i class="zmdi zmdi-face"></i></div>
                            <br><br>
                            <h4 class="mt-3 mb-1">View User</h4>
                           
                            
                        </div>
                    </div>
               
                </div>
                </a>
                
                <div class="col-lg-6 col-md-12 col-sm-12">
                <a href="viewcar.php">
                    <div class="card">
                    <div class="card w_data_1">
                        <div class="body" style="background-color:#9b1f1f;">
                            
                            <div class="chat-widget">
                            <br><br>
                            <div class="w_icon cyan"><i class="zmdi zmdi-directions-car"></i></div>
                            <br><br>
                            <h1 class="mt-3 mb-1">Check Our Car List</h1>
                            </div>
                        </div>
                        </div>
                    </div>
                    </a>
                </div>
                
            </div>
            <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-6">

            <div class="card w_data_1">
                       <div class="body"  style="background-color: #653aab; color:white;">
                            <div class="w_icon green"><i class="zmdi zmdi-eye"></i></div>
                            <h1><?php echo $total_order;?></h1>
                            <h4 class="mt-3 mb-1">Total Order </h4>
                            
                        </div>
                    </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">

<div class="card w_data_1">
           <div class="body"  style="background-color: #8c0b5f; color:white;">
                <div class="w_icon green"><i class="zmdi zmdi-face"></i></div>
                <h1><?php echo $total_reg;?></h1>
                <h4 class="mt-3 mb-1">Total User </h4>
                
            </div>
        </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
<div class="card">
<div class="card w_data_1">
           <div class="body"  style="background-color: #0f6f7a; color:white;">
                <div class="w_icon green"><i class="zmdi zmdi-email"></i></div>
                <h1><?php echo $total_feed;?></h1>
                <h4 class="mt-3 mb-1">Total Feedback </h4>
                
            </div>
        </div>
</div>
</div>   

<div class="col-lg-3 col-md-6 col-sm-6">
<div class="card">
<div class="card w_data_1">
           <div class="body"  style="background-color: #356b00; color:white;">
                <div class="w_icon green"><i class="zmdi zmdi-directions-car"></i></div>
                <h1><?php echo $total_car;?></h1>
                <h4 class="mt-3 mb-1">Total Cars </h4>
                
            </div>
        </div>
</div>
</div>   
</div>   
</section>

<?php }?>


<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>


</html>