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
	// $taro = $_POST['taro'];
	// $bgum = $_POST['bgum'];
	// $gre = $_POST['gre'];
	// $tgre = $_POST['tgre'];
	// $tthai = $_POST['tthai'];
	// $thai = $_POST['thai'];
	$id = $_SESSION['id'];
	$produk_id = $_POST['produk_id'];
	$jumlah_produk = $_POST['jumlah_produk'];
	$nmajln = $_POST['nmajln'];
	$kota = $_POST['kota'];
	$camat = $_POST['camat'];
	$lurah = $_POST['lurah'];
	$rtrw = $_POST['rtrw'];
	$kdpos = $_POST['kdpos'];
	//$nma = $_SESSION['name'];
	// print_r($jumlah_produk);
	if ($conn->connect_error) 
	{
    	echo("Connection failed: " . $conn->connect_error);
	}
	else
	{
		//echo "Connected successfully";	
	}
	
	// }
	$i=0;
	// print_r($jumlah_produk);
	foreach($produk_id as $value){
		foreach($jumlah_produk as $value_jumlah_produk){
			// for ($i=0; $i>=count($produk_id); $i++){$i++;}
			$sql = "INSERT INTO tbpesan(tbproduk_id,jumlah_produk,jalan,kota,kecamatan,kelurahan,rtrw,kodepos,status,user_id,kodepesanan) VALUES ('$value','$jumlah_produk[$i]','$nmajln','$kota','$camat','$lurah','$rtrw','$kdpos','unpaid','$id','$i')";
			
		}
		mysqli_query($conn,$sql);
		$i++;
	}


	// if($conn->query($sql) == TRUE)
	// {
	// 	echo "Data update";
	// 	header("Location:order.php");
	// }
	// else
	// {
	// 	echo "Eror";
	// 	//header("Location:tdkt.php");
	// }
	header("Location:order.php");
	$conn->close();
?>