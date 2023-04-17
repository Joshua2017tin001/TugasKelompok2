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
	$id = $_SESSION['id'];
	$sql = "SELECT * FROM tbpesan WHERE user_id = '$id' ";
	$rows = $conn->query($sql);
	if($rows->num_rows>0)
	{
		//echo "Login!";
		$a = $rows->fetch_assoc();
	}
	else
	{
		header("Location:order.php");
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
			<h1 class="text-center bgorange clblack walt m-0">Order</h1>
            <marquee class="bgblack clorange" scrollamount="5">
            <h4 class="walt m-0">
            	Pesanan yang datanya tidak valid tidak akan kami proses..
            </h4>
            </marquee>
		</div>
    	<div class="row">
        	<div class="col-lg-3 col-12">
            	<div class="col-12 d-flex flex-row flex-wrap bgorange">
                    <h1 class="walt w-100">Welcome, <?php echo $_SESSION['name']; ?></h1>
                    <a href="lgout.php" class="w-100 text-center"><button class="w-100">Logout</button></a>
                    <a href="order.php" class="w-100 text-center"><button class="w-100">Order</button></a>
                    <a href="cekpsn.php" class="w-100 text-center"><button class="w-100">Cek Pesanan</button></a>
               	</div>
            </div>
        	<div class="col-lg-9 col-12 d-flex flex-row flex-wrap justify-content-center">
            	<form id="inp" action="hapus.php" method="post" class="col-12 bgorange d-flex flex-row flex-wrap justify-content-center">
                	<div class="col-12 d-flex flex-row flex-wrap">
                    	<h2 class="walt w-100">Pemesanan:</h2>
						<h2 class="walt w-100">Kode Pesanan : <?php echo $a['kodepesanan']; ?></h2>
                        <div class="col-lg-3 col-12">
                        	<h4 class="walt text-center">Thai Tea</h4>
                            <h4 class="walt text-center"><?php echo $a['thai']; ?></h4>
                        </div>
                        <div class="col-lg-3 col-12">
                        	<h4 class="walt text-center">Green Tea</h4>
                            <h4 class="walt text-center"><?php echo $a['gre']; ?></h4>
                        </div>
                        <div class="col-lg-3 col-12">
                        	<h4 class="walt text-center">Bubble Gum</h4>
                            <h4 class="walt text-center"><?php echo $a['bgum']; ?></h4>
                        </div>
                        <div class="col-lg-3 col-12">
                        	<h4 class="walt text-center">Taro</h4>
                            <h4 class="walt text-center"><?php echo $a['taro']; ?></h4>
                        </div>
                    </div>
                    <div class="col-4 d-flex flex-row justify-content-center">
                    	<button type="submit"><h2 class="text-center walt">Hapus</h2></button>
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