// Interactiveness now

(function() {

    var clock = document.getElementById("clock")

    // But there is a little problem
    // we need to pad 0-9 with an extra
    // 0 on the left for hours, seconds, minutes

    clock.style = "top: 90%;" +
        "left: 4%;" +
        "width: 8%;" +
        "height: 8%;" +
        "color: #808080;" +
        "text-align: center;" +
        "line-height: 100px;" +
        "position: absolute;" +
        "transform: translate(-50%, -50%);" +
        "-ms-transform: translate(-50%, -50%);" +
        "font-family: 'Quicksand', sans-serif;" +
        "font-weight: 500;"

    var pad = function(x) {
        return x < 10 ? '0'+x : x;
    };

    var ticktock = function() {
        var d = new Date();

        var h = pad( d.getHours() );
        var m = pad( d.getMinutes() );
        var s = pad( d.getSeconds() );

        var current_time = [h,m,s].join(':');

        clock.innerHTML = current_time;

    };

    ticktock();

    // Calling ticktock() every 1 second
    setInterval(ticktock, 1000);

}());