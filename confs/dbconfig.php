<?php 
	
  $dbhost="localhost";
  $dbuser="test";
  $dbpass="";
  $dbname="gallery";
  $conn=mysql_connect($dbhost,$dbuser,$dbpass) or die("Database can't connect");
  mysql_set_charset('utf8',$conn);
  mysql_select_db($dbname,$conn);


 ?>