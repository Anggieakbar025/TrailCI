<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	 crossorigin="anonymous">

	<!-- My CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
	 crossorigin="anonymous">

	<title>
		User View
	</title>
</head>
<style>
	/* body {
      background-image: linear-gradient(to bottom , #ffff99,#ff9999,#ff5050);
    } */

</style>

<body>


	<div class="jumbotron jumbotron-fluid text-center bg">


		<a class="nav-link dropdown-toggle spzl" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
		 aria-haspopup="true" aria-expanded="false">
			Anggie
		</a>
		<a class="navbar-brand float-left" href="#" id="gambar">
			Trail. L,td
		</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<a class="dropdown-item" href="<?= base_url('Login/logout') ?>">logout</a>
		</div>


		<h1 onmouseover="gantiwarna(this)" onmouseout="back(this)" class="display-4" id="title">WELCOME !!</h1>
		<p onmouseover="gantiwarna2(this)" onmouseout="back2(this)" class="lead subtitle">This is a simple page of our
			collection BOOK</p>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark jalan" id="navbar">
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto item">
				<li class="nav-item active">
					<a class="nav-link " href="<?= base_url('Buku/index') ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="#event">Service</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link " href="<?= base_url('home/gallery')?>">Gallery <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active booking">
					<a class="nav-link" href="<?= base_url('home/booking')?>">Book Now <span class="sr-only">(current)</span></a>
				</li>

			</ul>
		</div>
	</nav>


	<div class="container marketing main mt-5">
		<h1>Keuntungan menyewa di tempat kami</h1>
		<hr class="featurette-divider">
		<!-- Three columns of text below the carousel -->
		<div class="row mt-5 profil text-center">
			<div class="col-lg-4">
				<i class="fab fa-cc-mastercard"></i>
				<br><br><br>
				<h2>Murah</h2>
				<hr class="featurette-divider">	
				<p>
					Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut
					id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.
				</p>
			<hr class="featurette-divider">	
			</div><!-- /.col-lg-4 -->

			<div class="col-lg-4">
				<i class="fas fa-key"></i>
				<br><br><br>
				<h2>Terpercaya</h2>
				<hr class="featurette-divider">	
				<p>
					Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis
					consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
				</p>
			<hr class="featurette-divider">	
			</div><!-- /.col-lg-4 -->

			<div class="col-lg-4">
				<i class="fas fa-bolt"></i>
				<br> <br> <br>
				<h2>Pelayanan Cepat</h2>
				<hr class="featurette-divider">	
				<p>
					Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis
					euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
					
				</p>
			<hr class="featurette-divider">	
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->
	</div>


	<main role="main">

		<div id="myCarousel" class="carousel slide" id="mainprogram" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?= base_url()?>/assets/img/trail1.jpg" width="100%" height="655vh">
					<div class="container">
						<div class="carousel-caption text-right">
							<h1>Example headline.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
								metus.
								Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?= base_url()?>/assets/img/trail2.jpg" width="100%" height="655vh">
					<div class="container">
						<div class="carousel-caption text-left">
							<h1>Another example headline.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
								metus.
								Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?= base_url()?>/assets/img/trail3.jpg" width="100%" height="655vh">
					<div class="container">
						<div class="carousel-caption text-center">
							<h1>One more for good measure.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
								metus.
								Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


		<!-- event -->
		<div class="container marketing main" id="event">
			<h1>Our Service</h1>
			<hr class="featurette-divider">
			<br> <br>
			<div class="row featurette conten">
				<div class=" keterangankiri ">
					<h1 class="featurette-heading">Guide yang trampil, <span class="text-muted">dan berwawasan luas</span></h1>
					<hr class="featurette-divider">	
					<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
						semper.
						Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				</div>
				<div class="col-md-5">
					<img src="<?= base_url()?>/assets/img/service2.jpg" width="500px" height="500px">
				</div>
			</div>
			<br> <br>
			<hr class="featurette-divider">
			<br> <br>
			<div class="row featurette">
				<div class="col-md-6 order-md-3 keterangankanan">
					<h1 class="featurette-heading">Jaminan Destinasi <span class="text-muted">yang indah.</span></h1>
					<hr class="featurette-divider">	
					<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
						semper.
						Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				</div>
				<div class="col-md-5 order-md-2">
					<img src="<?= base_url()?>/assets/img/service3.jpg" width="500px" height="500px" >
				</div>
			</div>
			<br> <br>
			<hr class="featurette-divider">
			<br> <br>
			<div class="row featurette">
				<div class=" keterangankiri">
					<h1 class="featurette-heading">Jaminan motor aman<span class="text-muted"> tanpa bermasalah .</span></h1>
					<hr class="featurette-divider">	
					<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
						semper.
						Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				</div>
				<div class="col-md-5">
					<img src="<?= base_url()?>/assets/img/service1.jpg" width="500px" height="500px">
				</div>
			</div>
			<br><br>
			<!-- /END THE FEATURETTES -->

		</div><!-- /.container -->

		<footer class="container-fluid  py-5 " id="cp">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6 ">
								<div class="logo-part">
									<h1 id="osm">Trail.Co</h1>
									<p>Based on Malang East Java - Indonesia</p>
									<p>Est. 2015</p>
								</div>
							</div>
							<div class="col-md-6 px-5">
								<h4 class=""> About Us</h4>
								<p>
									Kami merupakan jasa rental motor trail Malang. 
									Berdiri sejak 2015.
								</p>

							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6 px-5">
								<h4 class="px-4"> Help us</h4>
								<div class="row ">
									<div class="col-md-6 px-5">
										<ul>
											<li> <a href="#"> Home</a> </li>
											<li> <a href="#"> About</a> </li>
											<li> <a href="#"> Service</a> </li>
											<li> <a href="#"> Team</a> </li>
											<li> <a href="#"> Book</a> </li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 ">
								<h4> Newsletter</h4>
								<div class="social fa">
									<a href="https://web.facebook.com/anggie.a.outsider" target="_blank"><i class="fab fa-facebook-square"
										 aria-hidden="true"></i></a>
									<a href="https://www.instagram.com/anggieakbar__/" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
								</div>
								<br><br>

							</div>
						</div>
					</div>
					<footer class="container ">
						<p class="float-right"><a href="#main">Back to top</a></p>
						<p>&copy; 2017-2018 Abay, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
					</footer>
				</div>
			</div>
			</div>
	</main>
