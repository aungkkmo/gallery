<?php 
	require 'confs/dbconfig.php';
	require 'confs/auth.php';	
	session_start();

	$img=$_REQUEST['img'];

	mysql_query("SELECT FROM phototb WHERE file_path=$img");
	// echo "$img";
	$filenameOut = __DIR__ . '/uploads/' . basename($img);

	 // echo $filenameOut;
	// get_file

	if (file_exists($filenameOut)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($filenameOut).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filenameOut));
    readfile($filenameOut);
    exit;
}

	// header("Location:gallery.php");

	
 ?>