@extends('templates.main')
@section('content')
<section class="jumbotron jumbotron-fluid jumbo-esports" style="border-bottom: 5px solid #0eb7b7">
  <article class="container">
    <h1 class="display-4">eSports e Saúde</h1>
      <button type="button" class="btn btn-dark btn-lg rounded-0 bg-diamond">Saiba mais</button>
  </article>
</section>
<section class="container-fluid bg-dobra-2" style="border-bottom: 5px solid #0eb7b7;">
  <article class="container dobra-2" style="clip-path: polygon(0 0, 80% 0, 100% 100%, 0 100%); background-color: #1A1818; margin-left: -15px;">
    <div class="col-lg-6" style="position: relative;">
      <!--<button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro " style="color: #343a40;"></button>-->
      <button type="button" class="btn btn-dark btn-lg rounded-0 bg-diamond">eSports</button>
      <h1 class="display-4 text-center">Introdução ao<br> eSports</h1>

      <a type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond" href="{{route('esports')}}">Saiba mais</a>
    </div>
  </article>
</section>


<section class="container-fluid altura bg-diamond" style="border-bottom: 5px solid #0eb7b7; background-color: #1A1818;">
  <article class="container">
  </article>
</section>

<section class="container-fluid bg-lesions" style="border-bottom: 5px solid #0eb7b7; border-top: 5px solid #0eb7b7">
  <article class="container lesions">
    <div class="row">
      <div class="col-lg-6">

        <button type="button" class="btn btn-dark btn-lg rounded-0 bg-diamond" style="margin-top: 55px;">Lesões</button>
        <h1 class="display-4 text-center">Falar sobre<br> Lesões</h1>
      </div>
  </article>
</section>
<section class="container-fluid bg-lesions-2" style="border-bottom: 5px solid #0eb7b7;">
  <article class="container" style="min-height:inherit;">
    <div class="row">
      <div class="col-lg-5">
        <button type="button" class="btn btn-dark btn-lg rounded-0 col-5 btn-full-negro bg-diamond " style="color: #fff;">Fadiga Ocular</button>
        <button type="button" class="btn btn-dark btn-lg rounded-0 col-5 btn-full-negro bg-diamond" style="color: #fff;">Tendinite</button>
        <button type="button" class="btn btn-dark btn-lg rounded-0 col-5 btn-full-negro bg-diamond" style="color: #fff;">Lesão 3</button>
        <button type="button" class="btn btn-dark btn-lg rounded-0 col-5 btn-full-negro bg-diamond" style="color: #fff;">lesão 4</button>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-5">
      <button type="button" class="btn btn-dark btn-lg rounded-0 col-5 bg-diamond" style="background-color: #0eb7b7;">Lesão 5</button>
      <button type="button" class="btn btn-dark btn-lg rounded-0 col-5 bg-diamond" style="background-color: #0eb7b7;">Lesão 6</button>
      <button type="button" class="btn btn-dark btn-lg rounded-0 col-5 bg-diamond" style="background-color: #0eb7b7;">Lesão 7</button>
      <button type="button" class="btn btn-dark btn-lg rounded-0 col-5 bg-diamond" style="background-color: #0eb7b7;">Lesão 8</button>
      </div>
    </div>
  </article>
</section>


<section class="container-fluid altura bg-diamond" style="border-bottom: 5px solid #0eb7b7; background-color: #1A1818;">
  <article class="container">
  </article>
</section>


<section class="container-fluid bg-confort" style="border-bottom: 5px solid #0eb7b7; border-top: 5px solid #0eb7b7">
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


<section class="container-fluid bg-teste" style="border-bottom: 5px solid #0eb7b7; border-top: 5px solid #0eb7b7">
  <article class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 35vh;">
      <button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond">Teste seu Desempenho</button>
     </div>
  </article>
</section>

<section class="container-fluid bg-teste2">
  <article>
  <div class="row justify-content-around">
      <div class="col-lg-3 bg-diamond card" style="top: 50px;">
        <img src="/assets/img/alvo.png" class="card-img-top" alt="..." style="width: 200px; align-self: center; margin-top: 10px;">
          <div class="card-body" style="text-align: center;">
            <h2 class="card-title">Teste de Mira</h2>
            <p class="card-text">Teste sua Mira e veja quantos pontos voce consegue fazer</p>
            <a href="{{route('aimtrainerview')}}" class="btn btn-dark btn-lg rounded-0 btn-full-negro">Fazer o teste</a>
          </div>
        </div>
      <div class="col-lg-3 bg-diamond card" style="top: 50px;">
        <img src="/assets/img/raio.png" class="card-img-top" alt="..." style="width: 80px; align-self: center; margin-top: 10px;">
        <div class="card-body" style="text-align:center;">
          <h2 class="card-title">Teste de Reação</h2>
          <p class="card-text">Faça o teste de Reação e veja seu tempo de resposta</p>
          <a href="#" class="btn btn-dark btn-lg rounded-0 btn-full-negro">Fazer o teste</a>
        </div>
      </div>
    </div>
  </article>
</section>


<div class="w-100"></div>
<div class="col"></div>
@endsection