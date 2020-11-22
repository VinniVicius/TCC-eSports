<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TCC - eSports</title>
  <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/icon?family=Material+Icons')}}">
  <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>
<nav class="navbar navbar-expand-lg fixed-top navbar-eSports bg-eSports">
  <a class="navbar-brand" href="{{ url('/') }}">
    <img class="logo" src="/assets/img/logo-2.png" alt="Logo TCC eSports" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="material-icons">menu</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuEsports" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          eSports
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkEsports">
          <a class="dropdown-item" href="{{route('esports')}}">O que é</a>
          <a class="dropdown-item" href="{{route('esports')}}">Cenário Atual</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLesoes" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lesões
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLesoes">
          <a class="dropdown-item" href="{{route('eyestrain')}}">Fadiga Ocular</a>
          <a class="dropdown-item" href="{{route('tendonitis')}}">Tendinite</a>
          <a class="dropdown-item" href="{{route('headache')}}">Dor de Cabeça (Tensão)</a>
          <a class="dropdown-item" href="{{route('mouseshoulder')}}">Tendinite Bicipital (Dores nos Bíceps)</a>
          <a class="dropdown-item" href="{{route('mouseelbow')}}">Epicondilose Lateral (Dores no Cotovelo)</a>
          <a class="dropdown-item" href="{{route('disfunction')}}">Disfunção da articulação sacroilíaca (SI)</a>
          <a class="dropdown-item" href="{{route('syndrome')}}">Síndrome Cruzada Superior</a>
          <a class="dropdown-item" href="{{route('tenosynovitis')}}">Tenossinovite Estenosante</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuRecomenda" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recomendações
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuRecomenda">
          <a class="dropdown-item" href="{{route('posture')}}">Postura</a>
          <a class="dropdown-item" href="{{route('sleep')}}">Hábitos de sono</a>
          <a class="dropdown-item" href="{{route('hydration')}}">Hidratação</a>
          <a class="dropdown-item" href="{{route('fatigue')}}">Cansaço do Jogo</a>
          <a class="dropdown-item" href="{{route('lunch')}}">Alimentação</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{route('areateste')}}" id="navbarDropdownMenuTeste" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Area de Testes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuTestes">
          <a class="dropdown-item" href="{{route('aimtrainerview')}}">Mira</a>
          <a class="dropdown-item" href="{{route('reactionview')}}">Reação</a>
        </div>
      </li>
    </ul>
    <span class="navbar-text">
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item bg-diamond">
          <a class="nav-link btn btn-diamond-lg" href="{{ route('register') }}">{{ __('Criar conta') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </span>
</nav>

<body>
  @yield('content')
</body>
<!-- JS, Popper.js, and jQuery -->
<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<!-- Verify the page, if is a testing area page, then load the needed scripts -->
<?php if (\Route::current()->getName() == 'aimtrainerview') {
?>
  <script src="{{ asset('js/game.js') }}"></script>
  <script src="{{ asset('js/msCalc.js') }}"></script>
  <script src="{{ asset('js/generatePos.js') }}"></script>
  <script src="{{ asset('js/timerTest.js') }}"></script>
  <script src="{{ asset('js/getGameList.js') }}"></script>
  
<?php
} if( \Route::current()->getName() == 'reactionview'){
  ?>
    <script src="{{ asset('js/reactionGame.js') }}"></script>
    <script src="{{ asset('js/timerTest.js') }}"></script>
    <script src="{{ asset('js/getGameList.js') }}"></script>
  <?php
} ?>
</html>