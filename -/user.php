<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Phu Tea</title>
<?php include 'header.php' ?>
</head>

<body>
	<?php 	
        session_start(); 
        session_unset(); 
        session_destroy(); 
	?>
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
                	<form method="post" autocomplete="off" action="simpan.php" class="col-12 d-flex flex-row flex-wrap justify-content-center">
                    	<div class="walt col-12 text-center clwhite">
                        	<h1>Login</h1>
                        </div>
                        <div class="col-4 clwhite">
                            <h3 class="walt m-0 float-right">ID:</h3>
                        </div>
                        <div class="col-8">
                            <input class="col-lg-6 col-md-9 col-12 p-0" type="text" name="user" required/>
                        </div>
                        <div class="col-4 clwhite">
                            <h3 class="walt m-0 float-right">Pass:</h3>
                        </div>
                        <div class="col-8">
                            <input class="col-lg-6 col-md-9 col-12 p-0" type="password" name="pass" required/>
                        </div>
                        <div class="col-12 d-flex flex-row justify-content-center">
                        	<div class="col-lg-2 col-md-4 col-6 p-0">
                        		<button class="w-100" type="submit"><h4 class="walt m-0">Login</h4></button>
                            </div>
                            <div class="col-lg-2 col-md-4 col-6 p-0">
                            	<button class="w-100" type="reset"><h4 class="walt m-0">Clear</h4></button>
                            </div>
                        </div>
         	 		</form>
                    </div>
                    <div class="col-12">
                    <form method="post" autocomplete="off" action="reg.php" class="col-12 d-flex flex-row flex-wrap justify-content-center">
                    	<div class="walt col-12 text-center clwhite">
                        	<h1>Daftar Baru</h1>
                        </div>
                        <div class="col-4 clwhite">
                            <h3 class="walt m-0 float-right">ID:</h3>
                        </div>
                        <div class="col-8">
                            <input class="col-lg-6 col-md-9 col-12 p-0" type="text" name="user" required/>
                        </div>
                        <div class="col-4 clwhite">
                            <h3 class="walt m-0 float-right">Pass:</h3>
                        </div>
                        <div class="col-8">
                            <input class="col-lg-6 col-md-9 col-12 p-0" type="password" name="pass" required/>
                        </div>
                        <div class="col-4 clwhite">
                            <h3 class="walt m-0 float-right">Nama:</h3>
                        </div>
                        <div class="col-8">
                            <input class="col-lg-6 col-md-9 col-12 p-0" type="text" name="nama" required/>
                        </div>
                        <div class="col-4 clwhite">
                            <h3 class="walt m-0 float-right">Telepon:</h3>
                        </div>
                        <div class="col-8">
                            <input class="col-lg-6 col-md-9 col-12 p-0" type="number" name="tlp" required/>
                        </div>
                        <div class="col-4 clwhite">
                            <h3 class="walt m-0 float-right">Email:</h3>
                        </div>
                        <div class="col-8">
                            <input class="col-lg-6 col-md-9 col-12 p-0" type="email" name="mails" required/>
                        </div>
                        <div class="col-12 d-flex flex-row justify-content-center">
                        	<div class="col-lg-2 col-md-4 col-6 p-0">
                        		<button class="w-100" type="submit"><h4 class="walt m-0">Daftar</h4></button>
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