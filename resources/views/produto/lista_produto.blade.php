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

         <!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container"  data-aos="fade-up" data-aos-delay="200">
  @foreach($produto as $item)
  
    <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling borda" style="width:350px;height:350px;margin-right:30px">
      
      <div>
      <div>
      <a href="/loja/produto/detalhe/{{$item['id']}}">
        <img style="width:300px;height:250px"src="{{$item['imagem1']}}" class="img-fluid" alt="" >
      </div>  
        <br>
        <div class="portfolio-info" style="display: flex;justify-content: center;align-items: center; height: 100%;">
          <table>
            <tr>
              <td >
                <h6>{{$item['nome']}} </h6>
              </td>
            </tr>  
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