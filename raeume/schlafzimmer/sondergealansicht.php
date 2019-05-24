<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 24.02.2019
 * Time: 14:55
 */

session_start();
if(isset($_POST['regal'])){
    $dummy = $_POST['regal'];
    foreach($dummy as $key => $value) {
        $regalnummer = $value;
    }
}
elseif(isset($_POST['farbauswahlheaderbuttonzurueck'])){

    $dummy = $_POST['farbauswahlheaderbuttonzurueck'];

    $regalnummer = $dummy;

}
else {
    $regalnummer = $_POST['fachansichtheaderbutton'];
}


include '../../htmlheader.php';?>

<link rel="stylesheet" href="../../style/schlafzimmerstyle.css">
</head>
<body>

<div id="regalansichtbackground" class="background">

    <div id="regalansichtheader" class="header">

        <form action="../../mainmenu.php">
            <button id="regalansichtmainmenue" class="mainmenuebutton"><div id="mainmenuebild"></div><div class="headername">Menü</div></button>
        </form>
        <form action="zimmer.php">
            <button id="regalansichtschlafzimmer" class="schlafzimmerbutton"><div id="schlafzimmerbild"></div><div class="headername">Schlafzimmer</div></button>
        </form>
        <form action="farbauswahl.php" method="post">
            <button id="regalansichtalleleds" name="alleregalleds" value="<?php echo $regalnummer; ?>" class="headerbutton">Alle LEDs</button>
        </form>
        <form action="../../send/leds.php" method="post">
            <button id="regalansichtalleledsaus" name="aus" value="off" class="headerbutton">Alle Aus</button>
        </form>
        <form action="zimmer.php">
            <button id="regalansichtzurueck" class="zurueckbutton"><div id="zurueckbild"></div><div class="headername">Zurück</div></button>
        </form>

        <div id="regalansichtseitenname" class="seitenname"><div class="seitennametext">Regal: <?php echo $regalnummer; ?></div></div>

    </div>

    <div id="clock">12:45:25</div>
    <script src="../../javascript/miniclock.js" charset="utf-8"></script>

    <div id="regalansicht">

        <form action="fachansicht.php" method="post">
            <div id="sondertabelle">
                <div id="reihe_0" class="reihe">
                    <div id="sf00" class="sonderdivbutton">
                        <button id="sb00" name="fach[]" value="<?php echo $regalnummer; ?>_00" class='fach'></button>
                        <button id="sb01" name="fach[]" value="<?php echo $regalnummer; ?>_01" class='fach'></button>
                    </div>
                    <div  id="sf01" class="sonderdivbutton">
                        <button id="sb02" name="fach[]" value="<?php echo $regalnummer; ?>_02" class='fach'></button>
                    </div>
                    <div id="sf02" class="sonderdivbutton">
                        <button id="sb03" name="fach[]" value="<?php echo $regalnummer; ?>_03" class='fach'></button>
                    </div>
                </div>
                <div id="reihe_1" class="reihe">
                    <div id="sf10" class="sonderdivbutton">
                        <button id="sb10" name="fach[]" value="<?php echo $regalnummer; ?>_04" class='fach'></button>
                        <button id="sb11" name="fach[]" value="<?php echo $regalnummer; ?>_05" class='fach'></button>
                    </div>
                    <div id="sf11" class="sonderdivbutton">
                        <button id="sb12" name="fach[]" value="<?php echo $regalnummer; ?>_06" class='fach'></button>
                    </div>
                    <div id="sf12" class="sonderdivbutton">
                        <button id="sb13" name="fach[]" value="<?php echo $regalnummer; ?>_07" class='fach'></button>
                    </div>
                </div>
                <div id="reihe_2" class="reihe">
                    <div id="sf20" class="sonderdivbutton">
                        <button id="sb20" name="fach[]" value="<?php echo $regalnummer; ?>_08" <?php if($_SESSION['regale'][$regalnummer][2][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button>
                    </div>
                    <div id="sf21" class="sonderdivbutton">
                        <button id="sb21" name="fach[]" value="<?php echo $regalnummer; ?>_09" <?php if($_SESSION['regale'][$regalnummer][2][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button>
                    </div>
                    <div id="sf22" class="sonderdivbutton">
                        <button id="sb22" name="fach[]" value="<?php echo $regalnummer; ?>_10" <?php if($_SESSION['regale'][$regalnummer][2][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button>
                    </div>
                    <div id="sf23" class="sonderdivbutton">
                        <button id="sb23" name="fach[]" value="<?php echo $regalnummer; ?>_11" <?php if($_SESSION['regale'][$regalnummer][2][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button>
                    </div>
                </div>
                <div id="reihe_3" class="reihe">
                    <div id="sf30" class="sonderdivbutton">
                        <button id="sb30" name="fach[]" value="<?php echo $regalnummer; ?>_12" <?php if($_SESSION['regale'][$regalnummer][3][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button>
                    </div>
                    <div id="sf31" class="sonderdivbutton">
                        <button id="sb31" name="fach[]" value="<?php echo $regalnummer; ?>_13" <?php if($_SESSION['regale'][$regalnummer][3][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button>
                    </div>
                    <div id="sf32" class="sonderdivbutton">
                        <button id="sb32" name="fach[]" value="<?php echo $regalnummer; ?>_14" <?php if($_SESSION['regale'][$regalnummer][3][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button>
                    </div>
                    <div id="sf33" class="sonderdivbutton">
                        <button id="sb33" name="fach[]" value="<?php echo $regalnummer; ?>_15" <?php if($_SESSION['regale'][$regalnummer][3][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button>
                    </div>
                </div>

            </div>
        </form>

    </div>
    <div>
</body>
</html>
