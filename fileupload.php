<?php 
	session_start();
	require 'confs/auth.php';
	require 'confs/dbconfig.php';

	$username=$_SESSION['user'];
	
	if(isset($_POST["submit"])) {
	    $image_name=$_FILES['image']['name'];
	    $image_type=$_FILES['image']['type'];
	    $image_size=$_FILES['image']['size'];
	    $image_tmp_name=$_FILES['image']['tmp_name'];

	    if($image_name==null){
	    	echo "<script>alert('Please select an image')</script>";
	    	exit();
	    }else{
	    	move_uploaded_file($image_tmp_name, "uploads/$image_name");
	    	

	    	$sql="INSERT INTO phototb(photo_name, uploaded_by, uploaded_date, filepath)VALUES('$image_name','$user',now(),'$image_name')";
			mysql_query($sql);







	    	header("Location:gallery.php");
	    }

}
	
 ?>