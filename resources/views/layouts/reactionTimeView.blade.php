@extends('templates.main')
@section('content')
<section class="container-fluid px-0 min-vh-100 bg-area-teste" style="padding-top: 100px;">
    @if(Auth::user())
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Histórico de resultados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tempo Médio</th>
                                <th scope="col">Data do Resultado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resultReacts as $result)
                            <tr>
                                <th scope="row">{{$count++}}</th>
                                <td>{{number_format($result->result_react, 2, '.', ' ')}}</td>
                                <td>{{date_format($result->created_at,"d/m/Y")}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    @else
    <!-- TESTE -->
    @endif
    <!--<ul class="nav justify-content-center">
        <li id="statusBar" class="nav-item">
            <span class="nav-link">Score: <span id="score"></span></span>
        </li>
    </ul>-->
    <article class="">
        <div class="game game-start e19owgy77" >
            <div class="game-view e19owgy79">
                <div style="position: absolute; top: 1rem; left: 1rem;">
                    <span class="list-group-count" id="millisecondsTest"></span>
                    <span class="list-group-count" id="avgResult"></span>
                </div>
                <div id="game-id" onclick="waitingTime()" data-running="false"  class="desktop-only" style="height: 100%;">
                    <div class="react-grid">
                        <h2 class="start">Clique para iniciar</h2>
                    </div>
                </div>
                <div class="desktop-only-warning">
                    <p>A área de testes foi projetada para desktops ou notebooks</p>
                    <!--<p id="avgResult"></p>-->
                </div>
            </div>
        </div>
        <form action="" method="post">
            @csrf
            @method('post')
            <input id="hiddenInputAvg" type="hidden" name="mediaReact">
            <div class="p-3">
            @if(Auth::user())
            <button type="submit" class="btn btn-dark bg-diamond">Salvar Teste!</button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary bg-diamond" data-toggle="modal" data-target="#exampleModal">
                Histórico
            </button>
            @else
            <button type="button" class="btn btn-dark bg-diamond">Terminei!</button>
            @endif
            </div>
        </form>
    </article>
</section>
@endsection