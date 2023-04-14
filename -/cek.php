<?php
	session_start();
	if($_SESSION['name']==""){
		header("Location:user.php");
		// print_r($_SESSION);
	}
	else{
		header("Location:order.php");
		// print_r($_SESSION);
	}
?>