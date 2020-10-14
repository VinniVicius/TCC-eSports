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
function AdjustingInterval(workFunc, interval, errorFunc) {
    var that = this;
    var expected;
    this.interval = interval;

    this.start = function() {
        expected = Date.now() + this.interval;
        timeout = setTimeout(step, this.interval);
    }

    this.stop = function() {
        clearTimeout(timeout);
    }

    this.reset = function(){
        var tempValue = 0;
        clearTimeout(timeout);
        justSomeNumber = 0;
        ticker.start();
        text = $('#millisecondsTest').text();
        console.log(text);
    }

    function step() {
        var drift = Date.now() - expected;
        if (drift > that.interval) {
            // You could have some default stuff here too...
            if (errorFunc) errorFunc();
        }
        workFunc();
        expected += that.interval;
        timeout = setTimeout(step, Math.max(10, that.interval-drift));
    }

}

// For testing purposes, we'll just increment
// this and send it out to the console.
var justSomeNumber = 0;

// Define the work to be done
var doWork = function() {
    if(clickCount === 6){
        return;
    }else{
        if (miliValue == 1) {
            justSomeNumber = 1000;
        }
        else {
            justSomeNumber += 10;
        }
        millisecondsTest.html('<strong id="millisecondsTest">' + justSomeNumber + '</strong> Milisegundo' + (justSomeNumber > 1 ? 's' : ''));
    }
};

// Define what to do if something goes wrong
var doError = function() {
    console.warn('The drift exceeded the interval.');
};

// (The third argument is optional)
var ticker = new AdjustingInterval(doWork, 10, doError);

