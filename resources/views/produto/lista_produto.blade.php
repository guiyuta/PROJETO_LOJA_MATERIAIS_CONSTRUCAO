@extends('layout_loja.main')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets_loja/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Produtos</h2>
        <ol>
          <li><a href="/loja">Home</a></li>
          <li>Produtos</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

   <!-- ======= Our Projects Section ======= -->
   <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Remodeling</li>
            <li data-filter=".filter-construction">Construction</li>
            <li data-filter=".filter-repairs">Repairs</li>
            <li data-filter=".filter-design">Design</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
  @foreach($produto as $item)
  
    <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling" style="width:350px;height:350px">
      
      <div class="portfolio-content"  >
      <div>
        <img src="{{$item['imagem1']}}" class="img-fluid" alt="">
      </div>  
        <a href="/loja/produto/detalhe/{{$item['id']}}">
        <div class="portfolio-info">
          <table>
          <h2>{{$item['nome']}} </h2>
          </table>
      
        </div>
      </div>  
    </div>
    </a>
  @endforeach
</div>

            <!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->
@endsection