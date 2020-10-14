@extends('templates.main')
@section('content')
<section class="container-fluid px-0 min-vh-100 bg-area-teste" style="padding-top: 100px;">
    <ul class="nav justify-content-center">
        <li id="statusBar" class="nav-item">
            <span class="nav-link">Score: <span id="score"></span></span>
        </li>
    </ul>
    <article class="dobra-2">
        <div data-test="true" class="game e19owgy77">
            <div class="game-view e19owgy79">
                <div class="desktop-only" style="height: 100%;">
                    <div style="display: flex; flex-direction: column; justify-content: center; position: absolute; left: 0px; right: 0px; top: 20px;">
                        <h2 style="opacity: 0.5;">Remaining</h2>
                        <h2 id="numberCount" style="font-size: 200%;"></h2>
                    </div>
                    <div class="game-event-area e6yfngs0" style="display: flex;justify-content: center;align-items: center;">
                        <div id="target">
                            <div data-aim-target="true" class="css-jo9r9v e6yfngs1">
                                <div class="css-1qd6j0g e6yfngs2"></div>
                                <div style="width: 33.333px; height: 33.333px;" class="css-z6vxiy e6yfngs3"></div>
                                <div style="width: 66.667px; height: 66.667px;" class="css-z6vxiy e6yfngs3"></div>
                                <div style="width: 100px; height: 100px;" class="css-z6vxiy e6yfngs3"></div>
                                <div style="width: 2px; height: 100px;" class="css-17nnhwz e6yfngs4"></div>
                                <div style="width: 100px; height: 2px;" class="css-17nnhwz e6yfngs4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desktop-only-warning">
                    <p id="seconds"></p>
                    <p id="milliseconds"></p>
                    <p id="millisecondsTest"></p>
                    <!--<p>This test is intended to be taken on a desktop or laptop. (Or make your browser window larger)</p>-->
                </div>
            </div>
        </div>
        <button onclick="stopCount()" class="btn btn-lg btn-warning">Pausar</button>
    </article>
</section>
@endsection