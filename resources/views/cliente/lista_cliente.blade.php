@extends('layout_loja.main')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets_loja/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Clientes</h2>
        <ol>
          <li><a href="/loja">Home</a></li>
          <li>Clientes</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">

        @foreach($lista as $linha)
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

              <div >
                <img src="{{$linha['imagem']}}" class="img-fluid" style="width:100%;height:100%"alt="">
              </div>

              <div class="post-content d-flex flex-column">

                <h3>{{$linha['nome']}}</h3>

                <div>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2" style='text-align: center;'>{{$linha['telefone']}}</span>
                  </div>
                  <a>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">{{$linha['email']}}</span>
                  </div>
                </div>

              </div>

            </div>
          </div><!-- End post list item -->
        @endforeach
        </div><!-- End blog posts list -->

      </div>
    </section><!-- End Blog Section -->
@endsection