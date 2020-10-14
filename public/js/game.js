var seconds = $('#seconds');

var s = 0;

var i = 1;
var run = false;
var score = 0;
var text = "";
var textTemp = "";

var clickCount = 0;

$(document).ready(function () {

  var x = 6;

  document.getElementById('numberCount').innerHTML = x;
  $("#target").on("click", function () {
    if (x != 1) {
      var retvalPosX = generatePosX();
      var retvalPosY = generatePosY();
      $(".game-event-area").removeAttr("style");
      document.getElementById('numberCount').innerHTML = --x;
      $("#target").attr(`style`, `width: 0px; height: 0px; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, ` + retvalPosX + `, ` + retvalPosY + `, 0, 1);`);
    } else {
      $(".desktop-only").attr(`style`, `display: none;`);
    }

    switch (run) {
      case true:
        clearTimeout(setDate);
        break;
      case false:
        run = true;
        setDate();
        function setDate() {

          is_int(i);
          seconds.html('<strong>' + Math.floor(s) + '</strong> Segundo' + (s > 1 ? 's' : ''));

          setDateMs();
          setTimeout(setDate, 10);
        };
        // You can start or stop your timer at will

        break;
      default:
        break;
    };
    ticker.reset();
    //ticker.stop();
    // You can also change the interval while it's in progress
    ticker.interval = 10;
    //getValue();
    //cleanMs(text);
    document.getElementById('score').innerHTML = score += 10;
    clickCount++;
    console.log(clickCount);
  });

});
function getValue() {
  text = $('#millisecondsTest').text();
  console.log(text);
  ticker.reset();
}
/*function msMean(msValue){
  var mean = 0;
  ms = 
};*/

function is_int(value) {
  var count = value;
  if ((parseFloat(count / 100) == parseInt(count / 100)) && !isNaN(count)) {
    i++;
    s += 1;
  } else {
    i++;
  }
};

/*function cleanMs(msValue){
  document.getElementById("target").addEventListener("click", function(){
    text = msValue;
    textTemp = text;
    text = "";
    console.log("Text temp: " + textTemp);
  });
};*/
/*console.log("Temp text: " + textTemp);*/
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
function stopCount() {
  ticker.stop();
}