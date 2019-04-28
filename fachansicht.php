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

include 'htmlheader.php';?>

</head>
<body>

<div id="fachansichtbackground" class="background">

    <div id="fachansichtansichtheader" class="header">
        <form action="farbauswahl.php" method="post">
            <button id="fachansichtalleleds" name="allefachleds" value="<?php echo $regalundfachnummer; ?>" class="headerbutton">Alle Auswählen</button>
        </form>
        <form action="send/leds.php" method="post">
            <button id="fachansichtalleledsaus" name="aus" value="off" class="headerbutton">Alle Ausschalten</button>
        </form>

        <form action="regalansicht.php" method="post">
        <button id="fachansichtzurueck" class="headerbutton" name="fachansichtheaderbutton" value="<?php echo $regalundfachnummer[0]; ?>">Zurück</button>
        </form>

        <form action="zimmer.php">
            <button id="fachansichthauptmenue" class="headerbutton">Hauptmenü</button>
        </form>

        <div id="fachansichtregalnummer" class="regalnummer"><div class="regalnummertext">Regal: <?php echo $regalundfachnummer[0].' Fach: '.$regalundfachnummer[2].$regalundfachnummer[3]; ?></div></div>
    
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
