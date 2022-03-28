<?php
	include('connection.php');
$sql = mysql_query("DELETE from orders where order_id='{$_GET['order_id']}'");
header("location:vieworder.php");



?>