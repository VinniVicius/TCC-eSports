function generatePosX(posX) {
    var retpos;
    var width = 0;
    width = $(".game-event-area").width();
    console.log("Tamanho div: " + width);
    var posX = 1 + Math.floor(Math.random() * width);
    retpos = posX;
    return retpos;
}

function generatePosY(posY) {
    var retpos;
    var height = 0;
    height = $(".game-event-area").height();
    console.log("Tamanho div: " + height);
    var posY = 1 + Math.floor(Math.random() * height);
    retpos = posY;
    return retpos;
}