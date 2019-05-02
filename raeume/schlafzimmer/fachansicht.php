<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 24.02.2019
 * Time: 14:53
 */

if(isset($_POST['fach'])) {

    $dummy = $_POST['fach'];

    foreach ($dummy as $key => $value) {
        $regalundfachnummer = $value;
    }
}elseif(isset($_POST['farbauswahlheaderbuttonzurueck'])){

    $regalundfachnummer = $_POST['farbauswahlheaderbuttonzurueck'];
    }
else {

}

include '../../htmlheader.php';?>

<link rel="stylesheet" href="../../style/schlafzimmerstyle.css">
</head>
<body>

<div id="fachansichtbackground" class="background">

    <div id="fachansichtansichtheader" class="header">

        <form action="../../mainmenu.php">
            <button id="fachansichtmainmenue" class="mainmenuebutton"><div id="mainmenuebild"></div><div class="headername">Menü</div></button>
        </form>
        <form action="zimmer.php">
            <button id="fachansichtschlafzimmer" class="schlafzimmerbutton"><div id="schlafzimmerbild"></div><div class="headername">Schlafzimmer</div></button>
        </form>
        <form action="farbauswahl.php" method="post">
            <button id="fachansichtalleleds" name="allefachleds" value="<?php echo $regalundfachnummer; ?>" class="headerbutton">Alle LEDs</button>
        </form>
        <form action="../../send/leds.php" method="post">
            <button id="fachansichtalleledsaus" name="aus" value="off" class="headerbutton">Alle Aus</button>
        </form>

        <form action="regalansicht.php" method="post">
        <button id="fachansichtzurueck" class="zurueckbutton" name="fachansichtheaderbutton" value="<?php echo $regalundfachnummer[0]; ?>"><div class="zurueckbild"></div><div class="headername">Zurück</div></button>
        </form>

        <div id="fachansichtseitenname" class="seitenname"><div class="seitennametext">Regal: <?php echo $regalundfachnummer[0].' Fach: '.$regalundfachnummer[2].$regalundfachnummer[3]; ?></div></div>
    
    </div>

    <div id="clock">12:45:25</div>
    <script src="../../javascript/clock.js" charset="utf-8"></script>

    <div id="fachansicht">

        <form action="farbauswahl.php" method="post">
            <table id="fachansichttabelle">
                <tr>
                    <td><button id="led00" name="led[]" value="<?php echo $regalundfachnummer; ?>_0" class="fach"></button></td>
                    <td><button id="led01" name="led[]" value="<?php echo $regalundfachnummer; ?>_1" class="fach"></button></td>
                    <td><button id="led02" name="led[]" value="<?php echo $regalundfachnummer; ?>_2" class="fach"></button></td>
                    <td><button id="led03" name="led[]" value="<?php echo $regalundfachnummer; ?>_3" class="fach"></button></td>
                </tr>
            </table>
        </form>
    </div>

</div>

</body>
</html>
