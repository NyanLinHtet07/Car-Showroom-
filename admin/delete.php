<?php
	include('connection.php');
$sql = mysql_query("DELETE from feedback where user_id='{$_GET['user_id']}'");
header("location:viewfeedback.php");

?>