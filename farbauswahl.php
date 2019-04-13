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

$farbe = '';

$farben = array(array());

$regalundfachundlednummer;

if (isset($_POST['alleregale'])) {

    $_SESSION['befehlsstring'] = 'all_color ';

} elseif (isset($_POST['alleregalleds'])) {

    $regalnummer = $_POST['alleregalleds'];

    $position = position($regalnummer, $regalfach_pro_regal);

    $ledarray = leds_im_regal($position, $regalfach_pro_regal[$regalnummer]);

    $_SESSION['befehlsstring'] = generatebefehlsstring($ledarray);

} elseif (isset($_POST['allefachleds'])) {

    $regal_und_fachnummer = explode('_', $_POST['allefachleds']);

    $position = position($regal_und_fachnummer[0], $regalfach_pro_regal);

    $position = $position + $regal_und_fachnummer[1];

    $ledarray = leds_im_regal($position, 1);

    $_SESSION['befehlsstring'] = generatebefehlsstring($ledarray);

} elseif (isset($_POST['led'])) {
    $dummy = $_POST['led'];

    $regal_und_fach_und_lednummer = $stringarray = explode('_', $_POST['led'][0]);

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
 * Das heißt über $regalnummer gibt man ihn die Nummer des Regals,
 * wessen Position man finden will ein und bekommt diese dann zurück
 */
function position($regalnummer, $regalfaecher_im_regal)
{
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
function leds_im_regal($position, $faecheranzahl)
{

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

function generatebefehlsstring($ledarray)
{
    $returnstring = '';

    for ($x = 0; $x < sizeof($ledarray); $x++) {
        for ($y = 0; $y < sizeof($ledarray[$x]); $y++) {
            $returnstring .= '' . (string)$ledarray[$x][$y] . '#';
        }
    }
    return $returnstring;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hier könnte Ihre Werbung stehen</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon.ico">
    <script language="JavaScript" type="text/javascript">
        function ajax_post() {
            // Create our XMLHttpRequest object
            var hr = new XMLHttpRequest();
            // Create some variables we need to send to our PHP file
            var url = "javascriptsucks.php";
            var red = document.getElementById("redbar").value;
            var green = document.getElementById("greenbar").value;
            var blue = document.getElementById("bluebar").value;
            var hexfarbe = document.getElementById("hexfarbe").value;
            var vars = "red=" + red + "&green=" + green + "&blue=" + blue + "&hexfarbe=" + hexfarbe;
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

        <form action="javascriptsucks.php" method="post">
            <button id="farbauswahlausschalten" name="aus" value="off" class="headerbutton">Alle Ausschalten</button>
        </form>

        <button id="farbauswahlzurueck" class="headerbutton">Zurück</button>

        <form action="zimmer.php">
            <button id="farbauswahlhauptmenue" class="headerbutton">Hauptmenü</button>
        </form>

        <div id="fachansichtregalnummer" class="regalnummer"><?php

            if (isset($_POST['alleregale'])) {
                echo 'Alle LEDs';
            } elseif (isset($_POST['alleregalleds'])) {
                echo 'Regal: ' . $regalnummer[0];
            } elseif (isset($_POST['allefachleds'])) {
                echo 'Regal: ' . $regal_und_fachnummer[0] . ' Fach: ' . $regal_und_fachnummer[1];
            } elseif (isset($_POST['led'])) {
                echo 'Regal: ' . $regal_und_fach_und_lednummer[0] . ' Fach: ' . $regal_und_fach_und_lednummer[1] . ' LED: ' . $regal_und_fach_und_lednummer[2];
            }

            ?></div>

    </div>

    <div id="farbauswahl">

        <div id="links">

            <div class="wheel" id="colorWheel"></div>

            <script src="iro.min.js" charset="utf-8"></script>

        </div>

        <div id="rechts">

            <div id="bar">
                <div id="reddivbar" class="bar">
                    <div id="redname">Rot</div>
                    <input id="redbar" type="range" min="0" max="255" step="1" value="255">
                </div>

                <div id="greendivbar" class="bar">
                    <div id="greenname">Grün</div>
                    <input id="greenbar" type="range" min="0" max="255" step="1" value="255">
                </div>
                <div id="bluedivbar" class="bar">
                    <div id="bluename">Blau</div>
                    <input id="bluebar" type="range" min="0" max="255" step="1" value="255">
                </div>
            </div>

            <div id="hexbar">Hex Farbe</div>
            <input id="hexfarbe" name="hexfarbe" type="text">



            <input id="submit" type="submit" name="submitbutton" value="Kekse" onclick="javascript:ajax_post();">


            <div id="display"></div>

            <script src="colorWheel.js" charset="utf-8"></script>

        </div>
        <div id="status"></div>
    </div>
</div>
</body>
</html>
