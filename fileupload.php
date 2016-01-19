<?php 

	require 'confs/auth.php';
	require 'confs/dbconfig.php';
	session_start();
	

	$username=mysql_real_escape_string($_SESSION['user']);
	
	if(isset($_POST["submit"])) {
	    $image_name=$_FILES['image']['name'];
	    $image_type=$_FILES['image']['type'];
	    $image_size=$_FILES['image']['size'];
	    $image_tmp_name=$_FILES['image']['tmp_name'];

	    if($image_name==null){
	    	sleep(1);
	    	
	    	header("Location:gallery.php?s=nofile");
	    }else{
	    	move_uploaded_file($image_tmp_name, "uploads/$image_name");
	    	

	    	$sql="INSERT INTO phototb(photo_name, uploaded_by, uploaded_date, file_path)VALUES('$image_name','$username',now(),'$image_name')";
			mysql_query($sql) or die(mysql_error());

			sleep(1);
	    	header("Location:gallery.php");
	    }

}
	
 ?>