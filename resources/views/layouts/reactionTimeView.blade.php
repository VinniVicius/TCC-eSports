@extends('templates.main')
@section('content')
<section class="container-fluid px-0 min-vh-100 bg-area-teste" style="padding-top: 100px;">
    <ul class="nav justify-content-center">
        <li id="statusBar" class="nav-item">
            <span class="nav-link">Score: <span id="score"></span></span>
        </li>
    </ul>
    <article class="">
        <div id="game-id" onclick="waitingTime()" class="game game-start e19owgy77" data-running="false">
            <div class="game-view e19owgy79">
                <div class="desktop-only" style="height: 100%;">
                    <div class="react-grid">
                        <h2 class="start">Clique para iniciar</h2>
                    </div>
                </div>
                <div class="desktop-only-warning">
                    <!--<p>This test is intended to be taken on a desktop or laptop. (Or make your browser window larger)</p>-->
                    <p id="avgResult"></p>
                </div>
            </div>
        </div>
        <p id="seconds"></p>
        <p id="milliseconds"></p>
        <p id="millisecondsTest"></p>
        <form action="" method="post">
            @csrf
            @method('post')
            <input id="hiddenInputAvg" type="hidden" name="mediaReact">
            <button type="submit" class="btn btn-lg btn-warning">Ok!</button>
        </form>
    </article>
</section>
@endsection