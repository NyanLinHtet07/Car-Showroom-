<?php
	include('connection.php');
$sql = mysql_query("DELETE from register where user_id='{$_GET['user_id']}'");
header("location:viewreg.php");

?>