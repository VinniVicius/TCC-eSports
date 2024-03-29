@extends('templates.main')
@section('content')

<section class="container-fluid bg-eyestrain">
    <div class="row justify-content-center align-items-center">
        <button type="button" class="btn btn-dark btn-lg rounded-0 btn-full-negro bg-diamond mb-3">Tendinite</button>
        <div class="w-100"></div>
        <img class="img-fluid" src="/assets/img/tendinite.png" alt="" srcset="">
    </div>
</section>

<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-center">

            <span>Sintomas</span>

            <li>Dor no local, que pode irradiar para toda musculatura ao redor;</li>
            <li>Fadiga;</li>
            <li>Perda de força;</li>
            <li>Fisgadas e dores ao se movimentar;</li>
            <li>Inchaço;</li>
            <li>Calor;</li>
            <li>Vermelhidão;</li>
            <li>Formigamento;</li>
            <li>Perda da mobilidade;</li>
            <li>Atrofia muscular.</li>

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
            Uma inflamação aguda ou crônica dos tendões, que se manifesta nos músculos dos dedos, e que geralmente é provocada por dois fatores:
            <br><br>
            A movimentação repetitiva e o período de repouso muito curto. É encontrada principalmente na região em que a dor é agravada por movimentos voluntários.
            O tendão não é tão forte quanto o osso e nem tão elástico quanto o músculo, portanto, no caso de sobrecarga, é a estrutura que, geralmente, mais sofre.
            <br id="Content3"><br>
            Assim, as causas da tendinite costumam estar relacionadas, principalmente, a alguns fatores de risco que resultam na sobrecarga dos tendões.


        </p>
    </article>
</section>

<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-left">

            <span style="color: #0eb7b7; font-size:30px;">Mecanismo comum de lesão</span>
            <br>
            <br>
            A causa mecânica é provocada por esforços prolongados e repetitivos, além de sobrecarga.
            A causa química é provocada por alimentação incorreta e por algumas toxinas presentes no organismo. 
            Também pode ocorrer quando os músculos e tendões não estão sendo suficientemente drenados, ocasionando a desidratação.
            <br>
            <br>
            <br>
            <br id="Content4">

        </p>
    </article>
</section>

<section class="container-fluid bg-eyestrain2-content">
    <article class="container" style="padding-bottom: 20px; padding-top: 20px;">
        <p class="text-left">

            <span style="color: #0eb7b7; font-size:30px;">Prevenção e reabilitação</span>
            <br>
            <br>
            A melhor forma de se prevenir da tendinite é tomando alguns cuidados, como:<br><br>

            →     Manter uma alimentação balanceada;<br><br>
            →     Antes de começar uma rotina de exercícios, condicionar os músculos;<br><br>
            →     Sempre fazer aquecimento antes de começar qualquer atividade física;<br><br>
            →     Quem trabalha muito com computador e faz movimentos repetitivos deve parar sempre e se alongar para evitar a LER (lesão por esforço repetitivo);<br><br>
            →     Procurar ajuda médica e seguir todas as orientações prescritas.


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