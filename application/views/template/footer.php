<footer class="container-fluid py-5" id="cp">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6 ">
						<div class="logo-part">
							<h1 id="osm"><i class="fas fa-cog"></i>SM</h1>
							<p>Based on Malang East Java - Indonesia</p>
							<p>Est. 2015</p>
						</div>
					</div>
					<div class="col-md-6 px-5">
						<h4 class=""> About Comunity</h4>
						<p>Merupakan komunitas motor "tua" custom apapun di Malang-Jawa Timur.</p>

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
									<li> <a href="#"> Help</a> </li>
									<li> <a href="#"> Contact</a> </li>
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
			<footer class="container">
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
			$('button.close')[0].on('click', function(){
				$(this).css('display', 'none');
			});
		});

	</script>
	<script>
		window.onscroll = function() {myFunction()};

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</html>
