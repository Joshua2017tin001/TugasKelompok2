<?php
	session_start();
	if($_SESSION['name']!="admin"){
		header("Location:order.php");
		// print_r($_SESSION);
	}
	if($_SESSION['name']=="admin"){
		header("Location:table_admin.php");
		// print_r($_SESSION);
	} 
	if ($_SESSION['name']==""){
		header("Location:user.php");
	}
?>