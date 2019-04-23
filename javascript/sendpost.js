    var colorPicker = new iro.ColorWheel('#colorWheel');

    var hex = colorPicker.color.hexString;

    var hr = new XMLHttpRequest();
    var url = "leds.php";
    var vars = "rgbhex=" + hex;
    hr.open("POST", url, true);
// Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
// Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function () {
        if (hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
// Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "verschicke Kekse";
