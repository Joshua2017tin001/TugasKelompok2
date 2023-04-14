<?php
	// session_start(); 
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
            <?php
            foreach($rows as $key=>$value) {
                // echo $value["nama_produk"];
            ?>
            
        	<div class="col-lg-6 col-12">
            	<h1 class="walt text-center brdbblack m-0 bgorange"><?php echo $value["tipe_produk"]; ?></h1>
                <div class="d-flex flex-column bgorange brtsblack">
                	<div class="d-flex flex-row flex-wrap justify-content-center">
                    	<div class="col-8">
                        	<img class="w-100" src="gambar/produk/<?php echo $value["foto_produk"]; ?>"/>
                        </div>
                        <div class="col-8">
                        	<h2 class="walt text-center brdbblack bgorange"> <?php echo $value["nama_produk"]; ?><br>Rp. <?php echo $value["harga_produk"]; ?></h3>
                        </div>
                    </div>
               	
                </div>
            </div>
            <?php  } ?>

        </div>
        <div class="col-12 p-0">
        	<?php include 'footer.php' ?>
        </div>
    </div>
</body>
</html>