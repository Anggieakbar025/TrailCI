<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>The Plaza - eCommerce Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="<?= base_url() ?>assets/gallery/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/gallery/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/gallery/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/gallery/css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/gallery/css/style.css"/>
	<link rel="stylesheet" href="<?= base_url(); ?>assets/gallery/css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
				<h1>Trail. L,td</h1>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			
			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="<?= base_url('home/index') ?>">Home</a></li>
				<li><a href="#">KLX</a></li>
				<li><a href="#">Husqvarna</a></li>
				<li><a href="#">KTM</a></li>
				<li><a href="#">Blog</a></li>
				
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?= base_url(); ?>assets/gallery/img/bg.jpg">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="hs-left"><img src="<?= base_url(); ?>assets/img/bb.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">Packet Rp. 250.000</div>
						<h2><span>2018</span> <br>Diskon Imlek</h2>
						<a href="" class="site-btn">Book NOW!</a>
					</div>	
				</div>
			</div>
			<div class="hs-item">
			<div class="hs-left"><img src="<?= base_url(); ?>assets/img/bb.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">Packet 1.000.000</div>
						<h2><span>2018</span> <br>Trip Bromo</h2>
						<a href="" class="site-btn">BOOK NOW!</a>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	
	


	

	<!-- Product section -->
	<section class="product-section spad">
		<div class="container">
			<ul class="product-filter controls">
				<li class="control" data-filter=".new">New arrivals</li>
				<li class="control" data-filter="all">Recommended</li>
				<li class="control" data-filter=".best">Best sellers</li>
			</ul>
			<div class="row" id="product-filter">
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img height="200" width="266" src="<?= base_url(); ?>assets/img/t1.jpg" alt="">
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="<?= base_url(); ?>assets/gallery/img/icons/eye.png" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="assets/gallery/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>KTM 350</h6>
							<p>Rp. 750.000</p>
							
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img height="200" width="266" src="<?= base_url(); ?>assets/img/t2.jpg" alt="">
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="<?= base_url(); ?>assets/gallery/img/icons/eye.png" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="assets/gallery/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>KTM 450</h6>
							<p>Rp. 750.000</p>
							
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img height="200" width="266" src="<?= base_url(); ?>assets/img/t3.png" alt="">
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="<?= base_url(); ?>assets/gallery/img/icons/eye.png" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="assets/gallery/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>KTM 250</h6>
							<p>Rp. 750.000</p>
							
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img height="200" width="266" src="<?= base_url(); ?>assets/img/t4.jpg" alt="">
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="<?= base_url(); ?>assets/gallery/img/icons/eye.png" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="assets/gallery/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Husqvarna TE 350</h6>
							<p>Rp. 750.000</p>
							
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img height="200" width="266" src="<?= base_url(); ?>assets/img/t5.jpg" alt="">
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="<?= base_url(); ?>assets/gallery/img/icons/eye.png" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="assets/gallery/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Husqvarna 450</h6>
							<p>Rp. 750.000</p>
							
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img height="200" width="266" src="<?= base_url(); ?>assets/img/t6.jpg" alt="">
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="<?= base_url(); ?>assets/gallery/img/icons/eye.png" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="assets/gallery/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>KLX BF SE</h6>
							<p>Rp. 500.000</p>
							
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img height="200" width="266" src="<?= base_url(); ?>assets/img/t7.jpg" alt="">
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="<?= base_url(); ?>assets/gallery/img/icons/eye.png" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="assets/gallery/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>KLX BF Extreme</h6>
							<p>Rp. 500.000</p>
							
						</div>
					</div>
				</div>
				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img height="200" width="300" src="<?= base_url(); ?>assets/img/t8.jpg" alt="">
							<div class="pi-meta">
								<div class="pi-m-left">
									<img src="<?= base_url(); ?>assets/gallery/img/icons/eye.png" alt="">
									<p>quick view</p>
								</div>
								<div class="pi-m-right">
									<img src="assets/gallery/img/icons/heart.png" alt="">
									<p>save</p>
								</div>
							</div>
						</figure>
						<div class="product-info">
							<h6>Yamaha WZ 350</h6>
							<p>Rp. 1.000.000</p>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- Product section end -->


	


	<!-- Footer top section -->	
	<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-8 col-sm-12">
					<div class="footer-widget about-widget">
						<h2>Trail. L,td</h2>
						<br>
						<p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam fringilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
						<div class="cards">
							<img src="<?= base_url(); ?>assets/gallery/img/cards/5.png" alt="">
							<img src="<?= base_url(); ?>assets/gallery/img/cards/4.png" alt="">
							<img src="<?= base_url(); ?>assets/gallery/img/cards/3.png" alt="">
							<img src="<?= base_url(); ?>assets/gallery/img/cards/2.png" alt="">
							<img src="<?= base_url(); ?>assets/gallery/img/cards/1.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">usefull Links</h6>
						<ul>
							<li><a href="#">Partners</a></li>
							<li><a href="#">Bloggers</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Sitemap</h6>
						<ul>
							<li><a href="#">Partners</a></li>
							<li><a href="#">Bloggers</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Press</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Shipping & returns</h6>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Track Orders</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Shipping</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Contact</h6>
						<div class="text-box">
							<p>Your Company Ltd </p>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, </p>
							<p>+53 345 7953 32453</p>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->	

		<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p class="copyright">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Anggie Akbar</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="<?= base_url();?>assets/gallery/js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url();?>assets/gallery/js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>assets/gallery/js/owl.carousel.min.js"></script>
	<script src="<?= base_url();?>assets/gallery/js/mixitup.min.js"></script>
	<script src="<?= base_url();?>assets/gallery/js/sly.min.js"></script>
	<script src="<?= base_url();?>assets/gallery/js/jquery.nicescroll.min.js"></script>
	<script src="<?= base_url();?>assets/gallery/js/main.js"></script>
    </body>
</html>