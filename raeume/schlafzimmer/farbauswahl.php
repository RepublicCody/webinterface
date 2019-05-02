<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 24.02.2019
 * Time: 14:55
 */

session_start();

$regalfach_pro_regal = array(16, 12, 14, 12, 12);               //todo modularer machen also function schreiben

$befehlsstring = '';

$farben = array(array());

$zielseite = '';

if (isset($_POST['alleregale'])) {

    $zielseite = 'zimmer.php';

    $_SESSION['befehlsstring'] = 'all_color ';

} elseif (isset($_POST['alleregalleds'])) {

    $zielseite = 'regalansicht.php';

    $regalnummer = $_POST['alleregalleds'];

    $nummern = $regalnummer;

    $position = position($regalnummer, $regalfach_pro_regal);

    $ledarray = leds_im_regal($position, $regalfach_pro_regal[$regalnummer]);

    $_SESSION['befehlsstring'] = generatebefehlsstring($ledarray);

} elseif (isset($_POST['allefachleds'])) {

    $zielseite = 'fachansicht.php';

    $regal_und_fachnummer = explode('_', $_POST['allefachleds']);

    $nummern = $regal_und_fachnummer[0] . "_" . $regal_und_fachnummer[1];

    $position = position($regal_und_fachnummer[0], $regalfach_pro_regal);

    $position = $position + $regal_und_fachnummer[1];

    $ledarray = leds_im_regal($position, 1);

    $_SESSION['befehlsstring'] = generatebefehlsstring($ledarray);

} elseif (isset($_POST['led'])) {

    $zielseite = 'fachansicht.php';

    $dummy = $_POST['led'];

    $regal_und_fach_und_lednummer = $stringarray = explode('_', $_POST['led'][0]);

    $nummern = $regal_und_fach_und_lednummer[0] . "_" . $regal_und_fach_und_lednummer[1];

    $position = position($regal_und_fach_und_lednummer[0], $regalfach_pro_regal);

    $position = $position + $regal_und_fach_und_lednummer[1];

    if ($position < 16) {
        if ($regal_und_fach_und_lednummer[2] < 16) {
            $ledarray[0][0] = '0' . $regal_und_fach_und_lednummer[2] . '0' . dechex($position);
        } else {
            $ledarray[0][0] = '0' . $regal_und_fach_und_lednummer[2] . dechex($position);
        }
    } else {
        if ($regal_und_fach_und_lednummer[2] < 16) {
            $ledarray[0][0] = $regal_und_fach_und_lednummer[2] . '0' . dechex($position);
        } else {
            $ledarray[0][0] = $regal_und_fach_und_lednummer[2] . dechex($position);
        }
    }

    $_SESSION['befehlsstring'] = generatebefehlsstring($ledarray);
}


/*
 * die function gibt die Position im Regal zurück
 * Das heißt über $seitenname gibt man ihn die Nummer des Regals,
 * wessen Position man finden will ein und bekommt diese dann zurück
 */
function position($regalnummer, $regalfaecher_im_regal){
    $zaehler = 0;
    for ($x = 0; $x < $regalnummer; $x++) {
        $zaehler += $regalfaecher_im_regal[$x];
    }
    return $zaehler;
}

/*
 * Erzeugt ein array welches alle LEDs beinhaltet,
 * die angesprochen werden sollen
 * @param $position Postion des Regals
 * @param $anzahl der Fächer im Regal
 */
function leds_im_regal($position, $faecheranzahl){

    $ledarray = array(array());
    $anzahlDerLEDSProFach = 4;

    for ($y = 0; $y < $faecheranzahl; $y++) {
        for ($x = 0; $x < $anzahlDerLEDSProFach; $x++) {
            if ($position < 16) {
                $ledarray[$y][$x] = '0' . $x . '0' . dechex($position);
            } else {
                $ledarray[$y][$x] = '0' . $x . dechex($position);
            }
        }
        $position++;
    }

    return $ledarray;
}

function generatebefehlsstring($ledarray){
    $returnstring = '';

    for ($x = 0; $x < sizeof($ledarray); $x++) {
        for ($y = 0; $y < sizeof($ledarray[$x]); $y++) {
            $returnstring .= '' . (string)$ledarray[$x][$y] . '#';
        }
    }
    return $returnstring;
}

