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
			<h1 class="text-center bblack clblack bgorange walt m-0">Promotion & Announcement</h1>
           	<marquee class="bgblack clorange" scrollamount="5">
            	<h4 class="walt m-0">
                	Semua promo masih berlaku jika masi ditampilkan pada website kami.
               	</h4>
            </marquee>
		</div>
    	<div class="row">
        	<div class="col-lg-9 col-md-12 d-flex flex-row flex-wrap">
                <div class="col-12 d-flex flex-row justify-content-center brtsorange bgblack">
                	<div class="col-lg-1 col-md-1 col-sm-2 col-3 p-0">
                    	<img style="width:50px;" src="gambar/icon/Picture1.png"/>
                    </div>
                    <div>
                	 	<h1 class="walt text-center clorange m-0">Promo</h1>
                    </div>
                </div>
            	<div id="b1g" class="col-12 d-flex flex-row flex-wrap brdbblack bgorange p-0">
                	<div class="col-12">
                		<h2 class="walt m-0">Buy 2 Only For IDR <strike>16.000</strike> 15.000.</h2>
                    </div>
                    <div id="b1g1" class="col-12" style="border-top:black thin solid;">
                        <p>
                            Promo Buy 2 Only For IDR 15.000 hanya berlaku untuk pembelian Tea saja.
                            Berlaku kelipatan.
                            <br>Tunggu apa lagi? langsung saja order di 
                            <a class="clblack" href="http://line.me/ti/p/~meittyyn" target="_blank">
                                Line
                           	</a> 
                            / 
                            <a class="clblack" href="https://www.instagram.com/phuphutea/" target="_blank">
                           		Instagram
                          	</a>
                            <br>Bagi yang masi kebingungan bagaimana cara ordernya sillahkan pencet 
                            <a class="clblack" href="carapesan.php">disini.</a>
                        </p>
                    </div>
                </div>
             	<div id="vald" class="col-12 d-flex flex-row flex-wrap brdbblack bgorange p-0">
                	<div class="col-12">
                		<h2 class="walt m-0">Buy 5 Get 1 Free.</h2>
                    </div>
                    <div id="vald1" class="col-12" style="border-top:black thin solid;">
                        <p>
                            Promo Buy 5 get 1 Free hanya berlaku untuk pembelian Tea atau Pudding.
                            <br>Berlaku untuk pembelian lebih dari dua macam produk.
                            <br>Tunggu apa lagi? langsung saja order di 
                            <a class="clblack" href="http://line.me/ti/p/~meittyyn" target="_blank">
                                Line
                           	</a> 
                            / 
                            <a class="clblack" href="https://www.instagram.com/phuphutea/" target="_blank">
                           		Instagram
                          	</a>
                            <br>Bagi yang masi kebingungan bagaimana cara ordernya sillahkan pencet
                            <a class="clblack" href="carapesan.php">disini.</a>
                        </p>
                    </div>
                </div> 
                <div class="col-12 d-flex flex-row justify-content-center brtsorange bgblack">
                	<div class="col-lg-1 col-md-1 col-sm-2 col-3 p-0">
                    	<img style="width:50px;" src="gambar/icon/Picture1.png"/>
                    </div>
                    <div>
                	 	<h1 class="walt text-center clorange m-0">Pengumuman</h1>
                    </div>
                </div>
                <div class="col-12 d-flex flex-row flex-wrap brdbblack bgorange p-0">
                	<div class="col-12 bgblack">
                		<h2 class="walt m-0 clorange text-center">Syarat dan Ketentuan</h2>
                    </div>
                    <div class="col-12 d-flex flex-wrap flex-row" style="border-top:black thin solid;">
                    	<div class="col-lg-10 col-md-10 col-sm-9 col-8 p-0">
                        <p>
                           	Semua promo yang masih berlaku jika masih terdapat di website ini.
                            <br>Promo dapat berubah sewaktu-waktu tanpa pemberitahuan.
                            <br>Semua Jenis Promo Di Klaim dari Chat Melalui Line / Instagram.
                        </p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-4 p-0">
                        	<img class="w-100" src="gambar/icon/snk.png"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
           		<div class="d-flex flex-row flex-wrap">
            		<div class="col-lg-12 col-12 p-0">
                    	<?php include 'contact.php' ?>
                	</div>
            	</div>
            </div>
        </div>
        <div class="col-12 p-0">
        	<?php include 'footer.php' ?>
        </div>
    </div>
    <script>
		$("#b1g1").hide();
		$("#b1g").mouseenter(function(){$("#b1g1").show();});
		$("#b1g").mouseleave(function(){$("#b1g1").hide();});
		$("#vald1").hide();
		$("#vald").mouseenter(function(){$("#vald1").show();});
		$("#vald").mouseleave(function(){$("#vald1").hide();});	
	</script>
</body>
</html>