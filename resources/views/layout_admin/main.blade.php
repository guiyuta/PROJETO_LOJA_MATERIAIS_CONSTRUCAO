<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  

  <!-- Scripts -->


  <!-- Favicons -->
  <link href="{{ asset('/assets_admin/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('/assets_admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/assets_admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets_admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets_admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets_admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets_admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets_admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets_admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/assets_admin/css/style.css') }}" rel="stylesheet">

</head>

<body>



  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/loja" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Empresa</span>
      </a>
    </div>
    <!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
      <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="margin-right:15px">
                    @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    
                    @endauth
                </div>
            @endif
      </div>
      </ul>
    </nav>

    
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="admin nav-link collapsed" href="/admin">
          <i class="bi bi-envelope"></i>
          <span>Mensagens para Contato</span>
        </a>
      </li><!-- End Home Nav -->

      <li class="nav-item">
        <a class="admin nav-link collapsed" href="/admin/cliente">
          <i class="bi bi-person"></i>
          <span>Clientes</span>
        </a>
      </li><!-- End Teste Nav -->

      <li class="nav-item">
        <a class="admin nav-link collapsed" href="/admin/quemsomos">
          <i class="bi bi-question-circle"></i>
          <span>Quem Somos</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="admin nav-link collapsed" href="/admin/produto">
          <i class="bi bi-envelope"></i>
          <span>Produtos</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="admin nav-link collapsed" href="/admin/comentario">
          <i class="bi bi-card-list"></i>
          <span>Comentários</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="admin nav-link collapsed" href="pages-login.html">
          <i class="bi bi-file-earmark"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="admin nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="admin nav-link collapsed" href="/admin/users">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Usuários</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <section class="section">
      <div class="row">
          <div>
            <div class="card-body">
              @yield('content')
            </div>
          </div>
      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  

</body>

</html>