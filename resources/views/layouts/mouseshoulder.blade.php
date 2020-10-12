@extends('templates.main')
@section('content')
<section class="container-fluid" style="background-image: url('/assets/img/fundo5.png');
    background-repeat: no-repeat; background-size: cover; min-height: 20vh;">
</section>

<section class="container-fluid bg-eyestrain">
    <div class="row justify-content-center align-items-center" style="min-height: 35vh;">
      <button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond">Ombro do Mouse</button>
     </div>
</section>

<section class="container-fluid bg-mouseshoulder" id="Content1"></section>

<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-center">
        
            <span style="color: #0eb7b7; font-size:30px;">Sintomas</span>

            <li>Dor;</li>
            <br>
            Na maioria das vezes, você sentirá dor na parte frontal do ombro e no braço
            Movimentos para frente e para cima podem aumentar a dor; por exemplo, empurrando para frente ou levantando acima da cabeça
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
        <div class="card subject-box" style="width: 18rem; border: 2px solid #0eb7b7;">
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
        
            <span style="color: #0eb7b7; font-size:30px;">Introdução</span>
            <br>
            <br>
            O ombro do Mouse é uma tensão por uso excessivo que ocorre na inserção proximal (mais perto do centro do corpo) da cabeça longa do músculo bíceps.
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
        <p class="text-center">
        
            <span style="color: #0eb7b7; font-size:30px;">Mecanismo comum de lesão</span>
            <br>
            <br>
            <span style="color: #0eb7b7;">Configuração deficiente da cadeira ou mesa</span><br>
            Se sua mesa for muito alta, você precisará elevar mais o braço para alcançar o mouse Da mesma forma, se sua cadeira for muito baixa, o mesmo problema ocorre.
            <br>
            <br>
            <span style="color: #0eb7b7;">Falta de contração excêntrica</span><br>
            Conforme descrito na Fisiopatologia acima, as ações realizadas em jogos para PC não incluem contração excêntrica ou alongamento dos músculos extensores.
            O desequilíbrio do encurtamento muscular sem alongamento sob tensão leva à ruptura das fibras do tendão.
            <br>
            <br>
            <span style="color: #0eb7b7;">Falta de contração do músculo antagonista</span><br>

            Também descrito na Fisiopatologia acima, é improvável que você execute ações de puxar ou remar durante o jogo.<br>
            A falta de extensão de ombro forte permite a atividade excessiva dos músculos flexores do ombro (incluindo o bíceps), 
            perpetuando o encurtamento e a ruptura das fibras do tendão.
                                                           

        </p>
    </article>
</section>

<section class="container-fluid bg-eyestrain2-content" id="Content4">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-center">
        
            <span style="color: #0eb7b7; font-size:30px;">Prevenção e Tratamento</span>
            <br>
            <br>
            Os mecanismos mais comuns de lesão no ombro do mouse são os desequilíbrios. 
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