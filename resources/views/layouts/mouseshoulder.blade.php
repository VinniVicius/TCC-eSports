@extends('templates.main')
@section('content')
<section class="container-fluid bg-eyestrain">
    <div class="row justify-content-center align-items-center">
        <button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond mb-3">Tendinite Bicipital</button>
        <div class="w-100"></div>
        <img class="img-fluid" src="/assets/img/ombro_do_mouse.png" alt="" srcset="">
    </div>
</section>
<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-left">

            <span>Sintomas</span>

            <li>Dor;</li>
            <br>
            Na maioria das vezes, você sentirá dor na parte frontal do ombro e no braço.
            Movimentos para frente e para cima podem aumentar a dor; por exemplo, empurrando para frente ou levantando acima da cabeça.
            Alcançar o braço para trás pode ser desconfortável devido ao alongamento do tendão do bíceps.
            <br><br>
            <li>Fraqueza;</li>
            <br>
            Os movimentos de empurrar ou acima da cabeça podem ser fracos; no entanto, isso geralmente é devido à dor, e não à verdadeira fraqueza muscular.
            <br>

        </p>
    </article>
</section>

<section class="container-fluid bg-eyestrain3">
    <article class="row justify-content-center align-items-center" style="min-height: 35vh;">
        <div class="card subject-box">
            <div class="card-body">
                <h4 class="card-title">Índice</h4>
                <ul>
                    <li><a href="#Content1" class="card-link">Sintomas</a></li>
                    <li><a href="#Content2" id="Content2" class="card-link">Introdução</a></li>
                    <li><a href="#Content3" class="card-link">Causa</a></li>
                    <li><a href="#Content4" class="card-link">Prevenção</a></li>
                </ul>
            </div>
        </div>
    </article>
</section>

<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-left">

            <span style="color: #0eb7b7; font-size:30px;">Introdução</span>
            <br>
            <br>
            A Tendinite Bicipital é uma tensão por uso excessivo que ocorre na inserção proxima (mais perto do centro do corpo) da cabeça longa do músculo bíceps.
            <br><br>
            O músculo bíceps está envolvido na flexão do cotovelo e do ombro.
            <br id="Content3"><br>
            Como o nome sugere, os jogadores de PC são mais propensos a sofrer esse ferimento devido ao uso do mouse.<br>
            Devido ao uso indevido e desequilíbrio, a orientação das fibras do tendão é interrompida.
            Essa disfunção é chamada de tendinose , que é diferente de tendinite - um termo comum para essa condição.


        </p>
    </article>
</section>

<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-left">

            <span style="color: #0eb7b7; font-size:30px;">Mecanismo comum de lesão</span>
            <br>
            <br>
            <span style="color: #0eb7b7;">Má Configuração da cadeira ou mesa</span><br>
            Se sua mesa for muito alta, você precisará elevar mais o braço para alcançar o mouse. Da mesma forma, se sua cadeira for muito baixa, o mesmo problema ocorre.
            <br>
            <br>
            <span style="color: #0eb7b7;">Falta de contração excêntrica</span><br>
            As ações realizadas em jogos para PC não incluem contração excêntrica ou alongamento dos músculos extensores.
            O desequilíbrio do encurtamento muscular sem alongamento sob tensão leva à ruptura das fibras do tendão.
            <br>
            <br>
            <span style="color: #0eb7b7;">Falta de contração do músculo antagonista</span><br>

            É improvável que você execute ações de puxar ou remar durante o jogo.<br>
            A falta de extensão de ombro forte permite a atividade excessiva dos músculos flexores do ombro (incluindo o bíceps),
            perpetuando o encurtamento e a ruptura das fibras do tendão.


        </p>
    </article>
</section>

<section class="container-fluid bg-eyestrain2-content" id="Content4">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-left">

            <span style="color: #0eb7b7; font-size:30px;">Prevenção e Tratamento</span>
            <br>
            <br>
            Os mecanismos mais comuns de lesão na Tendinite Bicipital são os desequilíbrios.
            Portanto, equilibrar a contração e ativação muscular é uma medida preventiva simples, mas extremamente eficaz.

        </p>
    </article>
</section>

<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-center" style="font-size: 15px;">

            <span style="color: red; font-size:30px;">Aviso Legal</span>
            <br>
            <br>
            Esta informação é apenas para fins educacionais e não se destina a substituir o conselho do seu médico. <br><br>
            O Site e os desenvolvedores se isenta de qualquer responsabilidade pelas decisões que você toma com base nessas informações.
            As informações contidas neste site não estabelecem, nem implicam, relação médico-paciente. <br><br>O Site e os desenvolvedores não oferece
            essas informações para fins de diagnóstico. Um diagnóstico não deve ser presumido com base nas informações
            fornecidas.

        </p>
    </article>
</section>

@endsection