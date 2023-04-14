<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "phutea";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
		
	//Check connection
	/*if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";*/
	$id = $_SESSION['id'];
	if ($conn->connect_error) 
	{
    	echo("Connection failed: " . $conn->connect_error);
	}
	else
	{
		echo "Connected successfully";	
	}
	$sql = "DELETE FROM tbpesan WHERE id = '$id' AND status = 0;";
	if($conn->query($sql) == TRUE)
	{
		echo "Data update";
		header("Location:order.php");
	}
	else
	{
		echo "Erorr";
		//header("Location:tdkt.php");
	}
	$conn->close();
?>