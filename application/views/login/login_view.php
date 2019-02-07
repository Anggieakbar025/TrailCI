<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		<?= $judul; ?>
	</title>

	<link href="https://fonts.googleapis.com/css?family=PT+Sans|Ubuntu:400,500" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/login.css">
</head>

<body>

	<div class="wrapper">
		<div class="background">
			<div class="left">
				<h2 class="back-header">Dont have an account yet?</h2>
				<p class="back-p">Well doggonit you should sign up today!</p>
				<button class="back-btn signup-but">SIGN UP</button>
			</div>
			<div class="right">
				<h2 class="back-header">Do you already have an account?</h2>
				<p class="back-p">Well doggonit let's get you logged in!</p>
				<button class="back-btn login-but">LOGIN</button>
			</div>
		</div>
		<div class="form-container" >
			<div class="sign-up" id="signup">
				<h2 class="form-header">SIGN UP</h2>

				<!-- validation message for a successful registration -->
				<?php if ($this->session->flashdata('sukses')) : ?>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<?php echo $this->session->flashdata('sukses'); ?>
				</div>
				<?php endif; ?>

				<?= form_open('register_cstmr/insertUser'); ?>

				<input type="text" id="email" name="email" placeholder="Email"><i class="fa fa-envelope-o"></i>
				

				<input type="text" id="fname" name="fname" placeholder="Enter Full Name"><i class="fa fa-user"></i>
				

				<input type="text" id="username" name="username" placeholder="Enter Username"><i class="fa fa-user"></i>
				

				<input type="text" id="telepon" name="telepon" placeholder="Enter Telephone Number"><i class="fa fa-call"></i>
				

				<input type="password" id="pass" name="password" placeholder="Password"><i class="fa fa-lock"></i>
				

				<button class="form-btn">SIGN UP</button>

				<?= form_close(); ?>

			</div>
			<div class="login hide" id="login">
				<h2 class="form-header">LOGIN</h2>

				<!-- validation message for a successful registration -->
				<?php if ($this->session->flashdata('sukses')) : ?>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<?php echo $this->session->flashdata('sukses'); ?>
				</div>
				<?php endif; ?>

				<?php echo form_open('login/index') ?>

				<input type="text" id="email" name="email" placeholder="Email"><i class="fa fa-envelope-o"></i>
				<input type="password" id="pass" name="password" placeholder="Password"><i class="fa fa-lock"></i>
				<button class="form-btn">LOGIN</button>

				<?= form_close(); ?>


			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script>
		$(document).ready(function () {
			var signUp = $('.signup-but');
			var logIn = $('.login-but');

			signUp.on('click', function () {
				$('.login').fadeOut('slow').css('display', 'none');
				$('.sign-up').fadeIn('slow');

				$('.form-container').animate({
					left: '10px'
				}, 'slow');
			});

			logIn.on('click', function () {
				$('.login').fadeIn('slow');
				$('.sign-up').fadeOut('slow').css('display', 'none');

				$('.form-container').animate({
					left: '400px'
				}, 'slow');
			});
		});

	</script>
</body>

</html>
