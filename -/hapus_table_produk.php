<?php
	session_start(); 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "phutea2";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
		
	if ($conn->connect_error) 
	{
    	echo("Connection failed: " . $conn->connect_error);
	}
	else
	{
		//echo "Connected successfully";	
	}
    $id = $_GET["id"];
	// $sql = "DELETE FROM tbproduk WHERE id = '$id' ; ";
    $sql = "DELETE FROM tbproduk WHERE id='$id'";
    // $data = $rows->fetch_assoc();
	
    if (mysqli_query($conn, $sql)) {
        // echo "Record deleted successfully";
        header("Location:table_admin.php");
      } else {
        // echo "Error deleting record: " . mysqli_error($conn);
        header("Location:table_admin.php");
      }
	$conn->close();
?>
