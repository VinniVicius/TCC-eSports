@extends('templates.main')
@section('content')
<section class="container-fluid" style="background-image: url('/assets/img/fundo5.png');
    background-repeat: no-repeat; background-size: cover; min-height: 20vh;">
</section>

<section class="container-fluid bg-esports" style="border-bottom: 5px solid #0eb7b7;">
    <article class="container">
        <h1 class="display-1 text-left">eSports</h1>
    </article>
</section>

<section class="container-fluid bg-esports2" id="Content1">
    <article class="row justify-content-center align-items-center" style="min-height: 35vh;">
        <div class="card subject-box" style="width: 18rem; border: 2px solid #0eb7b7;">
            <div class="card-body">
                <h4 class="card-title">Índice</h4>
                    <ul>
                        <li><a href="#Content1" class="card-link">O que é eSports</a></li>
                        <li><a href="#Content2" class="card-link">Cenário Atual</a></li>
                    </ul>
            </div>
        </div>
    </article>

    <div class="row justify-content-center align-items-center" style="min-height: 35vh;">
      <button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond">O que é eSports</button>
     </div>

</section>
<section class="container-fluid bg-esports2-content">
    <article>
        <p class="text-left">
        Existem várias interpretações sobre o que a indústria de eSports realmente abrange. Além de opiniões diferentes em relação aos limites do mercado, 
        há divergências sobre o próprio termo eSports (também conhecido como esporte eletrônico ou ciberesporte).<br><br>
        Seguindo a definição da Newzoo, eSports são jogos competitivos de nível profissional ou semi-profissional 
        em um formato organizado (torneio ou liga), com um prêmio ou objetivo específico, como ganhar o título de um campeonato ou dinheiro de premiação.<br><br> 
        E-Sports apresentam similaridades aos esportes tradicionais, dispondo de atletas e técnicos profissionais, rotinas de treinamento, patrocinadores, 
        transmissão de partidas e uma vasta audiência, além de regras, equipamentos, táticas e até mesmo uniformes.
        </p>
    </article>
</section>

<section class="container-fluid bg-esports3" id="Content2">
    <div class="row justify-content-center align-items-center" style="min-height: 35vh;">
      <button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond">Cenário Atual</button>
     </div>
</section>

<section class="container-fluid bg-esports2-content">
    <article>
        <p class="text-left" style="padding-top: 20px;">
        O número de jogadores eletrônicos vem aumentando e, com isso, o interesse nas competições também. <br>Muitos praticam, outros são apenas fãs ou espectadores.<br><br>
        Quanto à audiência, existem classificações de perfil: entusiastas são aqueles que assistem aos conteúdos de eSports mais de uma vez por mês, enquanto 
        aqueles que não assistem mais de uma vez por mês são considerados espectadores ocasionais, de acordo com a Newzoo. <br><br>Conforme os dados divulgados pela empresa,
         pode-se afirmar que o público de eSports chegará a 495,0 milhões ao redor do mundo em 2020. Desse total, entusiastas de eSports representam 222,9 milhões 
         (um aumento de 25 milhões em um ano), com perspectiva de crescimento de 11,3% para 2023, atingindo 295,4 milhões. Enquanto isso, o número de espectadores 
         ocasionais ao redor do globo será de 272,2 milhões em 2020, superando os 245,2 milhões de 2019, e com expectativa de aumento de 9,6% para 2023, representando 
         351,1 milhões.
        </p>
    </article>
</section>

@endsection