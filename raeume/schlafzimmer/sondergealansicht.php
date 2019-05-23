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
            <table id="tabelle">
                <tr>
                    <td><button id="sf00" name="fach[]" value="<?php echo $regalnummer; ?>_00" class='fach'></button></td>
                    <td><button id="sf01" name="fach[]" value="<?php echo $regalnummer; ?>_01" class='fach'></button></td>
                    <td><button id="sf02" name="fach[]" value="<?php echo $regalnummer; ?>_02" class='fach'></button></td>
                </tr>
                <tr>
                    <td><button id="sf11" name="fach[]" value="<?php echo $regalnummer; ?>_03" class='fach'></button></td>
                </tr>
                <tr>
                    <td><button id="sf20" name="fach[]" value="<?php echo $regalnummer; ?>_04" class='fach'></button></td>
                    <td><button id="sf21" name="fach[]" value="<?php echo $regalnummer; ?>_05" class='fach'></button></td>
                    <td><button id="sf22" name="fach[]" value="<?php echo $regalnummer; ?>_06" class='fach'></button></td>
                </tr>
                <tr>
                    <td><button id="sf31" name="fach[]" value="<?php echo $regalnummer; ?>_07" class='fach'></button></td>
                </tr>
                <tr>
                    <td><button id="sf40" name="fach[]" value="<?php echo $regalnummer; ?>_08" <?php if($_SESSION['regale'][$regalnummer][2][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                    <td><button id="sf41" name="fach[]" value="<?php echo $regalnummer; ?>_09" <?php if($_SESSION['regale'][$regalnummer][2][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                    <td><button id="sf42" name="fach[]" value="<?php echo $regalnummer; ?>_10" <?php if($_SESSION['regale'][$regalnummer][2][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                    <td><button id="sf43" name="fach[]" value="<?php echo $regalnummer; ?>_11" <?php if($_SESSION['regale'][$regalnummer][2][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                </tr>
                <tr>
                    <td><button id="sf50" name="fach[]" value="<?php echo $regalnummer; ?>_12" <?php if($_SESSION['regale'][$regalnummer][3][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                    <td><button id="sf51" name="fach[]" value="<?php echo $regalnummer; ?>_13" <?php if($_SESSION['regale'][$regalnummer][3][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                    <td><button id="sf52" name="fach[]" value="<?php echo $regalnummer; ?>_14" <?php if($_SESSION['regale'][$regalnummer][3][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                    <td><button id="sf53" name="fach[]" value="<?php echo $regalnummer; ?>_15" <?php if($_SESSION['regale'][$regalnummer][3][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                </tr>

            </table>
        </form>

    </div>
    <div>
</body>
</html>
