$(document).ready(function () {
  var x = 5;
  document.getElementById('numberCount').innerHTML = x;
  $("#target").click(function () {
    if (x != 1) {
      var retvalPosX = generatePosX();
      var retvalPosY = generatePosY();
      $(".game-event-area").removeAttr("style");
      document.getElementById('numberCount').innerHTML = --x;
      $("#target").attr(`style`, `width: 0px; height: 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, ` + retvalPosX + `, ` + retvalPosY + `, 0, 1);`);
    } else {
      $(".desktop-only").attr(`style`, `display: none;`);
    }
  });
});

function generatePosX(posX) {
  var retpos;
  var posX = 1 + Math.floor(Math.random() * 900);
  retpos = posX;
  return retpos;
}

function generatePosY(posY) {
  var retpos;
  var posY = 1 + Math.floor(Math.random() * 400);
  retpos = posY;
  return retpos;
}

/*function generatePos (posX){
    var retpos;
    var posX = 1 + Math.floor(Math.random() * 6);
    retpos = posX;
});*/

/*var posX = 1 + Math.floor(Math.random() * 6);
    var posy = 1 + Math.floor(Math.random() * 6);*/
/*<div style="width: 0px; height: 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 669.7, 302.783, 0, 1);">
    <div data-aim-target="true" class="css-jo9r9v e6yfngs1">
        <div class="css-1qd6j0g e6yfngs2"></div>
        <div style="width: 33.333px; height: 33.333px;" class="css-z6vxiy e6yfngs3"></div>
        <div style="width: 66.667px; height: 66.667px;" class="css-z6vxiy e6yfngs3"></div>
        <div style="width: 100px; height: 100px;" class="css-z6vxiy e6yfngs3"></div>
        <div style="width: 2px; height: 100px;" class="css-17nnhwz e6yfngs4"></div>
        <div style="width: 100px; height: 2px;" class="css-17nnhwz e6yfngs4"></div>
    </div>
</div>*/