</body>

<script src="js/bootstrap.min.js"></script>
<script>
	function gantiwarna(x) {
		x.style.color = "cyan";
		x.style.transition = "all ease-in-out .2s";
	}

	function back(x) {
		x.style.color = "white";
		x.style.transition = "all ease-in-out .2s";
	}

</script>
<script>
	function gantiwarna2(x) {
		x.style.color = "cyan";
		x.style.transition = "all ease-in-out .2s";
	}

	function back2(x) {
		x.style.color = "white";
		x.style.transition = "all ease-in-out .2s";
	}

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function () {
		// Add smooth scrolling to all links
		$("a").on('click', function (event) {

			// Make sure this.hash has a value before overriding default behavior
			if (this.hash !== "") {
				// Prevent default anchor click behavior
				event.preventDefault();

				// Store hash
				var hash = this.hash;

				// Using jQuery's animate() method to add smooth page scroll
				// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 800, function () {

					// Add hash (#) to URL when done scrolling (default click behavior)
					window.location.hash = hash;
				});
			} // End if
		});
		$('button.close')[0].on('click', function () {
			$(this).css('display', 'none');
		});
	});

</script>
<script>
	window.onscroll = function () {
		myFunction()
	};

	var navbar = document.getElementById("navbar");
	var sticky = navbar.offsetTop;

	function myFunction() {
		if (window.pageYOffset >= sticky) {
			navbar.classList.add("sticky")
		} else {
			navbar.classList.remove("sticky");
		}
	}

</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
 crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
 crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
 crossorigin="anonymous"></script>

</html>
