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
        	<div class="col-12 d-flex flex-row justify-content-center">
            	<div class="col-12 d-flex flex-row flex-wrap bgorange">
                	<form method="post" autocomplete="off" action="user.php" class="col-12 d-flex flex-row flex-wrap justify-content-center">
      					<div class="col-12">
                        	<h1 class="walt text-center clblack">ID Tidak Terdaftar</h1>
                        </div>
                        <button class="walt" type="submit"><h4 class="walt m-0">Kembali</h4></button>
         	 		</form>
                </div>
            </div>
        </div>
        <div class="col-12 p-0">
        	<?php include 'footer.php' ?>
        </div>
    </div>
</body>
</html>