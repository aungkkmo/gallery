<?php
	require 'confs/dbconfig.php';
	require 'confs/auth.php';
	session_start();
	

	$name=$_POST['name'];
	$password=$_POST['password'];

	 // echo "$name $password";
	//$host="localhost";
	//$user="test";
	//$pwd="";
	//$dbname="gallery";


	// $con=mysql_connect($host,$user,$pwd) or die("Failed" . mysql_error());
	// mysql_select_db($dbname,$con);
	$result=mysql_query("SELECT * FROM usertb where username='$name'");
	$row = mysql_fetch_array($result);
			//echo $row['u_name'];
		if($row["username"]==$name && $row["password"]==$password){
				$_SESSION['auth']=true;
				$_SESSION['user']=$row['username'];
				header("Location:gallery.php");
			}
		else{
			header("Location:login.php?state=1");
		}
				
	
