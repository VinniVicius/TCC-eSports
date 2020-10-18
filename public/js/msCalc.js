var ms = 0000;
var milliseconds = $('#milliseconds');
var millisecondsTest = $('#millisecondsTest');
//var msDividend = 0;

function setDateMs() {
    isZero(ms);
    milliseconds.html(`<strong id="millisecond" data-ms-value="` + ms + `">` + ms + '</strong> Milisegundo' + (ms > 1 ? 's' : ''));

    /*setTimeout(setDateMs, 10);*/
}

function isZero(value) {
    if (value == 1) {
        ms = 1000;
    }
    else {
        ms += 10;
    }
};
/* Meio que esse cara aqui não está sendo utilizado, não será utilizado... mas as variáveis lá em cima estão sendo usadas para teste */