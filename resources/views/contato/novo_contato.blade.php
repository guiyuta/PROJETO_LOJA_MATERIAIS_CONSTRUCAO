@extends('layout_loja.main')

@section('title', 'Cadastro de Contato')

@section('content')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets_loja/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contato</h2>
        <ol>
          <li><a href="/loja">Home</a></li>
          <li>Contato</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Nosso Endereço</h3>
              <p>R. Bernardino de Campos, 16-165 - Vila Souto, Bauru - SP, 17051-000</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Nosso E-mail</h3>
              <p>consc@gmail.com</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Nosso Número</h3>
              <p>+55 (14) 3427-4188</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6 ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7381.199464809113!2d-49.10002507506786!3d-22.330972791230533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bf6652f44dbf57%3A0x6ad6396ead1bab2c!2sCimenfer%20-%20Materiais%20para%20Constru%C3%A7%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1686610937648!5m2!1spt-BR!2sbr" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="/loja/contato/salvar_novo" method="post" role="form">
              @csrf
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
              </div>
              <br>
              <div class="form-group">
                <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required>
              </div>
              <br>
              <div class="form-group">
                <textarea class="form-control" name="mensagem" rows="5" placeholder="Mensagem" required></textarea>
              </div>
              <br>
              <div class="text-center">
                <button type="submit">Enviar Mensagem</button>
              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->
@endsection