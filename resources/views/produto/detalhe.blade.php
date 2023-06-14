@extends('layout_loja.main')

@section('content')
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets_loja/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Produtos</h2>
        <ol>
          <li><a href="/loja">Home</a></li>
          <li>Produtos</li>
        </ol>

      </div>
    </div>
<br>
<br>

<div class="container position-relative d-flex flex-colum align-items-center" style="justify-content-center" data-aos="fade">
              

                  <div class="d-inline-block">
                <div id="hero-carousel" style="width:300px;height:auto" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

                <div>


                <div class="carousel-item active" ><img src="{{$produto['imagem1']}}" class="img-fluid" alt=""></div>
                <div class="carousel-item" ><img src="{{$produto['imagem2']}}" class="img-fluid" alt=""></div>
                <div class="carousel-item" ><img src="{{$produto['imagem3']}}" class="img-fluid" alt=""></div>
               
                <a style="color:black" class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>
              
                <a style="color:black"  class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>        
              

                

              </div>

                </div>
                
              </div>
   
              <div class="container position-relative d-flex flex-column align-items-center justify-content-center" data-aos="fade">
              <div style=width:500px>
                <h2>{{$produto['nome']}} </h2>
                <br>
                <h4>Descrição do Produto</h4>
                <tr class="borda">
                  <td>{{$produto['descricao']}}</td>
                </tr>
                <br>
<br>
</div>

  <div class="d-block">
    <form action="/loja/produto/adicionar_ao_carrinho" method="POST">
      @csrf
      <div class="col-2">
        <label for="inputNanme4" class="form-label">Quantidade</label>
        <input type="text" class="form-control" placeholder="Digite a quantidade" style="width:100px" name="quantidade"  value="1" min="1">
      </div>  
      <br>
      <input type="hidden" name="id_produto" value="{{$produto['id']}}">    
      <button style="display: inline-block;" class="btn btn-primary">Adicionar ao carrinho</button>
      <button class="btn btn-primary">Comprar</button>            
    </form>
    <br>
    <br>
  </div>
</div>


@endsection