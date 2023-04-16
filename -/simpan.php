<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "phutea2";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
		
	//Check connection
	/*if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";*/
	$username = $_POST['user'];
	$pass = $_POST['pass'];
	if ($conn->connect_error) 
	{
    	echo("Connection failed: " . $conn->connect_error);
	}
	else
	{
		// echo "Connected successfully";	
	}
	$sql = "SELECT * FROM tblogin WHERE username = '$username' AND pass = '$pass'";
	$rows = $conn->query($sql);
	if($rows->num_rows>0)
	{
		//echo "Login!";
		session_start();
		$a = $rows->fetch_assoc();
		$_SESSION['name']= $a['nama'];
		$_SESSION['username'] = $a['username'];
		$_SESSION['id'] = $a['id'];
		header("Location:cek.php");
	}
	else
	{
		//echo "ID tak terdaftar";
		 header("Location:tdkt.php");
	}
	$conn->close();
?>