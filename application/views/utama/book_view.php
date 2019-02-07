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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<title>
		Booking
	</title>
</head>
  <style>
    /* body {
      background-image: linear-gradient(to bottom , #ffff99,#ff9999,#ff5050);
    } */
  </style>
<body>

<div class="container">
	<div class="row mt-4">
		<div class="col md-6">
			<div class="card">
				<div class="card-header">
					Tambah Data Buku
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="judul">Judul</label>
							<input type="text" class="form-control" name="judul" value="<?= $this->form_validation->set_value('judul'); ?>"
							 id="judul" placeholder="Judul">
							<small class="form-text text-danger">
								<?= form_error('judul') ?></small>
						</div>

						<div class="form-group">
							<label for="penulis">Penulis</label>
							<input type="text" class="form-control" name="penulis" value="<?= $this->form_validation->set_value('penulis'); ?>"
							 id="penulis" placeholder="Penulis">
							<small class="form-text text-danger">
								<?= form_error('penulis') ?></small>
						</div>

						<div class="form-group">
							<label for="tahun_terbit">Tahun Terbit</label>
							<input type="text" class="form-control" name="tahun_terbit" value="<?= $this->form_validation->set_value('tahun_terbit'); ?>"
							 id="tahun_terbit" placeholder="Tahun Terbit">
							<small class="form-text text-danger">
								<?= form_error('tahun_terbit') ?></small>
						</div>

						<div class="form-group">
							<label for="harga">Harga</label>
							<input type="text" class="form-control" name="harga" value="<?= $this->form_validation->set_value('harga'); ?>"
							 id="harga" placeholder="Harga">
							<small class="form-text text-danger">
								<?= form_error('harga') ?></small>
						</div>

						<div class="form-group">
							<label for="id_genre">Genre</label>
							<select class="form-control" name="genre" id="id_genre">		 
								<?php foreach ($genre as $g ) : ?>
									<option value="<?= $g['id_genre'] ?>">
										<?= $g['genre'] ?>
									</option>	
								<?php endforeach; ?>
							</select>
						</div>

						<div>
							<button type="submit" class="btn btn-outline-primary float-right">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	</html>

