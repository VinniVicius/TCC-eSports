@extends('templates.main')
@section('content')
<section class="jumbotron jumbotron-fluid jumbo-esports">
  <article class="container">
    <h1 class="display-4">eSports e Saúde</h1>
    <a type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond" href="{{route('esports')}}">Saiba mais</a>
  </article>
</section>
<section class="container-fluid p-0 bg-dobra-2">
  <article class="container-fluid dobra-2">
    <div class="col-lg-6">
      <!--<button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro " style="color: #343a40;"></button>-->
      <h1 class="display-4 text-center w-100">Introdução ao<br> eSports</h1>
      <button type="button" class="btn btn-dark btn-lg btn-diamond-lg rounded-0 bg-diamond">eSports</button>
    </div>
  </article>
</section>


<section class="container-fluid altura bg-diamond" style="border-bottom: 5px solid #0eb7b7; background-color: #1A1818;">
  <article class="container">
  </article>
</section>

<section class="container-fluid bg-lesions">
  <article class="container lesions">
    <div class="row">
      <div class="col-lg-6">
        <h1 class="display-4 text-center w-100">Falar sobre<br> Lesões</h1>
        <button type="button" class="btn btn-dark btn-lg btn-diamond-lg rounded-0 bg-diamond">Lesões</button>
      </div>
  </article>
</section>
<section class="container-fluid bg-lesions-2">
  <div class="container">
    <!-- row row-cols -->
    <article class="row row-cols-1 row-cols-md-3 justify-content-around" style="min-height:inherit;">
      <div class="col card__content-links">
        <div class="card h-100 card-hover bg-dark bg-diamond card__grid-anchors">
          <a type="button" class="btn btn-lg bg-diamond" style="color: #fff;" href="{{route('eyestrain')}}">Fadiga Ocular</a>
          <a type="button" class="btn btn-lg bg-diamond" style="color: #fff;" href="{{route('tendonitis')}}">Tendinite</a>
          <a type="button" class="btn btn-lg bg-diamond" style="color: #fff;" href="{{route('headache')}}">Dor de Cabeça (Tensão)</a>
          <a type="button" class="btn btn-lg bg-diamond" style="color: #fff;" href="{{route('mouseshoulder')}}">Ombro do Mouse</a>
        </div>
      </div>

      <div class="col card__content-links">
        <div class="card h-100 card-hover bg-dark bg-diamond card__grid-anchors">
          <a type="button" class="btn btn-lg bg-diamond" style="color: #fff;" href="{{route('mouseelbow')}}">Cotovelo do Mouse</a>
          <a type="button" class="btn btn-lg bg-diamond" style="color: #fff;" href="{{route('disfunction')}}">Disfunção da Articulação Sacroilíaca (SI)</a>
          <a type="button" class="btn btn-lg bg-diamond" style="color: #fff;" href="{{route('syndrome')}}">Síndrome Cruzada Superior</a>
          <a type="button" class="btn btn-lg bg-diamond" style="color: #fff;" href="{{route('tenosynovitis')}}">Tenossinovite Estenosante</a>
        </div>
      </div>

    </article>
    <!--/row row-cols -->
  </div>


  <!--<div class="col-lg-5">
        <a type="button" class="btn btn-dark btn-lg rounded-0 col-5 btn-full-negro bg-diamond " style="color: #fff;" href="{{route('eyestrain')}}">Fadiga Ocular</a>
        <a type="button" class="btn btn-dark btn-lg rounded-0 col-5 btn-full-negro bg-diamond" style="color: #fff;" href="{{route('tendonitis')}}">Tendinite</a>
        <a type="button" class="btn btn-dark btn-lg rounded-0 col-5 btn-full-negro bg-diamond" style="color: #fff;" href="{{route('headache')}}">Dor de Cabeça (Tensão)</a>
        <a type="button" class="btn btn-dark btn-lg rounded-0 col-5 btn-full-negro bg-diamond" style="color: #fff;" href="{{route('mouseshoulder')}}">Ombro do Mouse</a>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-5">
      <a type="button" class="btn btn-dark btn-lg rounded-0 col-5 bg-diamond" style="background-color: #0eb7b7;" href="{{route('mouseelbow')}}">Cotovelo do Mouse</a>
      <a type="button" class="btn btn-dark btn-lg rounded-0 col-5 bg-diamond" style="background-color: #0eb7b7;" href="{{route('disfunction')}}">Disfunção da Articulação Sacroilíaca (SI)</a>
      <a type="button" class="btn btn-dark btn-lg rounded-0 col-5 bg-diamond" style="background-color: #0eb7b7;" href="{{route('syndrome')}}">Síndrome Cruzada Superior</a>
      <a type="button" class="btn btn-dark btn-lg rounded-0 col-5 bg-diamond" style="background-color: #0eb7b7;" href="{{route('tenosynovitis')}}">Tenossinovite Estenosante</a>
      </div>-->
</section>


<section class="container-fluid altura bg-diamond" style="border-bottom: 5px solid #0eb7b7; background-color: #1A1818;">
  <article class="container">
  </article>
</section>


<section class="container-fluid bg-confort">
  <article class="container confort">
    <div class="row">
      <div class="col-lg-6">
        <button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond" style="color: #fff;">+ Conforto</button>
        <button type="button" class="btn btn-dark btn-lg rounded-0 bg-diamond" style="margin-top: 55px;">- Desgasto</button>
        <h1 class="display-4 text-center">Explicando como a postura influencia na performace</h1>
        <button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond">Saiba mais</button>
      </div>
    </div>
  </article>
</section>


<section class="container-fluid altura bg-diamond" style="border-bottom: 5px solid #0eb7b7; background-color: #1A1818;">
  <article class="container">
  </article>
</section>


<section class="container-fluid bg-teste">
  <article class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 35vh;">
      <button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond">Teste seu Desempenho</button>
    </div>
  </article>
</section>

<section class="container-fluid bg-teste2">
  <article>
    <div class="row justify-content-around">
      <div class="card-deck test-cards">
        <div class="card card-hover bg-dark bg-diamond">
          <img src="/assets/img/alvo.png" class="card-img-top" alt="..." style="width: 200px; align-self: center; margin-top: 10px;">
          <div class="card-body">
            <h5 class="card-title">Teste de Mira</h5>
            <p class="card-text">Teste sua Mira e veja quantos pontos voce consegue fazer</p>
            <a href="{{route('aimtrainerview')}}" class="btn btn-dark btn-lg rounded-0 btn-full-negro stretched-link">Fazer o teste</a>
          </div>
        </div>
        <div class="card card-hover bg-dark bg-diamond">
          <img src="/assets/img/raio.png" class="card-img-top" alt="..." style="width: 80px; align-self: center; margin-top: 10px;">
          <div class="card-body">
            <h5 class="card-title">Teste de Reação</h5>
            <p class="card-text">Faça o teste de Reação e veja seu tempo de resposta</p>
            <a href="{{route('reactionview')}}" class="btn btn-dark btn-lg rounded-0 btn-full-negro stretched-link">Fazer o teste</a>
          </div>
        </div>
      </div>
    </div>
  </article>
</section>


<div class="w-100"></div>
<div class="col"></div>
@endsection