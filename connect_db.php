<?php
//connect to db dump
$host = "mysql.hostinger.com.ua";
$user = "xxxxxxxxxxxx";
$password = "xxxxxxxxxxxx";
$db_name = "xxxxxxxxxxxx";
$db_table_to_show = 'distination';
$mysqli = @new mysqli($host, $user, $password, $db_name);

$connect = mysql_connect($host,$user,$password);		
	mysql_select_db($db_name,$connect) or die(mysql_error());
		
?>