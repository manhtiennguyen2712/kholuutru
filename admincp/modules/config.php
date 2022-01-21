<?php
	$tenmaychu="localhost";
	$tentaikhoan="root";
	$pass="";
	$csdl="btlmnm";
	$con=mysqli_connect($tenmaychu,$tentaikhoan,$pass)or die('cant connect');
	mysqli_select_db($con,$csdl);
	//mysqli_query("set names 'utf8'");
?>