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
