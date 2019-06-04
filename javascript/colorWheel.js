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
                borderWidth: 0,
                border: 0
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

        /*"<style>.bubbly-button:before {" +
        "background-image: radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%), radial-gradient(circle, transparent 20%, " +
        color.hexString + " 20%, transparent 30%), radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%), radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%), radial-gradient(circle, transparent 10%, " +
        color.hexString + " 15%, transparent 20%), radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%), radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%), radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%), radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%)}</style>";
    document.getElementsByClassName("bubbly-button").innerHTML = "<style>.bubbly-button:after {" +
        "background-image: radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%), radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%), radial-gradient(circle, transparent 10%, " +
        color.hexString + " 15%, transparent 20%), radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%), radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%), radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%), radial-gradient(circle, " +
        color.hexString + " 20%, transparent 20%)}</style>";*/

    //status.innerHTML = color.hexString;
});
