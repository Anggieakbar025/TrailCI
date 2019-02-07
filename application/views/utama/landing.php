<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Ubuntu:400,500" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/landing.css">
</head>

<body>
	<div class="container">
		<div class="one-half left">
			<h1>Login as User</h1>
			<a href="<?= base_url('login/index') ?>" class="cta">Let's Go</a>
		</div>
		<div class="one-half right">
			<h1>Login as Admin</h1>
			<a href="<?= base_url('login/adminLog') ?>" class="cta"> Let's Go</a>
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script>
		$l = $('.left')
		$r = $('.right')

		$l.mouseenter(function () {
			$('.container').addClass('left-is-hovered');
		}).mouseleave(function () {
			$('.container').removeClass('left-is-hovered');
		});

		$r.mouseenter(function () {
			$('.container').addClass('right-is-hovered');
		}).mouseleave(function () {
			$('.container').removeClass('right-is-hovered');
		});

	</script>
</body>

</html>
