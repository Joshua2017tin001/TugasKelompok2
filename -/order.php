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
			<h1 class="text-center bgorange clblack walt m-0">Order</h1>
            <marquee class="bgblack clorange" scrollamount="5">
            <h4 class="walt m-0">
            	Anda Tidak Dapat Menorder Pesanan 2x.. Hapus pesanna semebelumnya jika ingin membuat pesanan baru..
            </h4>
            </marquee>
		</div>
    	<div class="row">
        	<div class="col-lg-3 col-12">
            	<div class="col-12 d-flex flex-row flex-wrap bgorange">
                    <!-- <h1 class="walt w-100">Welcome, <?php echo $_SESSION['nama']; ?></h1> -->
                    <a href="lgout.php" class="w-100 text-center"><button class="w-100">Logout</button></a>
                    <a href="order.php" class="w-100 text-center"><button class="w-100">Order</button></a>
                    <a href="cekpsn.php" class="w-100 text-center"><button class="w-100">Cek Pesanan</button></a>
               	</div>
            </div>
        	<div class="col-lg-9 col-12 d-flex flex-row flex-wrap justify-content-center">
            	<form id="inp" autocomplete="off" action="orders.php" method="post" class="col-12 bgorange d-flex flex-row flex-wrap justify-content-center">
					
					<?php
						foreach($rows as $key => $value) {
						// echo $value["nama_produk"];
						//print_r($value['id']);
					?>
					<input type="hidden" name="produk_id[]" value="<?php echo $value['id']; ?>">
					<div class="col-lg-6 col-12 d-flex flex-row flex-wrap justify-content-center brdbblack">
                    	<div class="col-9 p-0">
                        	<img class="w-100" src="gambar/produk/<?php echo $value["foto_produk"]; ?>"/>
                        </div>
                       	<div class="col-12 p-0">
                        	<h3 class="walt text-center"><?php echo $value["nama_produk"]; ?> - Rp. <?php echo $value["harga_produk"]; ?></h3>
                        </div>
                        <div class="col-12 d-flex flex-row flex-wrap justify-content-center">
                        	<div class="col-4">
                        		<h3 class="walt float-right">Jumlah</h3>
                           	</div>
                            <div class="col-2 p-0">
                           		<input name="jumlah_produk[]" min="0" size="3" value="0" class="w-100 h-75"/>
                          	</div>
                        </div>
                    </div>
					<?php  } ?>
                   	<!-- <div class="col-lg-6 col-12 d-flex flex-row flex-wrap justify-content-center brdbblack">
                    	<div class="col-9 p-0">
                        	<img class="w-100" src="gambar/produk/136046.jpg"/>
                        </div>
                       	<div class="col-12 p-0">
                        	<h3 class="walt text-center">Green Tea - Rp. 8.000</h3>
                        </div>
                        <div class="col-12 d-flex flex-row justify-content-center">
                        	<div class="col-4">
                        		<h3 class="walt float-right">Jumlah</h3>
                           	</div>
                            <div class="col-2 p-0">
                           		<input name="gre" min="0" size="3" value="0" class="w-100 h-75" type="number"/>
                          	</div>
                            <div class="col-2 p-0">
                            	<select name="tgre" class="w-100 h-75">
  									<option value="1">1</option>
  									<option value="2">2</option>
                                    <option value="3">3</option>
                          		</select>
                            </div>
                        </div>

                    </div>
                   	<div class="col-lg-6 col-12 d-flex flex-row flex-wrap justify-content-center brdbblack">
                    	<div class="col-9 p-0">
                        	<img class="w-100" src="gambar/produk/PudingBubbleGum-crop.jpeg"/>
                        </div>
                       	<div class="col-12 p-0">
                        	<h3 class="walt text-center">Bubble Gum - Rp. 9.000</h3>
                        </div>
                        <div class="col-12 d-flex flex-row justify-content-center">
                        	<div class="col-4">
                        		<h3 class="walt float-right">Jumlah</h3>
                           	</div>
                            <div class="col-2 p-0">
                           		<input name="bgum" min="0" size="3" value="0" class="w-100" type="number"/>
                          	</div>
                        </div>
                    </div>
                   	<div class="col-lg-6 col-12 d-flex flex-row flex-wrap justify-content-center brdbblack">
                    	<div class="col-9 p-0">
                        	<img class="w-100" src="gambar/produk/PudingTaro-crop.jpeg"/>
                        </div>
                       	<div class="col-12 p-0">
                        	<h3 class="walt text-center">Taro - Rp. 9.000</h3>
                        </div>
                        <div class="col-12 d-flex flex-row justify-content-center">
                        	<div class="col-4">
                        		<h3 class="walt float-right">Jumlah</h3>
                           	</div>
                            <div class="col-2 p-0">
                           		<input name="taro" min="0" size="3" value="0" class="w-100" type="number"/>
                          	</div>
                        </div>
                    </div> -->
                    <div class="col-12 d-flex flex-row flex-wrap">
                    	<h3 class="walt w-100">Alamat : </h3>
                    	<input name="nmajln" size="100" class="col-lg-3 col-12 p-0" type="text" placeholder="Nama Jalan" required/>
                        <input name="kota" size="100" class="col-lg-3 col-12 p-0" type="text" placeholder="Kota" required/>
                        <input name="camat" size="100" class="col-lg-3 col-12 p-0" type="text" placeholder="Kecamatan" required/>
                        <input name="lurah" size="100" class="col-lg-3 col-lg-3col-12 p-0" type="text" placeholder="Kelurahan" required/>
                        <input name="rtrw" size="100" class="col-lg-3 col-12 p-0" type="text" placeholder="RT / RW" required/>
                        <input name="kdpos" size="4" class="col-lg-3 col-12 p-0" type="number" placeholder="Kode Pos" required/>
                    </div>
                    <div class="col-4 d-flex flex-row justify-content-center">
                    	<button type="submit"><h2 class="text-center walt">Pesan</h2></button>
                    </div>
                    <div class="col-4 d-flex flex-row justify-content-center">
                    	<button type="reset"><h2 class="text-center walt">Clear</h2></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 p-0">
        	<?php include 'footer.php' ?>
        </div>
    </div>
</body>
</html>