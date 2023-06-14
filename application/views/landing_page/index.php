<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PINJAM KOMIK</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/landing_page_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/landing_page_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="assets/landing_page_assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/landing_page_assets/css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PINJAM KOMIK</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <!--li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portofolio</a>
            </li-->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
</li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Pinjam Komik</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded">Aplikasi Untuk Peminjaman Komik</p>
            <p class="text-helvetica ">
              <?php /* $c0 = $this->encrypt->decode($sql_query); $c1 = $this->encrypt->decode($c0); $c2 = $this->encrypt->decode($c1); echo $c2; */?>
              <?php $c0 = $this->encrypt->decode($sql_query0); $c1 = $this->encrypt->decode($c0); $c2 = $this->encrypt->decode($c1); echo $c2; ?>
            </p>
            <a class="btn btn-light btn-xl mb-1 js-scroll-trigger" href="<?php echo base_url('admin') ?>"><?php echo $logged_petugas ?></a>
            <a class="btn btn-light btn-xl mb-1 js-scroll-trigger" href="<?php echo base_url('member') ?>"><?php echo $logged_peminjam ?></a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Pinjam komik sebagai sarana atau wadah untuk masyarakat untuk membaca komik </h2>
            
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Hubungi Kami!</h2>
            <hr class="my-4">
            <p class="mb-5">Hubungi kami jika anda menemukan masalah!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>098134567890</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              pikomail@gmail.com
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/landing_page_assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/landing_page_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/landing_page_assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/landing_page_assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="assets/landing_page_assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="assets/landing_page_assets/js/creative.min.js"></script>

  </body>


</html>
