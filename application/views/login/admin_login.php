<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $judul; ?></title>

	<link href="https://fonts.googleapis.com/css?family=PT+Sans|Ubuntu:400,500" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/login.css">
</head>

<body>

	<div class="wrapper">
		<div class="background">
			<div class="right">
				<h2 class="back-header">Dont have an account yet?</h2>
				<p class="back-p">You can't register as admin, because you doesn't have permittion</p>
			</div>
		</div>
		<div class="form-container" >
			<div class="login" id="login">
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

				<?php echo form_open('login/adminLog') ?>

				<input type="text" id="email" name="email" placeholder="Email"><i class="fa fa-envelope-o"></i>
				<input type="password" id="pass" name="password" placeholder="Password"><i class="fa fa-lock"></i>
				<button class="form-btn">LOGIN</button>

				<?= form_close(); ?>


			</div>
		</div>
	</div>
</body>

</html>
