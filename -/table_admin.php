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
	//$id = $_SESSION['id'];
	if ($conn->connect_error) 
	{
    	echo("Connection failed: " . $conn->connect_error);
	}
	else
	{
		//echo "Connected successfully";	
	}
	$sql = "SELECT * FROM tbproduk";
	$rows = $conn->query($sql);
	// if($rows->num_rows>0)
	// {
	// 	//echo "Login!";
	// 	header("Location:cekpsn.php");
	// }
	// else
	// {
	// 	//echo "ID tak terdaftar";
	// }
	$conn->close();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Phu Tea</title>
<?php include 'header.php' ?>
</head>

<body>
	<div class="container">
        <div class="col-12">
        	<?php include 'navbar.php' ?>
        </div>
        <div class = "col-12 p-0">
			<h1 class="text-center bgorange clblack walt m-0">Table Produk</h1>
		</div>
    	<div class="row">
        	<div class="col-lg-3 col-12">
            	<div class="col-12 d-flex flex-row flex-wrap bgorange">
                    <!-- <h1 class="walt w-100">Welcome, <?php echo $_SESSION['nama']; ?></h1> -->
                    <a href="create_table_admin.php" class="w-100 text-center"><button class="w-100 btn btn-primary">Tambah Produk</button></a>
                    <a href="lgout.php" class="w-100 text-center"><button class="w-100">Logout</button></a>
               	</div>
            </div>
        	<div class="col-lg-9 col-12 d-flex flex-row flex-wrap justify-content-center">
            <table class="table table-hover text-white bg-dark">
                <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Tipe Produk</th>
                    <th>Gambar Produk</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody class="text-white">
                <?php
                foreach($rows as $value) {
                ?>
                <tr>
                    <td>
                        <?php echo $value["nama_produk"];?>
                    </td>
                    <td>
                        <?php echo $value["harga_produk"];?>
                    </td>
                    <td>
                        <?php echo $value["tipe_produk"];?>
                    </td>
                    <td>
                        <img class="w-25" src="gambar/produk/<?php echo $value["foto_produk"]; ?>"/>
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Ubah</a>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
        <div class="col-12 p-0">
        	<?php include 'footer.php' ?>
        </div>
    </div>
</body>
</html>