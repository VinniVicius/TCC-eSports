@extends('templates.main')
@section('content')
<section class="container-fluid bg-eyestrain">
<div class="row justify-content-center align-items-center">
        <button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond mb-3">Síndrome Cruzada Superior</button>
        <img class="img-fluid" src="/assets/img/syndrome.png" alt="" srcset="">
    </div>
</section>

<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-center">
        
            <span>Sintomas</span>

            <li>Desequilíbrio muscular;</li>
            <span>Tenso ou hipertônico:</span> peitoral maior, esternocleidomastóideo, trapézio superior, elevador da escápula.<br>
            <span>Fraco ou inibido:</span> trapézio inferior, flexores profundos do pescoço, serrátil anterior.<br><br>

            <li>Desequilíbrio postural;</li>
            <span>Ombros arredondados para a frente:</span> as articulações dos ombros serão puxadas para frente e para dentro.<br>
            <span>Ombros encolhidos:</span> as omoplatas serão elevadas.<br>
            <span>Transporte anterior da cabeça:</span> o meio das costas, cabeça e pescoço serão flexionados para a frente, e a cabeça não ficará 
            nivelada sobre as articulações dos ombros.<br><br>
            
            <li>Outros sintomas podem incluir:</li>
            Dor de pescoço; Dor no ombro; Diminuição da amplitude de movimento dos ombros, meio das costas e pescoço; Sensação de aperto ou desconforto com os movimentos do ombro ou pescoço.


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
        <p class="text-center">
        
            <span>Introdução</span>
            <br>
            <br>
            A síndrome cruzada superior é um desequilíbrio postural que ocorre nos músculos da parte superior das costas, escapular e articulações dos ombros.<br> 
            Essa condição é o resultado de ficar sentado por muito tempo e será agravada pela má postura.<br><br>
            Enquanto está sentado, alguns músculos ficam presos em uma posição encurtada - uma posição que começa a se firmar.<br id="Content3"> 
            Ao mesmo tempo, outros músculos ficam presos em uma posição alongada e esses músculos tornam-se fracos ou inibidos.

        </p>
    </article>
</section>

<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-center">
        
            <span>Mecanismo comum de lesão</span>
            <br><br>
            O mecanismo para o aparecimento da síndrome cruzada superior é simples e direto.<br> 
            A má postura prolongada , na maioria das vezes ao sentar-se, pode levar ao desequilíbrio muscular.<br>
            <div class="row justify-content-center">
                <img class="col-lg-8 align-self-center" src="/assets/img/dor_de_cabeca2.png">
            </div>
            <br>
            <span>Curvando-se ou inclinado para a frente</span><br> 
            Inclinar-se para frente aumenta a pressão na parte inferior das costas.
            <br><br>
            <span>Sentado por muito tempo</span><br> 
            A posição estática prolongada, mesmo em uma postura sentada "mais apropriada", pode eventualmente levar à disfunção da articulação sacroilíaca.<br id="Content4">
            Certifique-se de fazer pausas !

        </p>
    </article>
</section>

<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-center">
        
            <span>Prevenção</span>
            <br>
            <br>
            Da mesma forma para o mecanismo, a prevenção é simples e direta. Verifique sua postura e evite ficar sentado por muito tempo, fazendo pausas.<br><br>
            No entanto, existem outras medidas preventivas para reduzir o risco de desenvolver a síndrome cruzada superior se você ficar preso em uma posição 
            sentada por muitas horas por dia.<br>
            Às vezes, um simples lembrete pode ajudar a manter seu corpo em uma posição melhor.<br><br> 
            No entanto, ficar sentado por muito tempo - especialmente em uma posição inadequada - criará os desequilíbrios musculares descritos anteriormente.
            Quando isso acontece, simplesmente pensar em sentar-se de maneira mais adequada ainda pode ser ineficaz.

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