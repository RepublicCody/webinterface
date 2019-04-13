var colorPicker = new iro.ColorPicker("#colorWheel", {
    width: 420,
    height: 420,
    padding: 4,
    borderColor: "#fff",
    color: "rgb(255, 255, 255)",
    css: {
        "#display": {
            "background": "rgb"
        },
        "#hexfarbe": {
            "background": "rgb"
        }
    },

    layout: [
        {
            component: iro.ui.Wheel,
            options: {

            }
        },
        {
            component: iro.ui.Slider,
            options: {
                borderWidth: 1,
                borderColor: '#000000'
            }
        }
    ]
});



colorPicker.on(["color:init", "color:change"], function(color){
    // Show the current color in different formats
    // Using the selected color: https://iro.js.org/guide.html#selected-color-api
    document.getElementById("hexfarbe").value = color.hexString;
    document.getElementById("redbar").value = color.rgb["r"];
    document.getElementById("greenbar").value = color.rgb["g"];
    document.getElementById("bluebar").value = color.rgb["b"];

    //display.innerHTML = color.hexString;
});


function colorWheel_post() {

    var colorPicker = new iro.ColorWheel('#colorWheel');

    var hex = colorPicker.color.hexString;

    var hr = new XMLHttpRequest();
    var url = "javascriptsucks.php";
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
}