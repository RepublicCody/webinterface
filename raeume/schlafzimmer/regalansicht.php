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

    echo "ich bin ein dummy ". $dummy . "kekse";

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
            <button id="regalansichtmainmenue" name="regalansichtmainmenue" value="regalansichtmainmenue" class="headerbutton"><div id="regalansichtmainmenudiv" class="rundbutton"></div></button>
        </form>
        <form action="zimmer.php">
            <button id="regalansichtschlafzimmer" class="headerbutton"><div id="regalansichtschlafzimmerdiv" class="rundbutton"></div></button>
        </form>
        <form action="farbauswahl.php" method="post">
            <button id="regalansichtalleleds" name="alleregalleds" value="<?php echo $regalnummer; ?>" class="headerbutton">Alle LEDs</button>
        </form>
        <form action="../../send/leds.php" method="post">
            <button id="regalansichtalleledsaus" name="aus" value="off" class="headerbutton">Alle Aus</button>
        </form>
        <form action="zimmer.php">
            <button id="regalansichtzurueck" class="zurueckbutton"><div class="zurueckbild"></div><div class="zurueckname">Zurück</div></button>
        </form>

        <div id="regalansichtseitenname" class="seitenname"><div class="seitennametext">Regal: <?php echo $regalnummer; ?></div></div>

    </div>

    <div id="regalansicht">

        <form action="fachansicht.php" method="post">
        <table id="tabelle">
            <tr>
                <td><button id="f00" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_00" <?php if($_SESSION['regale'][$regalnummer][0][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f01" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_01" <?php if($_SESSION['regale'][$regalnummer][0][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f02" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_02" <?php if($_SESSION['regale'][$regalnummer][0][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f03" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_03" <?php if($_SESSION['regale'][$regalnummer][0][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
            </tr>
            <tr>
                <td><button id="f10" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_04" <?php if($_SESSION['regale'][$regalnummer][1][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f11" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_05" <?php if($_SESSION['regale'][$regalnummer][1][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f12" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_06" <?php if($_SESSION['regale'][$regalnummer][1][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f13" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_07" <?php if($_SESSION['regale'][$regalnummer][1][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
            </tr>
            <tr>
                <td><button id="f20" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_08" <?php if($_SESSION['regale'][$regalnummer][2][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f21" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_09" <?php if($_SESSION['regale'][$regalnummer][2][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f22" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_10" <?php if($_SESSION['regale'][$regalnummer][2][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f23" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_11" <?php if($_SESSION['regale'][$regalnummer][2][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
            </tr>
            <tr>
                <td><button id="f30" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_12" <?php if($_SESSION['regale'][$regalnummer][3][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f31" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_13" <?php if($_SESSION['regale'][$regalnummer][3][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f32" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_14" <?php if($_SESSION['regale'][$regalnummer][3][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f33" class="fach" name="fach[]" value="<?php echo $regalnummer; ?>_15" <?php if($_SESSION['regale'][$regalnummer][3][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
            </tr>

        </table>
        </form>

    </div>
<div>
</body>
</html>
