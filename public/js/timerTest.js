/**
 * Self-adjusting interval to account for drifting
 * 
 * @param {function} workFunc  Callback containing the work to be done
 *                             for each interval
 * @param {int}      interval  Interval speed (in milliseconds) - This 
 * @param {function} errorFunc (Optional) Callback to run if the drift
 *                             exceeds interval
 */
var miliValue = 0000;
var timeout;
var text = "";
var textTemp = "";
var total = 0;

var msValues = [];

function AdjustingInterval(workFunc, interval, errorFunc) {
    var that = this;
    var expected;
    this.interval = interval;

    this.start = function () {
        expected = Date.now() + this.interval;
        timeout = setTimeout(step, this.interval);
    }

    this.stop = function () {
        clearTimeout(timeout);
    }

    this.reset = function () {
        var tempValue = 0;
        clearTimeout(timeout);
        justSomeNumber = 0;
        ticker.start();
        if (clickCount != 0) {
            text = $('#millisecondsTestValue').text();
            textTemp = text;
            console.log("Text Temp: " + textTemp);
            //e.preventDefault();    
            textTemp = parseInt(text);
            msValues.push(textTemp);
        }
        if(msValues.length === 4){
            $("#millisecondsTest").addClass(".display-none");
            $("#avgResult").append(avgCalc(msValues));
        }


        //console.log(text);
    }

    this.resetReact = function () {
        var tempValue = 0;
        clearTimeout(timeout);
        justSomeNumber = 0;
        ticker.start();
        if (clickCount != 0) {
            text = $('#millisecondsTestValue').text();
            textTemp = text;
            console.log("Text Temp: " + textTemp);
            //e.preventDefault();    
            textTemp = parseInt(text);
            msValues.push(textTemp);
        }
        if(msValues.length === 4){
            $("#millisecondsTest").addClass(".display-none");
            $("#avgResult").append(avgCalc(msValues));
        }


        //console.log(text);
    }

    function step() {
        var drift = Date.now() - expected;
        if (drift > that.interval) {
            // You could have some default stuff here too...
            if (errorFunc) errorFunc();
        }
        workFunc();
        expected += that.interval;
        timeout = setTimeout(step, Math.max(10, that.interval - drift));
    }

}

// For testing purposes, we'll just increment
// this and send it out to the console.
var justSomeNumber = 0;

// Define the work to be done
var doWork = function () {
    if (clickCount === 5) {
        return;
    } else {
        if (miliValue == 1) {
            justSomeNumber = 1000;
        }
        else {
            justSomeNumber += 10;
        }
        millisecondsTest.html('<strong id="millisecondsTestValue">' + justSomeNumber + '</strong> Milisegundo' + (justSomeNumber > 1 ? 's' : ''));
    }
};

// Define what to do if something goes wrong
var doError = function () {
    console.warn('The drift exceeded the interval.');
};

function avgCalc(arrayCalc) {
    //msDividend = msValues.length; // < read the length of the amended array here
    for (var i = 0; i < msValues.length; i++) {
        total += msValues[i];
    }
    var avg = total / msValues.length;
    console.log("Dividendo: " + msValues.length);
    console.log("Resultado: " + avg);
    $('#avgResult').append('Média de: ' + avg + 'ms');
    console.log(msValues); // just so you can see the content

}

// (The third argument is optional)
var ticker = new AdjustingInterval(doWork, 10, doError);

