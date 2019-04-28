var colorPicker = new iro.ColorPicker("#colorWheel", {
    width: 360,
    height: 360,
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
                borderWidth: 0
            }
        },
        {
            // regular value slider
            component: iro.ui.Slider,
            options: {
                borderWidth: 0
            }
        },
        {
            // hue slider
            component: iro.ui.Slider,
            options: {
                borderWidth: 0,
                sliderType: 'hue'
            }
        },
        {
            // saturation slider
            component: iro.ui.Slider,
            options: {
                borderWidth: 0,
                sliderType: 'saturation'
            }
        }
    ]
});

colorPicker.on(["color:init", "color:change"], function(color){

    document.getElementById("hexfeld").value = color.hexString;
    document.getElementById("submit").style.backgroundColor = color.hexString;
    document.getElementById("redbar").value = color.rgb["r"];
    document.getElementById("greenbar").value = color.rgb["g"];
    document.getElementById("bluebar").value = color.rgb["b"];

    //status.innerHTML = color.hexString;
});
