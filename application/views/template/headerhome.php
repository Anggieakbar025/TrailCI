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
		<?= $judul;?>
	</title>
</head>
<style>
	/* body {
      background-image: linear-gradient(to bottom , #ffff99,#ff9999,#ff5050);
    } */
  </style>

<body>

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
		<a class="navbar-brand header" href="#"><i class="fas fa-book-reader"></i> BUKU CI</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
		 aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav menuju">
				<a class="nav-item nav-link active"  href="<?= base_url('Buku/index'); ?>"><i class="fas fa-home"></i><span class="sr-only">(current) </span></a>
			</div>
		</div>
	</nav>
