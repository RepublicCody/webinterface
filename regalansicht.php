<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 24.02.2019
 * Time: 14:55
 */

$regale = array(array(array(1,1,1,1),array(1,1,1,1),array(1,1,0,0),array(1,1,0,0)),
    array(array(1,1,1,1),array(1,1,1,1),array(1,1,1,1),array(1,1,1,1)),
    array(array(1,1,1,1),array(1,1,1,1),array(0,1,1,0),array(1,1,1,1)),
    array(array(1,1,1,1),array(1,1,1,1),array(1,1,1,1),array(0,0,0,0)),
    array(array(1,1,1,0),array(1,1,1,0),array(1,1,1,0),array(1,1,1,0)));

$dummy = $_POST['regal'];

foreach($dummy as $key => $value) {
    $regalnummer = $value;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hier könnte Ihre Werbung stehen</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon.ico">
</head>
<body>

<div id="regalansichtbackground" class="background">

    <div id="regalansichtheader" class="header">

        <form action="farbauswahl.php" method="post">
            <button id="regalansichtalleleds" name="alleregalleds" value="<?php echo $regalnummer; ?>" class="headerbutton">Alle Einschalten</button>
        </form>
        <form action="javascriptsucks.php" method="post">
            <button id="regalansichtalleledsaus" name="aus" value="off" class="headerbutton">Alle Ausschalten</button>
        </form>
        <form action="zimmer.php">
            <button id="regalansichtzurueck" class="headerbutton">Zurück</button>
        </form>
        <form action="zimmer.php">
            <button id="regalansichthauptmenue" class="headerbutton">Hauptmenü</button>
        </form>

        <div id="regalansichtregalnummer" class="regalnummer">Regal: <?php echo $regalnummer; ?></div>

    </div>

    <div id="regalansicht">

        <form action="fachansicht.php" method="post">
        <table id="tabelle">
            <tr>
                <td><button id="f00" name="fach[]" value="<?php echo $regalnummer; ?>_00" <?php if($regale[$regalnummer][0][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f01" name="fach[]" value="<?php echo $regalnummer; ?>_01" <?php if($regale[$regalnummer][0][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f02" name="fach[]" value="<?php echo $regalnummer; ?>_02" <?php if($regale[$regalnummer][0][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f03" name="fach[]" value="<?php echo $regalnummer; ?>_03" <?php if($regale[$regalnummer][0][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
            </tr>
            <tr>
                <td><button id="f10" name="fach[]" value="<?php echo $regalnummer; ?>_04" <?php if($regale[$regalnummer][1][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f11" name="fach[]" value="<?php echo $regalnummer; ?>_05" <?php if($regale[$regalnummer][1][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f12" name="fach[]" value="<?php echo $regalnummer; ?>_06" <?php if($regale[$regalnummer][1][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f13" name="fach[]" value="<?php echo $regalnummer; ?>_07" <?php if($regale[$regalnummer][1][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
            </tr>
            <tr>
                <td><button id="f20" name="fach[]" value="<?php echo $regalnummer; ?>_08" <?php if($regale[$regalnummer][2][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f21" name="fach[]" value="<?php echo $regalnummer; ?>_09" <?php if($regale[$regalnummer][2][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f22" name="fach[]" value="<?php echo $regalnummer; ?>_10" <?php if($regale[$regalnummer][2][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f23" name="fach[]" value="<?php echo $regalnummer; ?>_11" <?php if($regale[$regalnummer][2][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
            </tr>
            <tr>
                <td><button id="f30" name="fach[]" value="<?php echo $regalnummer; ?>_12" <?php if($regale[$regalnummer][3][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f31" name="fach[]" value="<?php echo $regalnummer; ?>_13" <?php if($regale[$regalnummer][3][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f32" name="fach[]" value="<?php echo $regalnummer; ?>_14" <?php if($regale[$regalnummer][3][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
                <td><button id="f33" name="fach[]" value="<?php echo $regalnummer; ?>_15" <?php if($regale[$regalnummer][3][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>></button></td>
            </tr>

        </table>
        </form>

    </div>
<div>
</body>
</html>
