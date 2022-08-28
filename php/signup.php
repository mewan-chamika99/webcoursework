<?php
//create a connectin

	$conn = mysqli_connect("localhost","root","","databasetest");
	if (!$conn) 
		{
 	 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		exit();
		}
		echo"database connected"; 
	
	$conn->close();
?>