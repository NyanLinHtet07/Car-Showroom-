<?php
				error_reporting(1);
	
				include("connection.php");
				$del="DELETE FROM popularcar WHERE img='{$_GET['img']}'";
				$result=mysql_query($del);
				unlink("images/".$_GET['img']);
				
				
				echo "<script>window.open('viewpopular.php','_self')</script>";
				
	?>