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
			<h1 class="text-center bgorange clblack walt m-0">List Produk</h1>
            <marquee class="bgblack clorange" scrollamount="5">
            <h4 class="walt m-0">
            	Produk yang kami buat handmade dan tanpa pengawet.. :3
            </h4>
            </marquee>
		</div>
    	<div class="row">
        	<div class="col-12 d-flex flex-row flex-wrap justify-content-center">
            	<div class="col-12 d-flex flex-row flex-wrap">
                	<div class="col-12">
                	<form method="post" autocomplete="off" enctype="multipart/form-data" action="simpan_table_produk.php" class="col-12 d-flex flex-row flex-wrap justify-content-center">
                    	<div class="walt col-12 text-center clwhite">
                        	<h1>Tambah Produk</h1>
                        </div>
                        <div class="col-4 clwhite">
                            <h3 class="walt m-0 float-right">Nama Produk</h3>
                        </div>
                        <div class="col-8">
                            <input class="col-lg-6 col-md-9 col-12 p-0" type="text" name="nama_produk" required/>
                        </div>
                        <div class="col-4 clwhite">
                            <h3 class="walt m-0 float-right">Harga Produk</h3>
                        </div>
                        <div class="col-8">
                            <input class="col-lg-6 col-md-9 col-12 p-0" type="text" name="harga_produk" required/>
                        </div>
                        <div class="col-4 clwhite">
                            <h3 class="walt m-0 float-right">Tipe Produk</h3>
                        </div>
                        <div class="col-8">
                            <!-- <input class="col-lg-6 col-md-9 col-12 p-0" type="text" name="pass" required/> -->
                            <select name="tipe_produk" id="tipe_produk">
                                <option value="">Pilih Tipe Produk</option>
                                <option value="minuman">Minuman</option>
                                <option value="pudding">Pudding</option>
                            </select>
                        </div>

                        <div class="col-4 clwhite">
                            <h3 class="walt m-0 float-right">Foto Produk</h3>
                        </div>
                        <div class="col-8">
                            <input class="col-lg-6 col-md-9 col-12 p-0 text-white" type="file" name="foto_produk" required/>
                        </div>


                        <div class="col-12 d-flex flex-row justify-content-center">
                        	<div class="col-lg-2 col-md-4 col-6 p-0">
                        		<button class="w-100" type="submit"><h4 class="walt m-0">Submit</h4></button>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 p-0">
                            	<button class="w-100" type="reset"><h4 class="walt m-0">Clear</h4></button>
                            </div>
                        </div>
         	 		</form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 p-0">
        	<?php include 'footer.php' ?>
        </div>
    </div>
</body>
</html>