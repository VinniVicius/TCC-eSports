var getAwaitTime;
var clickCount = 0;
var timeControl;
var millisecondsTest = $('#millisecondsTest');
var a = $('#game-id').data('running'); //getter
/*var seconds = 2;
var msToFunc;*/
var timeToFinish = 5;
$(".game").on("click", function () {
    waitingTime();
});
function waitingTime() {
    if (timeToFinish != 1) {
        clearTimeout(timeControl);
        ticker.stop();
        if ($('.game').attr('data-running') === 'false') {
            console.log('Is ZERO');
            $('#game-id').attr('data-running', 'true'); //setter
            $('.react-grid h2').remove('h2');
            $('.game').addClass('waiting-state');
            $('.react-grid').append(`<h1 class="esperar">Espere a troca de cor de fundo<br>...</h1>`);
            getAwaitTime = awaitTime();
            timeControl = setTimeout(function () { goTime() }, getAwaitTime);
        } else {
            console.log('Not ZERO');
            $('#game-id').attr('data-running', 'true'); //setter
            $('.react-grid h2').remove('h2');
            $('.react-grid h1.esperar').remove('h1');
            $('.game').removeClass('go-state').addClass('waiting-state');
            $('.react-grid').append(`<h1 class="esperar">Espere a troca de cor de fundo<br>...</h1>`);
            getAwaitTime = awaitTime();
            timeControl = setTimeout(function () { goTime() }, getAwaitTime);
        }
    } else {
        clearTimeout(timeControl);
        $(".desktop-only").attr(`style`, `display: none;`);
        $("#avgResult").append(avgCalc(msValues));
    }
    //console.log(getAwaitTime);
    /*msToFunc = getAwaitTime * 1000;
    setTimeout()*/
};

/*$('.game').on('click', function(){
    if ($('.game').attr('data-running') === 'false') {
        click
    };
});*/

function awaitTime(value) {
    var retAwaitValue;
    var value = 1 + Math.floor(Math.random() * (4500 - 1000) + 1000);
    retAwaitValue = value;
    return retAwaitValue;
}

function goTime() {
    ticker.resetReact();
    clickCount++;
    console.log(clickCount);
    getAwaitTime = 0;
    $('.react-grid h1').remove('h1');
    $('.game').removeClass('waiting-state').addClass('go-state');
    $('.react-grid').append('<h2>Go!</h2>');
    $('.game').on('click', function () {
        $('#game-id').data('running', 0); //setter
        waitingTime();
    });
};

/*function awaitTime(value){
    var retAwaitTime = 0;
    var value = Math.random() * (0.920 - 0.0200) + 0.0200;
    retAwaitTime = value;
    return retAwaitTime;
}*/

/*doTheRandom();
function doTheRandom() {
    random = randomizator(60000,200000);
    // Up to 1 second
    setTimeout(doTheRandom, randomizator(1000, 2000)); // 1-2 seconds
}*/