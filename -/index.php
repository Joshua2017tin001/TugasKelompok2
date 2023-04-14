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
			<h1 class="text-center wlds bblack clblack bgorange walt m-0">Phu Tea</h1>
           	<marquee class="bgblack clorange" scrollamount="5">
            	<h4 class="walt m-0">
                	Welcome To Phu Tea jangan lupa untuk selalu cek promosi..
                 </h4>
            </marquee>
		</div>
    	<div class="row">
        	<div class="col-lg-12 col-md-12 d-flex flex-row flex-wrap justify-content-center">
            	<div class="col-12 flex-row flex-wrap justify-content-center brtsblack bgorange">
            		<h2 class="walt text-justify">Kami Menjual Produk Tea dan Pudding Siap minum. Semua produk yang
                 	kami buat 100% menggunakan bahan asli, hand made dan tanpa pengawet. kami juga menyediakan
                 	beberapa bentuk botol dan rasa untuk tea dan beberapa rasa untuk pudding.
                	</h2>
                </div>
                <div class="col-8">
                	<br>
                	<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="gambar/produk/136045.jpg"/>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="gambar/produk/136046.jpg"/>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="gambar/produk/136047.jpg"/>
							</div>
                            <div class="carousel-item">
								<img class="d-block w-100" src="gambar/produk/PudingBubbleGum-crop.jpeg"/>
							</div>
                           	<div class="carousel-item">
								<img class="d-block w-100" src="gambar/produk/PudingTaro-crop.jpeg"/>
							</div>
						</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" 
                            role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" 
                            role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
                    <br>
                </div>
            	<div class="d-flex flex-row flex-wrap bgorange">
                	<div class="col-lg-6 col-md-12 brdbblack">
                   		<h3 class="walt">Promo</h3>
						<p>
                        Promo Buy 2 Only For IDR 15.000 hanya berlaku untuk pembelian Tea saja..
                        <br> 
                        <br>
                       	</p>
						<div class = "col-4 clorange bgblack brtswhite">
                        	<a id="readm" class = "clorange" href="promo.php">Read More</a>
                       	</div>
                        <br>
                    </div>
                    <div class="col-lg-6 col-md-12 brdbblack bgorange">
						<h3 class="walt">Pengumuman</h3>
						<p>Phu Tea mengucapkan selamat merayakan hari valentine bagi yang merayakan. Jangan 
                        lupa cek promo di website kami. Kami selalu mengadakan..
                        </p>
						<div class = "col-4 bgblack brtswhite">
                        	<a id="readm" class="clorange" href="promo.php">Read More</a>
                       	</div>
                        <br>
                    </div>
            	</div>
            </div>
           	<div class="col-lg-3 col-md-12">
           		<!--<div class="d-flex flex-row flex-wrap">
            		<div class="col-lg-12 col-12 p-0">
                    	<?php include 'contact.php' ?>
                	</div>
            	</div>-->
            </div>
        </div>
        <div class="col-12 p-0">
        	<?php include 'footer.php' ?>
        </div>
    </div>
</body>
</html>