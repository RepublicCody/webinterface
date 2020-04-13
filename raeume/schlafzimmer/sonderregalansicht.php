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

<link rel="stylesheet" href="../../style/regalestyle.css">
</head>
<body>

<div id="regalansichtbackground" class="background">

    <div id="regalansichtheader" class="header">

        <form action="../../mainmenu.php">
            <button id="regalansichtmainmenue" class="mainmenuebutton"><div id="mainmenuebild"></div><div class="headername">Menü</div></button>
        </form>
        <form action="zimmer.php">
            <button id="regalansichtschlafzimmer" class="schlafzimmerbutton"><div id="schlafzimmerbild"></div><div class="headername">Schlafzimmer</div></button>
        <form action="zimmer.php">
            <button id="regalansichtzurueck" class="zurueckbutton"><div id="zurueckbild"></div><div class="headername">Zurück</div></button>
        </form>

        <div id="regalansichtseitenname" class="seitenname"><div class="seitennametext">Regal: <?php echo $regalnummer; ?></div></div>

    </div>

    <div id="clock">12:45:25</div>
    <script src="../../javascript/miniclock.js" charset="utf-8"></script>

    <div id="regalansicht">

        <form action="../../send/farbauswahl.php" method="post">
            <button id="regalansichtalleleds" name="allersonderegalleds" value="<?php echo $regalnummer; ?>" class="ledbutton">Ganzes Regal auswählen</button>
        </form>
        <form action="../../send/leds.php" method="post">
            <button id="regalansichtalleledsaus" name="aus" value="off" class="ledbutton">Ganzes Regal ausschalten</button>
        </form>

            <div id="sondertabelle">
                <div id="reihe_0" class="reihe">
                    <form action="fachansicht.php" method="post">
                    <div id="sf00" class="sonderdivbutton">
                        <button id="sb00" name="fach[]" value="<?php echo $regalnummer; ?>_00" class='sonderfach'>
                            <div id="led000" class="fachled"></div>
                            <div id="led001" class="fachled"></div>
                            <div id="led002" class="fachled"></div>
                            <div id="led003" class="fachled"></div>
                        </button>
                    </div>
                    </form>
                    <form action="sonderfachansicht.php" method="post">
                    <div  id="sf01" class="sonderdivbutton">
                        <button id="sb01" name="fach[]" value="<?php echo $regalnummer; ?>_01" class='sonderfach'>
                            <div id="sled010" class="sfachled"></div>
                            <div id="sled011" class="sfachled"></div>
                            <div id="sled012" class="sfachled"></div>
                            <div id="sled013" class="sfachled"></div>
                            <div id="sled014" class="sfachled"></div>
                            <div id="sled015" class="sfachled"></div>
                            <div id="sled016" class="sfachled"></div>
                            <div id="sled017" class="sfachled"></div>
                            <div id="sled018" class="sfachled"></div>
                            <div id="sled019" class="sfachled"></div>
                            <div id="sled01A" class="sfachled"></div>
                            <div id="sled01B" class="sfachled"></div>
                        </button>
                    </div>
                    </form>
                    <form action="fachansicht.php" method="post">
                    <div id="sf02" class="sonderdivbutton">
                        <button id="sb02" name="fach[]" value="<?php echo $regalnummer; ?>_04" class='sonderfach'>
                            <div id="led020" class="fachled"></div>
                            <div id="led021" class="fachled"></div>
                            <div id="led022" class="fachled"></div>
                            <div id="led023" class="fachled"></div>
                        </button>
                    </div>
                    </form>
                </div>
                <div id="reihe_1" class="reihe">
                    <form action="fachansicht.php" method="post">
                    <div id="sf10" class="sonderdivbutton">
                        <button id="sb10" name="fach[]" value="<?php echo $regalnummer; ?>_05" class='sonderfach'>
                            <div id="led100" class="fachled"></div>
                            <div id="led101" class="fachled"></div>
                            <div id="led102" class="fachled"></div>
                            <div id="led103" class="fachled"></div>
                        </button>
                    </div>
                    </form>
                    <form action="sonderfachansicht.php" method="post">
                    <div id="sf11" class="sonderdivbutton">
                        <button id="sb11" name="fach[]" value="<?php echo $regalnummer; ?>_06" class='sonderfach'>
                            <div id="sled110" class="sfachled"></div>
                            <div id="sled111" class="sfachled"></div>
                            <div id="sled112" class="sfachled"></div>
                            <div id="sled113" class="sfachled"></div>
                            <div id="sled114" class="sfachled"></div>
                            <div id="sled115" class="sfachled"></div>
                            <div id="sled116" class="sfachled"></div>
                            <div id="sled117" class="sfachled"></div>
                            <div id="sled118" class="sfachled"></div>
                            <div id="sled119" class="sfachled"></div>
                            <div id="sled11A" class="sfachled"></div>
                            <div id="sled11B" class="sfachled"></div>
                        </button>
                    </div>
                    </form>
                    <form action="fachansicht.php" method="post">
                    <div id="sf12" class="sonderdivbutton">
                        <button id="sb12" name="fach[]" value="<?php echo $regalnummer; ?>_09" class='sonderfach'>
                            <div id="led120" class="fachled"></div>
                            <div id="led121" class="fachled"></div>
                            <div id="led122" class="fachled"></div>
                            <div id="led123" class="fachled"></div>
                        </button>
                    </div>
                    </form>
                </div>

                <form action="fachansicht.php" method="post">
                <div id="reihe_2" class="reihe">
                    <div id="sf20" class="sonderdivbutton">
                        <button id="sb20" name="fach[]" value="<?php echo $regalnummer; ?>_10" <?php if($_SESSION['regale'][$regalnummer][2][0]==0)echo"disabled class='sonderfachdisabled'";else echo"class='sonderfach'"; ?>>
                            <?php if($_SESSION['regale'][$regalnummer][2][0]!=0)echo'
                                <div id="led000" class="fachled"></div>
                                <div id="led001" class="fachled"></div>
                                <div id="led002" class="fachled"></div>
                                <div id="led003" class="fachled"></div>
                            '; ?>
                        </button>
                    </div>
                    <div id="sf21" class="sonderdivbutton">
                        <button id="sb21" name="fach[]" value="<?php echo $regalnummer; ?>_11" <?php if($_SESSION['regale'][$regalnummer][2][1]==0)echo"disabled class='sonderfachdisabled'";else echo"class='sonderfach'"; ?>>
                            <?php if($_SESSION['regale'][$regalnummer][2][1]!=0)echo'
                                <div id="led000" class="fachled"></div>
                                <div id="led001" class="fachled"></div>
                                <div id="led002" class="fachled"></div>
                                <div id="led003" class="fachled"></div>
                            '; ?>
                        </button>
                    </div>
                    <div id="sf22" class="sonderdivbutton">
                        <button id="sb22" name="fach[]" value="<?php echo $regalnummer; ?>_12" <?php if($_SESSION['regale'][$regalnummer][2][2]==0)echo"disabled class='sonderfachdisabled'";else echo"class='sonderfach'"; ?>>
                            <?php if($_SESSION['regale'][$regalnummer][2][2]!=0)echo'
                                <div id="led000" class="fachled"></div>
                                <div id="led001" class="fachled"></div>
                                <div id="led002" class="fachled"></div>
                                <div id="led003" class="fachled"></div>
                            '; ?>
                        </button>
                    </div>
                    <div id="sf23" class="sonderdivbutton">
                        <button id="sb23" name="fach[]" value="<?php echo $regalnummer; ?>_13" <?php if($_SESSION['regale'][$regalnummer][2][3]==0)echo"disabled class='sonderfachdisabled'";else echo"class='sonderfach'"; ?>>
                            <?php if($_SESSION['regale'][$regalnummer][2][3]!=0)echo'
                                <div id="led000" class="fachled"></div>
                                <div id="led001" class="fachled"></div>
                                <div id="led002" class="fachled"></div>
                                <div id="led003" class="fachled"></div>
                            '; ?>
                        </button>
                    </div>
                </div>
                <div id="reihe_3" class="reihe">
                    <div id="sf30" class="sonderdivbutton">
                        <button id="sb30" name="fach[]" value="<?php echo $regalnummer; ?>_14" <?php if($_SESSION['regale'][$regalnummer][3][0]==0)echo"disabled class='sonderfachdisabled'";else echo"class='sonderfach'"; ?>>
                            <?php if($_SESSION['regale'][$regalnummer][3][0]!=0)echo'
                                <div id="led000" class="fachled"></div>
                                <div id="led001" class="fachled"></div>
                                <div id="led002" class="fachled"></div>
                                <div id="led003" class="fachled"></div>
                            '; ?>
                        </button>
                    </div>
                    <div id="sf31" class="sonderdivbutton">
                        <button id="sb31" name="fach[]" value="<?php echo $regalnummer; ?>_15" <?php if($_SESSION['regale'][$regalnummer][3][1]==0)echo"disabled class='sonderfachdisabled'";else echo"class='sonderfach'"; ?>>
                            <?php if($_SESSION['regale'][$regalnummer][3][1]!=0)echo'
                                <div id="led000" class="fachled"></div>
                                <div id="led001" class="fachled"></div>
                                <div id="led002" class="fachled"></div>
                                <div id="led003" class="fachled"></div>
                            '; ?>
                        </button>
                    </div>
                    <div id="sf32" class="sonderdivbutton">
                        <button id="sb32" name="fach[]" value="<?php echo $regalnummer; ?>_16" <?php if($_SESSION['regale'][$regalnummer][3][2]==0)echo"disabled class='sonderfachdisabled'";else echo"class='sonderfach'"; ?>>
                            <?php if($_SESSION['regale'][$regalnummer][3][2]!=0)echo'
                                <div id="led000" class="fachled"></div>
                                <div id="led001" class="fachled"></div>
                                <div id="led002" class="fachled"></div>
                                <div id="led003" class="fachled"></div>
                            '; ?>
                        </button>
                    </div>
                    <div id="sf33" class="sonderdivbutton">
                        <button id="sb33" name="fach[]" value="<?php echo $regalnummer; ?>_17" <?php if($_SESSION['regale'][$regalnummer][3][3]==0)echo"disabled class='sonderfachdisabled'";else echo"class='sonderfach'"; ?>>
                            <?php if($_SESSION['regale'][$regalnummer][3][3]!=0)echo'
                                <div id="led000" class="fachled"></div>
                                <div id="led001" class="fachled"></div>
                                <div id="led002" class="fachled"></div>
                                <div id="led003" class="fachled"></div>
                            '; ?>
                        </button>
                    </div>
                </div>
                </form>
            </div>

    </div>
    <div>
</body>
</html>
