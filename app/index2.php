<!doctype html>
<html class="no-js" lang="en">

<head>
	<!-- meta data -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!--font-family-->
	<link
		href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet">

	<!-- title of site -->
	<title>Travel RJA</title>

	<!-- For favicon png -->
	<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />

	<!--font-awesome.min.css-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!--linear icon css-->
	<link rel="stylesheet" href="assets/css/linearicons.css">

	<!--flaticon.css-->
	<link rel="stylesheet" href="assets/css/flaticon.css">

	<!--animate.css-->
	<link rel="stylesheet" href="assets/css/animate.css">

	<!--owl.carousel.css-->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

	<!--bootstrap.min.css-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- bootsnav -->
	<link rel="stylesheet" href="assets/css/bootsnav.css">

	<!--style.css-->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--responsive.css-->
	<link rel="stylesheet" href="assets/css/responsive.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body>
	<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

	<!--welcome-hero start -->
	<section id="home" class="welcome-hero">

		<!-- top-area Start -->
		<div class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
				<nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"
					data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

					<div class="container">

						<!-- Start Header Navigation -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse"
								data-target="#navbar-menu">
								<i class="fa fa-bars"></i>
							</button>
							<a class="navbar-brand" href="index.html">TRAVEL RJA<span></span></a>

						</div><!--/.navbar-header-->
						<!-- End Header Navigation -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
							<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
								<li class="scroll"><a href="#home">home</a></li>
								<li class="scroll"><a href="#service">service</a></li>
								<li class="scroll"><a href="#featured-cars">drivers</a></li>
								<li class="scroll"><a href="#new-cars">the best diver</a></li>
								<li class="scroll"><a href="#brand">brands</a></li>
								<li class="scroll"><a href="#contact">contact</a></li>
								<li ><a href="index.php" class="d-block"><?php echo $_SESSION['nama'].' | '.$_SESSION['level'];?></a>
							</ul><!--/.nav -->
						</div><!-- /.navbar-collapse -->
					</div><!--/.container-->
				</nav><!--/nav-->
				<!-- End Navigation -->
			</div><!--/.header-area-->
			<div class="clearfix"></div>

		</div><!-- /.top-area-->
		<!-- top-area End -->

		<div class="container">
			<div class="welcome-hero-txt">
				<h2>Mengikat Kenangan, Menyatukan Petualangan!</h2>
				<p>
					"Dengan layanan yang berorientasi pada kepuasan pelanggan dan dedikasi yang tiada duanya, kami
					berkomitmen untuk mengikat setiap kenangan indah dalam perjalanan Anda bersama RJA Travel.
					Jadikanlah setiap langkah di luar sana menjadi cerita yang akan dikenang sepanjang masa dengan
					kami!"
				</p>
				<button class="welcome-btn"
					onclick="window.location.href='#'">HUBUNGI KAMI</button>
			</div>
		</div>

		<div class="container">
		<form method = "get" action = "app/add/tambahdatapelanggan.php" >
			<div class="row">
				<div class="col-md-12">
					<div class="model-search-content">
						<div class="row">
							<div class="col-md-offset-1 col-md-2 col-sm-12">
								<div class="single-model-search">
									<h2>Tujuan Anda</h2>
									<div class="model-select-icon">
										<select class="form-control">

											<option value="default">--PILIH--</option><!-- /.option-->

											<option value="2018">PEKANBARU</option><!-- /.option-->

											<option value="2017">PADANG</option><!-- /.option-->
											<option value="2016">MEDAN</option><!-- /.option-->

										</select><!-- /.select-->
									</div><!-- /.model-select-icon -->
								</div>
								<div class="single-model-search">
									<h2>LOKASI PENJEMPUTAN</h2>
									<div class="model-select-icon">
										<select class="form-control">

											<option value="default">--PILIH--</option><!-- /.option-->

											<option value="sedan">TERMINAL</option><!-- /.option-->

											<option value="van">RUMAH</option><!-- /.option-->

										</select><!-- /.select-->
									</div><!-- /.model-select-icon -->
								</div>
							</div>
							<div class="col-md-offset-1 col-md-2 col-sm-12">
								<div class="single-model-search">
									<h2>POSISI KURSI</h2>
									<div class="model-select-icon">
										<select class="form-control">

											<option value="default">--PILIH--</option><!-- /.option-->

											<option value="toyota">DEPAN</option><!-- /.option-->

											<option value="holden">TENGAH</option><!-- /.option-->
											<option value="maecedes-benz">BELAKANG</option><!-- /.option-->

										</select><!-- /.select-->
									</div><!-- /.model-select-icon -->
								</div>
								<div class="single-model-search">
									<h2>TIPE</h2>
									<div class="model-select-icon">
										<select class="form-control">

											<option value="default">--PILIH--</option><!-- /.option-->

											<option value="something">EKONOMI</option><!-- /.option-->

											<option value="something">BISNIS</option><!-- /.option-->
											<option value="something">EKSKLUSIF</option><!-- /.option-->

										</select><!-- /.select-->
									</div><!-- /.model-select-icon -->
								</div>
							</div>
							<div class="col-md-offset-1 col-md-2 col-sm-12">
								<div class="single-model-search">
									<h2>BERAPA PENUMPANG</h2>
									<div class="model-select-icon">
										<select class="form-control">

											<option value="default">--PILIH--</option><!-- /.option-->

											<option value="kia-rio">1</option><!-- /.option-->

											<option value="mitsubishi">2</option><!-- /.option-->
											<option value="ford">3</option><!-- /.option-->
											<option value="kia-rio">4</option><!-- /.option-->
											<option value="kia-rio">5</option><!-- /.option-->
											<option value="kia-rio">6</option><!-- /.option-->
											<option value="kia-rio">7</option><!-- /.option-->
											<option value="kia-rio">8</option><!-- /.option-->

										</select><!-- /.select-->
									</div><!-- /.model-select-icon -->
								</div>
								<div class="single-model-search">
									<h2>HARGA</h2>
									<div class="model-select-icon">
										<select class="form-control">

											<option value="default">--PILIH--</option><!-- /.option-->

											<option value="$0.00">Rp. 120.000</option><!-- /.option-->

											<option value="$0.00">Rp. 150.000</option><!-- /.option-->
											<option value="$0.00">Rp. 180.000</option><!-- /.option-->
											<option value="$0.00">Rp. 230.000</option><!-- /.option-->
											<option value="$0.00">Rp. 250.000</option><!-- /.option-->
											<option value="$0.00">Rp. 280.000</option><!-- /.option-->
											<option value="$0.00">Rp. 350.000</option><!-- /.option-->
											<option value="$0.00">Rp. 400.000</option><!-- /.option-->

										</select><!-- /.select-->
									</div><!-- /.model-select-icon -->
								</div>
							</div>
							<div class="col-md-2 col-sm-12">
								<div class="single-model-search text-center">
									<button class="welcome-btn model-search-btn" onclick="window.location.href='#'">
										Submit
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		</div>

	</section><!--/.welcome-hero-->
	<!--welcome-hero end -->

	<!--service start -->
	<section id="service" class="service">
		<div class="container">
			<div class="service-content">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="single-service-item">
							<div class="single-service-icon">
								<i class="flaticon-car"></i>
							</div>
							<h2><a href="#">Travel Terbesar</a></h2>
							<p>
								Salah satu perusahaan travel terbesar di dunia menyediakan layanan lengkap mulai dari
								pemesanan tiket pesawat, hotel, hingga tur paket yang memukau, memungkinkan pelanggannya
								untuk menjelajahi dunia dengan kenyamanan dan kemudahan yang tak tertandingi.
							</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="single-service-item">
							<div class="single-service-icon">
								<i class="flaticon-car-repair"></i>
							</div>
							<h2><a href="#">kemudahan Dalam Memesan Tiket</a></h2>
							<p>
								Dengan adanya platform pemesanan tiket travel secara online, kemudahan akses untuk
								memesan tiket pesawat, kereta api, atau bahkan tiket masuk atraksi wisata menjadi lebih
								mudah dan praktis, memungkinkan para pelancong untuk merencanakan perjalanan mereka
								dengan cepat dan efisien dari mana pun mereka berada.
							</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="single-service-item">
							<div class="single-service-icon">
								<i class="flaticon-car-1"></i>
							</div>
							<h2><a href="#">Asuransi Travel</a></h2>
							<p>
								Asuransi travel memberikan perlindungan yang penting bagi para pelancong, menawarkan
								jaminan atas risiko-risiko seperti pembatalan perjalanan, keterlambatan atau kehilangan
								bagasi, serta kebutuhan medis mendadak saat berada di luar negeri, memberikan kedamaian
								pikiran yang berharga selama menjelajahi destinasi baru.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.container-->

	</section><!--/.service-->
	<!--service end-->

	<!--new-cars start -->
	<section id="new-cars" class="new-cars">
		<div class="container">
			<div class="section-header">
				<p>The Best Driver</p>
				<h2>Top 3</h2>
			</div><!--/.section-header-->
			<div class="new-cars-content">
				<div class="owl-carousel owl-theme" id="new-cars-carousel">
					<div class="new-cars-item">
						<div class="single-new-cars-item">
							<div class="row">
								<div class="col-md-7 col-sm-12">
									<div class="new-cars-img">
										<img src="assets/images/new-cars-model/ncm1.png" alt="img" />
									</div><!--/.new-cars-img-->
								</div>
								<div class="col-md-5 col-sm-12">
									<div class="new-cars-txt">
										<h2><a href="#">VOXY</a></h2>
										<p>
											Driver terbaik tidak hanya mahir dalam mengemudi, tetapi juga memiliki
											keahlian dalam membawa penumpang dengan aman, memberikan pelayanan yang
											ramah, serta memiliki pengetahuan yang luas tentang rute dan destinasi,
											menjadikannya mitra perjalanan yang tak tergantikan.
										</p>
										<button class="welcome-btn new-cars-btn" onclick="window.location.href='#'">
											view details
										</button>
									</div><!--/.new-cars-txt-->
								</div><!--/.col-->
							</div><!--/.row-->
						</div><!--/.single-new-cars-item-->
					</div><!--/.new-cars-item-->
					<div class="new-cars-item">
						<div class="single-new-cars-item">
							<div class="row">
								<div class="col-md-7 col-sm-12">
									<div class="new-cars-img">
										<img src="assets/images/new-cars-model/ncm2.png" alt="img" />
									</div><!--/.new-cars-img-->
								</div>
								<div class="col-md-5 col-sm-12">
									<div class="new-cars-txt">
										<h2><a href="#">ALPHARD</a></h2>
										<p>
											Driver terbaik tidak hanya mengemudi dengan keahlian tinggi, tetapi juga
											memperhatikan kenyamanan dan keamanan penumpang, memberikan pengalaman
											perjalanan yang tak terlupakan dengan pelayanan yang profesional dan sopan.
										</p>
										<button class="welcome-btn new-cars-btn" onclick="window.location.href='#'">
											view details
										</button>
									</div><!--/.new-cars-txt-->
								</div><!--/.col-->
							</div><!--/.row-->
						</div><!--/.single-new-cars-item-->
					</div><!--/.new-cars-item-->
					<div class="new-cars-item">
						<div class="single-new-cars-item">
							<div class="row">
								<div class="col-md-7 col-sm-12">
									<div class="new-cars-img">
										<img src="assets/images/new-cars-model/ncm3.png" alt="img" />
									</div><!--/.new-cars-img-->
								</div>
								<div class="col-md-5 col-sm-12">
									<div class="new-cars-txt">
										<h2><a href="#">VOXY</a></h2>
										<p>
											Seorang driver terbaik adalah mereka yang tidak hanya menguasai kendaraannya
											dengan sempurna, tetapi juga memiliki empati dan kesabaran dalam menghadapi
											berbagai situasi, menjadikan perjalanan tidak hanya aman, tetapi juga
											menyenangkan bagi setiap penumpangnya.
										</p>
										<button class="welcome-btn new-cars-btn" onclick="window.location.href='#'">
											view details
										</button>
									</div><!--/.new-cars-txt-->
								</div><!--/.col-->
							</div><!--/.row-->
						</div><!--/.single-new-cars-item-->
					</div><!--/.new-cars-item-->
				</div><!--/#new-cars-carousel-->
			</div><!--/.new-cars-content-->
		</div><!--/.container-->

	</section><!--/.new-cars-->
	<!--new-cars end -->

	<!--featured-cars start -->
	<section id="featured-cars" class="featured-cars">
		<div class="container">
			<div class="section-header">
				<p>Driver</p>
				<h2>Drivers</h2>
			</div><!--/.section-header-->
			<div class="featured-cars-content">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single-featured-cars">
							<div class="featured-img-box">
								<div class="featured-cars-img">
									<img src="assets/images/featured-cars/fc1.png" alt="cars">
								</div>
								<div class="featured-model-info">
									<p>
										model: 2017
										<span class="featured-mi-span"> 3100 mi</span>
										<span class="featured-hp-span"> 240HP</span>
										automatic
									</p>
								</div>
							</div>
							<div class="featured-cars-txt">
								<h2><a href="#">Defri as Driver</a></h2>
								<h3><a href="#">XENIA</a></h3>
								<h3>Rp. 120.000</h3>
								<p>
									"Salam sejahtera! Saya adalah Defri, driver profesional dari layanan Travel RJA.
									Saya berkomitmen untuk memberikan pengalaman perjalanan yang aman, nyaman, dan
									menyenangkan bagi setiap penumpang.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single-featured-cars">
							<div class="featured-img-box">
								<div class="featured-cars-img">
									<img src="assets/images/featured-cars/fc2.png" alt="cars">
								</div>
								<div class="featured-model-info">
									<p>
										model: 2017
										<span class="featured-mi-span"> 3100 mi</span>
										<span class="featured-hp-span"> 240HP</span>
										automatic
									</p>
								</div>
							</div>
							<div class="featured-cars-txt">
								<h2><a href="#">Pandu as Driver</a></h2>
								<h3><a href="#">AVANZA</a></h3>
								<h3>Rp. 230.000</h3>
								<p>
									"Saya Pandu, mitra perjalanan Anda dari layanan travel. Dengan
									dedikasi penuh, saya siap memberikan layanan terbaik dalam setiap perjalanan.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single-featured-cars">
							<div class="featured-img-box">
								<div class="featured-cars-img">
									<img src="assets/images/featured-cars/fc3.png" alt="cars">
								</div>
								<div class="featured-model-info">
									<p>
										model: 2017
										<span class="featured-mi-span"> 3100 mi</span>
										<span class="featured-hp-span"> 240HP</span>
										automatic
									</p>
								</div>
							</div>
							<div class="featured-cars-txt">
								<h2><a href="#">Farlyan as Driver</a></h2>
								<h3><a href="#">AVANZA</a></h3>
								<h3>Rp. 250.000</h3>
								<p>
									"Tetap Tenang dan Aman! Saya Farlyan, driver terpercaya dari layanan travel. Dengan
									motto keselamatan sebagai prioritas utama, saya berjanji untuk mengantarkan Anda
									dengan nyaman dan tepat waktu ke tujuan Anda.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single-featured-cars">
							<div class="featured-img-box">
								<div class="featured-cars-img">
									<img src="assets/images/featured-cars/fc4.png" alt="cars">
								</div>
								<div class="featured-model-info">
									<p>
										model: 2017
										<span class="featured-mi-span"> 3100 mi</span>
										<span class="featured-hp-span"> 240HP</span>
										automatic
									</p>
								</div>
							</div>
							<div class="featured-cars-txt">
								<h2><a href="#">Iqbal as Driver</a></h2>
								<h3><a href="#">CALYA</a></h3>
								<h3>Rp. 150.000</h3>
								<p>
									"Tiba di Layanan Anda! Saya Iqbal, driver yang siap membawa Anda ke destinasi Anda
									dengan aman dan nyaman.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single-featured-cars">
							<div class="featured-img-box">
								<div class="featured-cars-img">
									<img src="assets/images/featured-cars/fc4.png" alt="cars">
								</div>
								<div class="featured-model-info">
									<p>
										model: 2017
										<span class="featured-mi-span"> 3100 mi</span>
										<span class="featured-hp-span"> 240HP</span>
										automatic
									</p>
								</div>
							</div>
							<div class="featured-cars-txt">
								<h2><a href="#">Dika as Driver</a></h2>
								<h3><a href="#">CALYA</a></h3>
								<h3>Rp. 180.000</h3>
								<p>
									"Selamat Datang di Mobil Saya! Saya Dika, driver profesional dari layanan travel.
									Dengan senyum di wajah dan keramahan dalam hati, saya siap mengantarkan Anda ke
									destinasi Anda dengan aman dan nyaman.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single-featured-cars">
							<div class="featured-img-box">
								<div class="featured-cars-img">
									<img src="assets/images/featured-cars/fc5.png" alt="cars">
								</div>
								<div class="featured-model-info">
									<p>
										model: 2017
										<span class="featured-mi-span"> 3100 mi</span>
										<span class="featured-hp-span"> 240HP</span>
										automatic
									</p>
								</div>
							</div>
							<div class="featured-cars-txt">
								<h2><a href="#">Agung as Driver</a></h2>
								<h3><a href="#">AVANZA</a></h3>
								<h3>Rp. 280.000</h3>
								<p>
									"Tersedia untuk Layanan Anda! Saya Agung, driver handal dari layanan travel yang
									siap mengantar Anda ke tujuan dengan selamat dan tanpa masalah.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single-featured-cars">
							<div class="featured-img-box">
								<div class="featured-cars-img">
									<img src="assets/images/featured-cars/fc7.png" alt="cars">
								</div>
								<div class="featured-model-info">
									<p>
										model: 2017
										<span class="featured-mi-span"> 3100 mi</span>
										<span class="featured-hp-span"> 240HP</span>
										automatic
									</p>
								</div>
							</div>
							<div class="featured-cars-txt">
								<h2><a href="#">Nabil as Driver</a></h2>
								<h3><a href="#">VOXY</a></h3>
								<h3>Rp. 350.000</h3>
								<p>
									"Tetap Dalam Perjalanan Bersama! Saya Nabil, driver yang selalu siap membantu Anda
									mencapai tujuan dengan nyaman dan aman.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="single-featured-cars">
							<div class="featured-img-box">
								<div class="featured-cars-img">
									<img src="assets/images/featured-cars/fc8.png" alt="cars">
								</div>
								<div class="featured-model-info">
									<p>
										model: 2017
										<span class="featured-mi-span"> 3100 mi</span>
										<span class="featured-hp-span"> 240HP</span>
										automatic
									</p>
								</div>
							</div>
							<div class="featured-cars-txt">
								<h2><a href="#">Rusdil as Driver</a></h2>
								<h3><a href="#">ALPHARD</a></h3>
								<h3>Rp. 400.000</h3>
								<p>
									"Tersedia 24/7 untuk Anda! Saya Rusdil, driver terpercaya dari layanan travel, siap
									membantu Anda dalam setiap perjalanan. Dengan dedikasi penuh, saya akan memastikan
									Anda tiba di tujuan dengan aman dan nyaman.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.container-->

	</section><!--/.featured-cars-->
	<!--featured-cars end -->

	<!-- clients-say strat -->
	<section id="clients-say" class="clients-say">
		<div class="container">
			<div class="section-header">
				<h2>what our clients say</h2>
			</div><!--/.section-header-->
			<div class="row">
				<div class="owl-carousel testimonial-carousel">
					<div class="col-sm-3 col-xs-12">
						<div class="single-testimonial-box">
							<div class="testimonial-description">
								<div class="testimonial-info">
									<div class="testimonial-img">
										<img src="assets/images/clients/c1.png" alt="image of clients person" />
									</div><!--/.testimonial-img-->
								</div><!--/.testimonial-info-->
								<div class="testimonial-comment">
									<p>
										"Tingkat pelayanan yang diberikan oleh RJA Travel sungguh luar biasa! Dari proses pemesanan hingga perjalanan, semuanya berjalan dengan lancar dan tanpa hambatan. Saya sangat terkesan dengan profesionalisme dan keramahan tim RJA."
									</p>
								</div><!--/.testimonial-comment-->
								<div class="testimonial-person">
									<h2><a href="#">Fajar Hidayat</a></h2>
									<h4>Kubang Raya</h4>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-description-->
						</div><!--/.single-testimonial-box-->
					</div><!--/.col-->
					<div class="col-sm-3 col-xs-12">
						<div class="single-testimonial-box">
							<div class="testimonial-description">
								<div class="testimonial-info">
									<div class="testimonial-img">
										<img src="assets/images/clients/c2.png" alt="image of clients person" />
									</div><!--/.testimonial-img-->
								</div><!--/.testimonial-info-->
								<div class="testimonial-comment">
									<p>
										"Tidak bisa lebih puas dengan pengalaman menggunakan jasa travel dari RJA. Semua detail perjalanan terorganisir dengan baik, mulai dari akomodasi hingga transportasi. Stafnya sangat ramah dan responsif terhadap kebutuhan kami. Terima kasih RJA Travel atas pengalaman wisata yang tak terlupakan!"
									</p>
								</div><!--/.testimonial-comment-->
								<div class="testimonial-person">
									<h2><a href="#">Jasmine</a></h2>
									<h4>Purwodadi Indah</h4>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-description-->
						</div><!--/.single-testimonial-box-->
					</div><!--/.col-->
					<div class="col-sm-3 col-xs-12">
						<div class="single-testimonial-box">
							<div class="testimonial-description">
								<div class="testimonial-info">
									<div class="testimonial-img">
										<img src="assets/images/clients/c3.png" alt="image of clients person" />
									</div><!--/.testimonial-img-->
								</div><!--/.testimonial-info-->
								<div class="testimonial-comment">
									<p>
										"Tidak bisa lebih puas dengan pengalaman menggunakan jasa travel dari RJA. Semua detail perjalanan terorganisir dengan baik, mulai dari akomodasi hingga transportasi. Stafnya sangat ramah dan responsif terhadap kebutuhan kami. Terima kasih RJA Travel atas pengalaman wisata yang tak terlupakan!"
									</p>
								</div><!--/.testimonial-comment-->
								<div class="testimonial-person">
									<h2><a href="#">Rizky Rizaldi</a></h2>
									<h4>Purwodadi Indah</h4>
								</div><!--/.testimonial-person-->
							</div><!--/.testimonial-description-->
						</div><!--/.single-testimonial-box-->
					</div><!--/.col-->
				</div><!--/.testimonial-carousel-->
			</div><!--/.row-->
		</div><!--/.container-->

	</section><!--/.clients-say-->
	<!-- clients-say end -->

	<!--brand strat -->
	<section id="brand" class="brand">
		<div class="container">
			<div class="brand-area">
				<div class="owl-carousel owl-theme brand-item">
					<div class="item">
						<a href="#">
							<img src="assets/images/brand/br1.png" alt="brand-image" />
						</a>
					</div><!--/.item-->
					<div class="item">
						<a href="#">
							<img src="assets/images/brand/br2.png" alt="brand-image" />
						</a>
					</div><!--/.item-->
					<div class="item">
						<a href="#">
							<img src="assets/images/brand/br3.png" alt="brand-image" />
						</a>
					</div><!--/.item-->
					<div class="item">
						<a href="#">
							<img src="assets/images/brand/br4.png" alt="brand-image" />
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#">
							<img src="assets/images/brand/br5.png" alt="brand-image" />
						</a>
					</div><!--/.item-->

					<div class="item">
						<a href="#">
							<img src="assets/images/brand/br6.png" alt="brand-image" />
						</a>
					</div><!--/.item-->
				</div><!--/.owl-carousel-->
			</div><!--/.clients-area-->

		</div><!--/.container-->

	</section><!--/brand-->
	<!--brand end -->

	<!--blog start -->
	<section id="blog" class="blog"></section><!--/.blog-->
	<!--blog end -->

	<!--contact start-->
	<footer id="contact" class="contact">
		<div class="container">
			<div class="footer-top">
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="single-footer-widget">
							<div class="footer-logo">
								<a href="index.html">TRAVEL RJA</a>
							</div>
							<p>
								Dengan layanan yang berorientasi pada kepuasan pelanggan dan dedikasi yang tiada duanya,
								kami berkomitmen untuk mengikat setiap kenangan indah dalam perjalanan Anda bersama RJA
								Travel.
							</p>
							<div class="footer-contact">
								<p>afifjinan2@gmail.com</p>
								<p>+62822-8343-6092</p>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-sm-6">
						<div class="single-footer-widget">
							<h2>about Travel RJA</h2>
							<ul>
								<li><a href="#">about us</a></li>
								<li><a href="#">career</a></li>
								<li><a href="#">terms <span> of service</span></a></li>
								<li><a href="#">privacy policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-xs-12">
						<div class="single-footer-widget">
							<h2>top brands</h2>
							<div class="row">
								<div class="col-md-7 col-xs-6">
									<ul>
										<li><a href="#">BMW</a></li>
										<li><a href="#">lamborghini</a></li>
										<li><a href="#">camaro</a></li>
										<li><a href="#">audi</a></li>
										<li><a href="#">infiniti</a></li>
										<li><a href="#">nissan</a></li>
									</ul>
								</div>
								<div class="col-md-5 col-xs-6">
									<ul>
										<li><a href="#">ferrari</a></li>
										<li><a href="#">porsche</a></li>
										<li><a href="#">land rover</a></li>
										<li><a href="#">aston martin</a></li>
										<li><a href="#">mersedes</a></li>
										<li><a href="#">opel</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-3 col-sm-6">
						<div class="single-footer-widget">
							<h2>news letter</h2>
							<div class="footer-newsletter">
								<p>
									Subscribe to get latest news update and informations
								</p>
							</div>
							<div class="hm-foot-email">
								<div class="foot-email-box">
									<input type="text" class="form-control" placeholder="Add Email">
								</div><!--/.foot-email-box-->
								<div class="foot-email-subscribe">
									<span><i class="fa fa-arrow-right"></i></span>
								</div><!--/.foot-email-icon-->
							</div><!--/.hm-foot-email-->
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="row">
					<div class="col-sm-6">
						<p>
							&copy; copyright.designed and developed by <a
								href="https://www.themesine.com/">themesine</a>.
						</p><!--/p-->
					</div>
					<div class="col-sm-6">
						<div class="footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-pinterest-p"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div><!--/.footer-copyright-->
		</div><!--/.container-->

		<div id="scroll-Top">
			<div class="return-to-top">
				<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title=""
					data-original-title="Back to Top" aria-hidden="true"></i>
			</div>

		</div><!--/.scroll-Top-->

	</footer><!--/.contact-->
	<!--contact end-->



	<!-- Include all js compiled plugins (below), or include individual files as needed -->

	<script src="assets/js/jquery.js"></script>

	<!--modernizr.min.js-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

	<!--bootstrap.min.js-->
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- bootsnav js -->
	<script src="assets/js/bootsnav.js"></script>

	<!--owl.carousel.js-->
	<script src="assets/js/owl.carousel.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

	<!--Custom JS-->
	<script src="assets/js/custom.js"></script>

</body>

</html>