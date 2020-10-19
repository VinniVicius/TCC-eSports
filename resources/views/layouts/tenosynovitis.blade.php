@extends('templates.main')
@section('content')
<section class="container-fluid bg-eyestrain">
    <div class="row justify-content-center align-items-center">
        <button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond mb-3">Tenossinovite Estenosante</button>
        <div class="w-100"></div>
        <img class="img-fluid" src="/assets/img/tenossinovite.png" alt="" srcset="">
    </div>
</section>
<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-center">

            <span>Sintomas</span>

            <li>Dor na região;</li>
            <li>Inchaço nos dedos, palma da mão ou na frente do pulso;</li>
            <li>os dedos podem estar completamente presos e incapazes de abrir.</li>
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
        <p class="text-center">

            <span>Introdução</span>
            <br>
            <br>
            Tenossinovite Estenosante é uma doença caracterizada por inflamação e espessamento progressivo da bainha (ou “sinóvia”) que envolve os tendões.
            <br><br>
            Para jogadores, isso pode ocorrer nos tendões flexores na parte frontal do antebraço, na mão e nos dedos.
            <br id="Content3"><br>
            O espessamento da bainha do tendão acabará por levar a movimentos restritos.
            Se a tenossinovite progressiva não for tratada, ela levará a uma incapacidade completa de abrir os dedos
            (uma deformidade em flexão conhecida como contratura em flexão ), onde os dedos ficam presos na posição flexionada ou dobrada - mesmo com a ajuda da outra mão.


        </p>
    </article>
</section>

<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-center">

            <span>Mecanismo comum de lesão</span>
            <br>
            <br>
            <li>Posição ruim da mão</li>
            Jogar com os pulsos em desvio ulnar ou radial (leia abaixo) pode aumentar a fricção dos tendões extensor curto do polegar e
            abdutor longo do polegar sob a bainha do tendão.<br>
            <span>Desvio radial:</span> é o termo para dobrar seu pulso em direção ao lado do polegar.<br>
            <span>Desvio ulnar:</span> é o termo para dobrar seu pulso em direção ao lado mindinho.
            <br>
            <br>
            <li>Pulando seu aquecimento</li>
            O objetivo de se aquecer é aumentar o fluxo sanguíneo para os músculos e lubrificar as articulações e outras estruturas (por exemplo, bainha do tendão)
            Jogar sem primeiro realizar um aquecimento adequado pode permitir o aumento da fricção dos tendões extensor curto do polegar e
            abdutor longo do polegar sob a bainha do tendão.<br>
            <br>
            <br>
            <li>Pulando seu tempo de Descanso</li>
            Um objetivo importante de um descanso é diminuir a inflamação.
            Jogar sem realizar um descanso adequado depois pode permitir a inflamação crônica das bainhas do tendão.<br id="Content4">

        </p>
    </article>
</section>

<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-center">

            <span>Prevenção e Tratamento</span>
            <br>
            <br>
            Como uma condição inflamatória, alimentos anti-inflamatórios, suplementos e o uso de gelo na área podem ajudar a diminuir a inflamação e
            melhorar a dor e outros sintomas. <br><br>No entanto, se você desenvolveu a contratura em flexão em um ou mais dedos, as medidas antiinflamatórias não reverterão a
            incapacidade de estender o(s) dedo(s).<br><br>
            A prevenção inclui dieta antiinflamatória e suplementos junto com exercícios simples e alongamentos. <br>
            O tratamento, infelizmente, requer cirurgia para liberar a contratura em flexão.


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