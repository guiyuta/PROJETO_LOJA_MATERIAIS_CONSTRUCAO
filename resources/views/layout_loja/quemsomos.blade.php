@extends('layout_loja.main')

@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets_loja/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Quem somos</h2>
        <ol>
          <li><a href="/loja">Home</a></li>
          <li>Quem somos</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" style="background-image: url(/assets_loja/img/about.jpg);"></div>
                              
          <div>
            <h1>Texto na Página Principal</h1>
            <p>{{ $texto->texto }}</p>
          </div>


        </div>

      </div>
    </section>
    <!-- End About Section -->

@endsection