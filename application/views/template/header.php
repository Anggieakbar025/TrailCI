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
		<?= $judul;?>
	</title>
</head>
  <style>
    /* body {
      background-image: linear-gradient(to bottom , #ffff99,#ff9999,#ff5050);
    } */
  </style>
<body>


  <div class="jumbotron jumbotron-fluid text-center bg">
      
      
        <a class="nav-link dropdown-toggle spzl" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Anggie
        </a>
        <a class="navbar-brand float-left"  href="#" id="gambar"><i class="fas fa-book-reader pb-5"></i> BUKU CI</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('Login/logout') ?>">logout</a>
        </div>
      
            
            <h1 onmouseover="gantiwarna(this)" onmouseout="back(this)" class="display-4" id="title">WELCOME !!</h1>
            <p onmouseover="gantiwarna2(this)" onmouseout="back2(this)" class="lead subtitle">This is a simple page of our collection BOOK</p>
          </div>
              <nav class="navbar navbar-expand-lg navbar-light jalan" id="navbar">
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav mr-auto item">
                    <li class="nav-item active">
                      <a  class="nav-link " href="<?= base_url('Buku/index') ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link " href="../utama/user_view#event">Service <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link " href="<?= base_url('login/logout')?>">Gallery <span class="sr-only">(current)</span></a>
                    </li>
                    
                  </ul>
                </div>
              </nav>
              
