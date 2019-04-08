<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 24.02.2019
 * Time: 14:53
 */

$dummy = $_POST['fach'];

foreach($dummy as $key => $value) {
    $regalundfachnummer = $value;
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

<div id="fachansichtbackground" class="background">

    <div id="fachansichtansichtheader" class="header">
        <form action="farbauswahl.php" method="post">
            <button id="fachansichtalleleds" name="allefachleds" value="<?php echo $regalundfachnummer; ?>" class="headerbutton">Alle Auswählen</button>
        </form>
        <form action="javascriptsucks.php" method="post">
            <button id="fachansichtalleledsaus" name="aus" value="off" class="headerbutton">Alle Ausschalten</button>
        </form>

        <button id="fachansichtzurueck" class="headerbutton">Zurück</button>

        <form action="zimmer.php">
            <button id="fachansichthauptmenue" class="headerbutton">Hauptmenü</button>
        </form>

        <div id="fachansichtregalnummer" class="regalnummer">Regal: <?php echo $regalundfachnummer[0].' Fach: '.$regalundfachnummer[2].$regalundfachnummer[3]; ?></div>
    
    </div>

    <div id="fachansicht">

        <form action="farbauswahl.php" method="post">
            <table id="fachansichttabelle">
                <tr>
                    <td><button id="led00" name="led[]" value="<?php echo $regalundfachnummer; ?>_0" class="led"></button></td>
                    <td><button id="led01" name="led[]" value="<?php echo $regalundfachnummer; ?>_1" class="led"></button></td>
                    <td><button id="led02" name="led[]" value="<?php echo $regalundfachnummer; ?>_2" class="led"></button></td>
                    <td><button id="led03" name="led[]" value="<?php echo $regalundfachnummer; ?>_3" class="led"></button></td>
                </tr>
            </table>
        </form>
    </div>

</div>

</body>
</html>
