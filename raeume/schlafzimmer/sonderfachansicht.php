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

<link rel="stylesheet" href="../../style/regalestyle.css">
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

        <?php if ($regalundfachnummer[0] == 2) { echo '
        <form action="sonderregalansicht.php" method="post">
        <button id="fachansichtzurueck" class="zurueckbutton" name="fachansichtheaderbutton" value='; echo $regalundfachnummer[0].'><div id="zurueckbild"></div><div class="headername">Zurück</div></button>
        </form>';}
        else {echo '
        <form action="regalansicht.php" method="post">
            <button id="fachansichtzurueck" class="zurueckbutton" name="fachansichtheaderbutton" value='; echo $regalundfachnummer[0].'><div id="zurueckbild"></div><div class="headername">Zurück</div></button>
        </form>
        ';}?>


        <div id="fachansichtseitenname" class="seitenname"><div class="seitennametext">Regal: <?php echo $regalundfachnummer[0].' Fach: '.$regalundfachnummer[2].$regalundfachnummer[3]; ?></div></div>
    
    </div>

    <div id="clock">12:45:25</div>
    <script src="../../javascript/miniclock.js" charset="utf-8"></script>

    <div id="fachansicht">

        <form action="farbauswahl.php" method="post">
            <button id="fachansichtalleleds" name="allefachleds" value="<?php echo $regalundfachnummer; ?>" class="ledbutton">Ganzes Fach auswählen</button>
        </form>
        <form action="../../send/leds.php" method="post">
            <button id="fachansichtalleledsaus" name="fachaus" value="off" class="ledbutton">Ganzes Fach ausschalten</button>
        </form>

        <form action="farbauswahl.php" method="post">
            <table id="sonderfachansichttabelle">
                <tr>
                    <td><button id="led00" name="led[]" value="<?php echo $regalundfachnummer; ?>_0" class="fach"></button></td>
                    <td><button id="led01" name="led[]" value="<?php echo $regalundfachnummer; ?>_1" class="fach"></button></td>
                    <td><button id="led02" name="led[]" value="<?php echo $regalundfachnummer; ?>_2" class="fach"></button></td>
                    <td><button id="led03" name="led[]" value="<?php echo $regalundfachnummer; ?>_3" class="fach"></button></td>
                    <td><button id="led04" name="led[]" value="<?php echo $regalundfachnummer; ?>_4" class="fach"></button></td>
                    <td><button id="led05" name="led[]" value="<?php echo $regalundfachnummer; ?>_5" class="fach"></button></td>
                    <td><button id="led06" name="led[]" value="<?php echo $regalundfachnummer; ?>_6" class="fach"></button></td>
                    <td><button id="led07" name="led[]" value="<?php echo $regalundfachnummer; ?>_7" class="fach"></button></td>
                    <td><button id="led08" name="led[]" value="<?php echo $regalundfachnummer; ?>_8" class="fach"></button></td>
                    <td><button id="led09" name="led[]" value="<?php echo $regalundfachnummer; ?>_9" class="fach"></button></td>
                    <td><button id="led10" name="led[]" value="<?php echo $regalundfachnummer; ?>_10" class="fach"></button></td>
                    <td><button id="led11" name="led[]" value="<?php echo $regalundfachnummer; ?>_11" class="fach"></button></td>
                </tr>
            </table>
        </form>
    </div>

</div>

</body>
</html>
