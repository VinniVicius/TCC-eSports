$(document).ready(function () {

    var form = new FormData();
    /*var data = [];*/
    var games = ['89', '47', '197'];
    var x = "", y = "";
    var real = 0;
    var settings = {
        "url": "https://www.cheapshark.com/api/1.0/games?title=counterstrike",
        "method": "GET",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
    };

    $.ajax(settings).done(function (response) {
        console.log("String obtida do Webservice em REST: " + response);
        var result = JSON.parse(response);
        console.log(result);
        games.forEach(function (item, indice, array) {
            console.log(item, indice);
            x += result[indice]['external'];
            console.log("Nome do jogo: " + x);
            $("#list_games").append(`<li class="list-group-item bg-area-teste">` + x + `</li>`);
            x = "";
        });
    });

});
