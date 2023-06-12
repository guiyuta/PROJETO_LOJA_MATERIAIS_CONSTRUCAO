@extends('layout_loja.main')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets_loja/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Comentários</h2>
        <ol>
          <li><a href="/loja">Home</a></li>
          <li>Comentários</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">
        @foreach($lista as $linha)
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  
                  <h3>{{$linha['nome']}}</h3>
                  <h4>Nota: {{$linha['nota']}}/5</h4>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    {{$linha['mensagem']}}
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
        @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <div class="card-body" style="margin-left: 300px; margin-right: 300px; margin-top: 100px; margin-bottom: 100px; text-align: center;">
    <h5 class="card-title">Nos dê o seu comentário Também!</h5>
    <form action="/loja/comentario/salvar_novo" method="post">
        @csrf
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Digite seu nome:</label>
        <input type="text" class="form-control" placeholder="Digite seu nome" name="nome" required>
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Nos dê uma nota de 1 a 5:</label>
        <input type="text" class="form-control" placeholder="Digite sua nota" name="nota" required>
        @error('nota')
            <div class="alert alert-danger">A nota deve estar entre 1 e 5.</div>
        @enderror
    </div>
    <div class="col-12">
        <label for="inputNanme4" class="form-label">Nos dê sua opinião a nosso respeito:</label>
        <input type="text" class="form-control" placeholder="Digite sua opinião" name="mensagem" required>
    </div>
    <br>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href='/admin/cliente' class='btn btn-default'>Voltar</a>
    </div>
    </form>
    </div>
@endsection