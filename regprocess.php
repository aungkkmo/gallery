<?php 
	require 'confs/dbconfig.php';
  
	$name=$_POST['name'];
	$password=$_POST['password'];
	
  
	$sql="INSERT INTO usertb(username,password) VALUES ('$name','$password')";
	mysql_query($sql) or die(mysql_error());
	sleep(1);
	header("location:login.php");
	

 ?>