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
                            @foreach ($resultCorsshairs as $result)
                            <tr>
                                <th scope="row">{{$count++}}</th>
                                <td>{{number_format($result->result_crosshair, 2, '.', ' ')}}</td>
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
            <span class="nav-link">Pontuação: <span id="score"></span></span>
        </li>
    </ul>-->
    <article class="">
        <form method="post">
            @csrf
            @method('post')
            <div data-test="true" class="game e19owgy77">
                <div class="game-view e19owgy79">
                    <div style="position: absolute; top: 1rem; left: 1rem;">
                        <span class="list-group-count" id="millisecondsTest"></span>
                        <span class="list-group-count" id="avgResult"></span>
                    </div>
                    <div class="desktop-only" style="height: 100%;">
                        <div class="remaining-count" style="">
                            <h2 style="opacity: 0.5;">Restam</h2>
                            <h2 id="numberCount" class="d-none" style="font-size: 200%;"></h2>
                        </div>
                        <div class="game-event-area e6yfngs0" style="display: flex;justify-content: center;align-items: center;">
                            <div id="target">
                                <div id="anim-target" data-aim-target="true" class="css-jo9r9v e6yfngs1">
                                    <div class="css-1qd6j0g e6yfngs2"></div>
                                    <div style="width: 33.333px; height: 33.333px;" class="css-z6vxiy"></div>
                                    <div style="width: 66.667px; height: 66.667px;" class="css-z6vxiy"></div>
                                    <div style="width: 100px; height: 100px;" class="css-z6vxiy"></div>
                                    <div style="width: 2px; height: 100px;" class="css-17nnhwz"></div>
                                    <div style="width: 100px; height: 2px;" class="css-17nnhwz"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desktop-only-warning">
                        <p>A área de testes foi projetada para desktops ou notebooks</p>
                        <!--<p>This test is intended to be taken on a desktop or laptop. (Or make your browser window larger)</p>-->
                    </div>
                </div>
            </div>
            <!--<ul class="list-group list-group-horizontal justify-content-center bg-transparent" style="min-height: 64px;">
                <li id="seconds" class="list-group-item list-group-item-dark list-group-count"></li>
                <li id="milliseconds" class="list-group-item list-group-item-dark list-group-count"></li>
                <li id="millisecondsTest" class="list-group-item list-group-item-dark list-group-count"></li>
                <li id="avgResult" class="list-group-item list-group-item-dark list-group-count"></li>
            </ul>-->
            <input id="hiddenInputAvg" type="hidden" name="mediaTest">
            <div class="p-3">
                @if(Auth::user())
                <button type="submit" onclick="stopCount()" class="btn btn-dark bg-diamond">Salvar Teste!</button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary bg-diamond" data-toggle="modal" data-target="#exampleModal">
                    Histórico
                </button>
                @else
                <button type="button" onclick="stopCount()" class="btn btn-lg btn-light">Terminei!</button>
                @endif
            </div>
        </form>
    </article>
</section>
<section class="container-fluid bg-area-teste pb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <div id="card__deck" class="card-deck">
                    
                </div>
                <div id="demo" class="text-dark">
                </div>
            </div>
        </div>
    </div>
</section>
<script>

</script>
@endsection