include '../../htmlheader.php';?>

    <link rel="stylesheet" href="../../style/schlafzimmerstyle.css">
    <script language="JavaScript" type="text/javascript">
        function ajax_post() {
            // Create our XMLHttpRequest object
            var hr = new XMLHttpRequest();
            // Create some variables we need to send to our PHP file
            var url = "../../send/leds.php";
            var hexfeld = document.getElementById("hexfeld").value;
            var vars = "hexfeld=" + hexfeld;
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
    </script>
</head>

<body>
<div id="farbauswahlbackground" class="background">

    <div id="farbauswahlheader" class="header">

        <form action="../../mainmenu.php">
            <button id="farbauswahlmainmenue" class="mainmenuebutton"><div id="mainmenuebild"></div><div class="headername">Menü</div></button>
        </form>
        <form action="zimmer.php">
            <button id="farbauswahlschlafzimmer" class="schlafzimmerbutton"><div id="schlafzimmerbild"></div><div class="headername">Schlafzimmer</div></button>
        </form>
        <form action="../../send/leds.php" method="post">
            <button id="farbauswahlausschalten" name="aus" value="off" class="headerbutton">Alle Aus</button>
        </form>

        <form action="<?php echo $zielseite; ?>" method="post">
            <button id="farbauswahlzurueck" name="farbauswahlheaderbuttonzurueck" value="<?php echo $nummern; ?>" class="zurueckbutton"><div class="zurueckbild"></div><div class="headername">Zurück</div></button>
        </form>

        <div id="fachansichtseitenname" class="seitenname"><div class="seitennametext"><?php

            if (isset($_POST['alleregale'])) {
                echo 'Alle LEDs';
            } elseif (isset($_POST['alleregalleds'])) {
                echo 'Regal: ' . $regalnummer[0];
            } elseif (isset($_POST['allefachleds'])) {
                echo 'Regal: ' . $regal_und_fachnummer[0] . ' Fach: ' . $regal_und_fachnummer[1];
            } elseif (isset($_POST['led'])) {
                echo 'Regal: ' . $regal_und_fach_und_lednummer[0] . ' Fach: ' . $regal_und_fach_und_lednummer[1] . ' LED: ' . $regal_und_fach_und_lednummer[2];
            }

                ?></div></div>

    </div>

    <div id="clock">12:45:25</div>
    <script src="../../javascript/clock.js" charset="utf-8"></script>

    <div id="farbauswahl">

        <div id="links">

            <div class="wheel" id="colorWheel"></div>

            <script src="../../javascript/iro.min.js" charset="utf-8"></script>

        </div>

        <div id="rechts">

            <div id="bar">
                <div id="reddivbar" class="bardiv">
                    <div id="redname">Rot</div>
                    <input id="redbar" type="range" class="bar" min="0" max="255" step="1" value="255">
                </div>

                <div id="greendivbar" class="bardiv">
                    <div id="greenname">Grün</div>
                    <input id="greenbar" type="range" class="bar" min="0" max="255" step="1" value="255">
                </div>

                <div id="bluedivbar" class="bardiv">
                    <div id="bluename">Blau</div>
                    <input id="bluebar" type="range" class="bar" min="0" max="255" step="1" value="255">
                </div>
            </div>

            <div id="hexfarbe">
                <div id="hexname">Farbe</div>
                <input id="hexfeld" name="hexfeld" type="text">
            </div>

            <input id="submit" type="submit" name="submitbutton" value="Absenden" onclick="javascript:ajax_post();">

            <script src="../../javascript/colorWheel.js" charset="utf-8"></script>

            <script type="text/javascript">

                var input = document.querySelectorAll(".bar")

                var rgbToHex = function (rgb) {
                    var hex = Number(rgb).toString(16);
                    if (hex.length < 2) {
                        hex = "0" + hex;
                    }
                    return hex;
                };

                var fullColorHex = function(r,g,b) {
                    var red = rgbToHex(r);
                    var green = rgbToHex(g);
                    var blue = rgbToHex(b);
                    return "#" + red + green + blue;
                };

                for(var i = 0; i < input.length; i++){
                    input[i].addEventListener("input", function(){
                        var red = document.getElementById("redbar").value;
                        var blue = document.getElementById("bluebar").value;
                        var green = document.getElementById("greenbar").value;

                        var hex = fullColorHex(red, green, blue);

                        document.getElementById("hexfeld").value = hex;
                        document.getElementById("submit").style.backgroundColor = hex;
                    });
                }


            </script>

        </div>
        <div id="status"></div>
    </div>
</div>
</body>
</html>
