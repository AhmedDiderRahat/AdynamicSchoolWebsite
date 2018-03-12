<?php 
	session_start();
	$db_host='localhost';
	$db_user='root';
	$db_password='';
	$db_name='school';
	$con=mysql_connect($db_host,$db_user,$db_password) or die ('Cannot connect to the database.');
	$db=mysql_select_db($db_name);
	echo "connect";
?>
