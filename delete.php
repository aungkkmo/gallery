<?php 
	require 'confs/auth.php';
	require 'confs/dbconfig.php';

	$getImg=$_REQUEST['img'];
	$img=mysql_real_escape_string($getImg);
	

	$file=__DIR__.'/uploads/'.$img;

	
	$sql="DELETE FROM phototb WHERE photo_name='$img'";
	mysql_query($sql) or die("Database Error" . mysql_error());
	mysql_close();

	unlink($file);
	
	header("Location:gallery.php?$request_uri");

 ?>
 