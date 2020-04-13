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

        <?php if ($regalundfachnummer[0] == 0) { echo '
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

        <form action="../../send/farbauswahl.php" method="post">
            <button id="fachansichtalleleds" name="allesonderfachleds" value="<?php echo $regalundfachnummer.'_'.($regalundfachnummer[2].$regalundfachnummer[3]+1).'_'.($regalundfachnummer[2].$regalundfachnummer[3]+2); ?>" class="ledbutton">Ganzes Fach auswählen</button>
        </form>
        <form action="../../send/leds.php" method="post">
            <button id="fachansichtalleledsaus" name="fachaus" value="off" class="ledbutton">Ganzes Fach ausschalten</button>
        </form>

        <form action="../../send/farbauswahl.php" method="post">
            <div id="sonderfachansichttabelle">
                <div id="sfb00" class="sonderdivbuttonkeks">
                    <button name="led[]" value="<?php echo $regalundfachnummer; ?>_0" class="fach"></button>
                </div>
                <div id="sfb01" class="sonderdivbuttonkeks">
                    <button name="led[]" value="<?php echo $regalundfachnummer; ?>_1" class="fach"></button>
                </div>
                <div id="sfb02" class="sonderdivbuttonkeks">
                    <button name="led[]" value="<?php echo $regalundfachnummer; ?>_2" class="fach"></button>
                </div>
                <div id="sfb03" class="sonderdivbuttonkeks">
                    <button name="led[]" value="<?php echo $regalundfachnummer; ?>_3" class="fach"></button>
                </div>
                <div id="sfb04" class="sonderdivbuttonkeks">
                    <button name="led[]" value="<?php echo $regalundfachnummer; ?>_4" class="fach"></button>
                </div>
                <div id="sfb05" class="sonderdivbuttonkeks">
                    <button name="led[]" value="<?php echo $regalundfachnummer; ?>_5" class="fach"></button>
                </div>
                <div id="sfb06" class="sonderdivbuttonkeks">
                    <button name="led[]" value="<?php echo $regalundfachnummer; ?>_6" class="fach"></button>
                </div>
                <div id="sfb07" class="sonderdivbuttonkeks">
                    <button name="led[]" value="<?php echo $regalundfachnummer; ?>_7" class="fach"></button>
                </div>
                <div id="sfb08" class="sonderdivbuttonkeks">
                    <button name="led[]" value="<?php echo $regalundfachnummer; ?>_8" class="fach"></button>
                </div>
                <div id="sfb09" class="sonderdivbuttonkeks">
                    <button name="led[]" value="<?php echo $regalundfachnummer; ?>_9" class="fach"></button>
                </div>
                <div id="sfb10" class="sonderdivbuttonkeks">
                    <button name="led[]" value="<?php echo $regalundfachnummer; ?>_10" class="fach"></button>
                </div>
                <div id="sfb11" class="sonderdivbuttonkeks">
                    <button name="led[]" value="<?php echo $regalundfachnummer; ?>_11" class="fach"></button>
                </div>
            </div>
        </form>
    </div>

</div>

</body>
</html>
