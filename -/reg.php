<?php
	session_start();
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
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$nama = $_POST['nama'];
	$tlp = $_POST['tlp'];
	$mails = $_POST['mails'];

	if ($conn->connect_error) 
	{
    	echo("Connection failed: " . $conn->connect_error);
	}
	else
	{
		//echo "Connected successfully";	
	}
	$sql = "SELECT * FROM tblogin WHERE id = '$user';";
	$rows = $conn->query($sql);
	if($rows->num_rows>0)
	{
		//echo "Login!";
		echo "data ada orang";
	}
	else
	{
			$sql = "INSERT INTO tblogin(username,pass,nama,telp,email) VALUE('$user', '$pass', '$nama', '$tlp', '$mails');";
			if($conn->query($sql) == TRUE)
			{
				echo "Data update";
				header("Location:cek.php");
			}
			else
			{
				echo "Erorr";
				header("Location:tdkt.php");
			}
			$conn->close();
	}
	$conn->close();
?>