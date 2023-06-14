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

        <div class="row gy-4 posts-list ">
          
            <div class="row">

            @foreach($lista as $index => $linha)
              @if($index % 2 === 0)
                <div class="row justify-content-center" style="margin-top:15px">
              @endif
              <div class="col-xl-6 col-md-6">
                <div class="post-item position-relative h-100" style=" box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.5);">

                  <div>
                    <img src="{{$linha['imagem']}}" class="img-fluid" style="width:100%;height:100%" alt="">
                  </div>

                  <div class="post-content d-flex flex-column">
                    <h3>{{$linha['nome']}}</h3>
                    <div>
                      <div class="d-flex align-items-center">
                        <i class="bi bi-person"></i> <span class="ps-2" style="text-align: center;">{{$linha['telefone']}}</span>
                      </div>
                      <a>
                        <div class="d-flex align-items-center">
                          <i class="bi bi-folder2"></i> <span class="ps-2">{{$linha['email']}}</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
                
              </div>
              <!-- End post list item -->

              @if($index % 2 !== 0 || $index === count($lista) - 1)
                </div><!-- End row -->
              @endif
            @endforeach

            </div><!-- End row -->
          

        </div><!-- End blog posts list -->

      </div>
    </section><!-- End Blog Section -->
@endsection
