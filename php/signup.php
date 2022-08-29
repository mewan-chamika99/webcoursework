<?php
//create a connectin

	$conn = mysqli_connect("localhost","root","","databasetest");
	if (!$conn) 
		{
 	 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		exit();
		}
		$name =$_POST['uname'];
		$password =$_POST['pass'];

		//display username oassword
		// echo "{$password} : {$name}";

		//insert data into the DB
		 $sql = "INSERT INTO goldenmewa(username, password) VALUES ('$name','$password')";

			
		 
		if ($conn->query($sql) === TRUE) {
		  echo "<br><br> you are signup successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	
	$conn->close();
?>