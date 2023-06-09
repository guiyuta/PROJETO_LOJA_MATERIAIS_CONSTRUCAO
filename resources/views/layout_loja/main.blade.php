<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ConstruCenter</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets_loja/img/favicon.png" rel="icon">
  <link href="/assets_loja/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets_loja/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets_loja/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets_loja/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/assets_loja/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets_loja/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets_loja/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets_loja/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/loja" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="/assets_loja/img/logo.png" alt=""> -->
        <h1>ConstruCenter<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/loja" class="aula nav-link scrollto active">Home</a></li>
          <li><a href="/loja/quemsomos" class="aula nav-link scrollto">Quem somos</a></li>
          <li><a href="/loja/comentario" class="aula nav-link scrollto">Comentários</a></li>
          <li><a href="/loja/produto" class="aula nav-link scrollto">Produtos</a></li>
          <li><a href="/loja/cliente" class="aula nav-link scrollto">Clientes</a></li>
          <li><a href="/loja/contato" class="aula nav-link scrollto">Entre em contato</a></li>
          <li><a href="/admin" class="aula nav-link scrollto">Administrativo</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
    
  </header><!-- End Header -->
  
  
  <main id="main">
  @yield('content')
   
  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

<div class="footer-content position-relative">
  <div class="container">
    <div class="row">

      <div class="col-lg-2 col-md-3 footer-links">
        <ul>
        </ul>
      </div><!-- End footer links column-->

      <div class="col-lg-4 col-md-6">
        <div class="footer-info">
          <h3>ConstruCenter</h3>
          <p>
            R. Bernardino de Campos, 16-165 - Vila Souto, Bauru - SP, 17051-000 <br><br><br>
            <strong>Phone:</strong> +55 (14) 3427-4188<br>
            <strong>Email:</strong> consc@gmail.com<br>
          </p>
        </div>
      </div><!-- End footer info column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <ul>
        </ul>
      </div><!-- End footer links column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Links Úteis</h4>
        <ul>
          <li><a href="/loja">Home</a></li>
          <li><a href="/loja/quemsomos">Quem somos</a></li>
          <li><a href="/loja/comentario">Comentários</a></li>
          <li><a href="/loja/produto">Produtos</a></li>
          <li><a href="/loja/cliente">Clientes</a></li>
          <li><a href="/loja/contato">Entre em contato</a></li>
          <li><a href="/admin">Administrativo</a></li>
        </ul>
      </div><!-- End footer links column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <ul>
        </ul>
      </div><!-- End footer links column-->

    </div>
  </div>
</div>

</footer>
<!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets_loja/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets_loja/vendor/aos/aos.js"></script>
  <script src="/assets_loja/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets_loja/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets_loja/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets_loja/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets_loja/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets_loja/js/main.js"></script>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<script>
  $(document).ready(function(){
    var url= window.location.pathname

    var links = $('.aula')

    links.map(function(){
      var item = $(this).attr('href')
      $(this).removeClass('active')
      if (url == item)
        $(this).addClass('active')
    })
  })
</script>

</body>

</html>