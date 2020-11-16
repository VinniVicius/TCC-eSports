$(document).ready(function () {

    var form = new FormData();
    var data = [];
    var x = "", y = "";
    var real = 0;
    var settings = {
        "url": "https://www.cheapshark.com/api/1.0/games?ids=128,129,130",
        "method": "GET",
        "timeout": 0,
        "processData": false,
        "mimeType": "multipart/form-data",
        "contentType": false,
        "data": form
    };

    $.ajax(settings).done(function (response) {
        console.log("Teste CheapShark: " + response);
        var result = JSON.parse(response);
        console.log(result);
        /*data.push(response);
        console.log(data);
        var valueAtIndex1 = data[1];
        console.log("Teste Name: " + valueAtIndex1);*/

        /*var object = {};
        formData.forEach(function (value, key) {
            object[key] = value;
        });
        var json = JSON.stringify(object);*/
        for( i = 128; i < 131; i++ ){
            console.log("Valor de i: " + i);
                x += result[i]['info']['title'];
                y += result[i]['deals'][0]['price'];
                parseFloat(y);
                console.log("Game em dólar: " + y);
                real += y * 5.46;
                for(j = 0; j < 1; j++){
                    $("#card__deck").append(`<div class="card card-hover">
                    <div class="card-body">
                        <div class="card-title">` + x + `</div>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Preço: R$` + real + `</small>
                    </div>
                    </div>`);
                    x = "";
                    y = "";
                    real = "";
                    
                }
                /*document.getElementById("demo").innerHTML = result[i]['info']['title'];*/
        }
        /*document.getElementById("demo").innerHTML = x;*/
        /*var obj = JSON.parse(response);*/
        /*const sample = result[0]['info'][0]['title'];*/
        /*var name = response.get('external');
        document.getElementById("demo").innerHTML = name;*/
    });

});
