<?php
				error_reporting(1);
	
				include("connection.php");
				$del="DELETE FROM cars WHERE img='{$_GET['img']}'";
				$result=mysql_query($del);
				unlink("image/".$_GET['img']);
				
				
				echo "<script>window.open('viewcar.php','_self')</script>";
				
	?>