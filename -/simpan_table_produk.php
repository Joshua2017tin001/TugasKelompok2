<?php
    session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "phutea2";

	$conn = new mysqli($servername, $username, $password, $dbname);
		
    $id= $_POST['id'];
	$nama_produk = $_POST['nama_produk'];
	$harga_produk = $_POST['harga_produk'];
    $tipe_produk = $_POST['tipe_produk'];
    $gambar = $_FILES['foto_produk']['name'];
    $gambar_loc = $_FILES['foto_produk']['tmp_name'];
    $target_dir = $_SERVER["DOCUMENT_ROOT"]. "/finl/-/gambar/produk/";
    $ext = pathinfo($gambar, PATHINFO_EXTENSION);
    move_uploaded_file($gambar_loc,$target_dir.$gambar);
	if ($conn->connect_error) 
	{
    	echo("Connection failed: " . $conn->connect_error);
	}
	else
	{
			
	}
    if(empty($_POST["id"]))
    {
    $sql = "INSERT INTO tbproduk(nama_produk,harga_produk,tipe_produk,foto_produk) VALUES ('$nama_produk','$harga_produk','$tipe_produk','$gambar')";
    }else{
    $sql = "UPDATE tbproduk SET id = '".$id."',nama_produk='".$nama_produk."',harga_produk='".$harga_produk."',tipe_produk='".$tipe_produk."',foto_produk='".$gambar."' WHERE id = '".$id."'";
    }

    $result = mysqli_query($conn, $sql);
    if($result){
        // echo json_encode($result);
        header("Location:table_admin.php");
    } else{
        // echo   "err";
        header("Location:create_table_admin.php");
    }

	$conn->close();
?>