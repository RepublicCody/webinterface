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
        </form>
        <form action="zimmer.php">
            <button id="regalansichtzurueck" class="zurueckbutton"><div id="zurueckbild"></div><div class="headername">Zurück</div></button>
        </form>

        <div id="regalansichtseitenname" class="seitenname"><div class="seitennametext">Regal: <?php echo $regalnummer; ?></div></div>

    </div>

    <div id="clock">12:45:25</div>
    <script src="../../javascript/miniclock.js" charset="utf-8"></script>

    <div id="regalansicht">

        <form action="../../send/farbauswahl.php" method="post">
            <button id="regalansichtalleleds" name="alleregalleds" value="<?php echo $regalnummer; ?>" class="ledbutton">Ganzes Regal auswählen</button>
        </form>
        <form action="../../send/leds.php" method="post">
            <button id="regalansichtalleledsaus" name="regalaus" value="off" class="ledbutton">Ganzes Regal ausschalten</button>
        </form>

        <form action="fachansicht.php" method="post">
        <div id="tabelle">
            <div id="reihe_0" class="reihe">
                <div id="f00" class="divbutton">
                    <button id="b00" name="fach[]" value="<?php echo $regalnummer; ?>_00" <?php if($_SESSION['regale'][$regalnummer][0][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led000" class="fachled"></div>
                        <div id="led001" class="fachled"></div>
                        <div id="led002" class="fachled"></div>
                        <div id="led003" class="fachled"></div>
                    </button>
                </div>
                <div id="f01" class="divbutton">
                    <button id="b01" name="fach[]" value="<?php echo $regalnummer; ?>_01" <?php if($_SESSION['regale'][$regalnummer][0][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led010" class="fachled"></div>
                        <div id="led011" class="fachled"></div>
                        <div id="led012" class="fachled"></div>
                        <div id="led013" class="fachled"></div>
                    </button>
                </div>
                <div id="f02" class="divbutton">
                    <button id="b02" name="fach[]" value="<?php echo $regalnummer; ?>_02" <?php if($_SESSION['regale'][$regalnummer][0][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led020" class="fachled"></div>
                        <div id="led021" class="fachled"></div>
                        <div id="led022" class="fachled"></div>
                        <div id="led023" class="fachled"></div>
                    </button>
                </div>
                <div id="f03" class="divbutton">
                    <button id="b03" name="fach[]" value="<?php echo $regalnummer; ?>_03" <?php if($_SESSION['regale'][$regalnummer][0][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led030" class="fachled"></div>
                        <div id="led031" class="fachled"></div>
                        <div id="led032" class="fachled"></div>
                        <div id="led033" class="fachled"></div>
                    </button>
                </div>
            </div>
            <div id="reihe_1" class="reihe">
                <div id="f10" class="divbutton">
                    <button id="b10" name="fach[]" value="<?php echo $regalnummer; ?>_04" <?php if($_SESSION['regale'][$regalnummer][1][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led100" class="fachled"></div>
                        <div id="led101" class="fachled"></div>
                        <div id="led102" class="fachled"></div>
                        <div id="led103" class="fachled"></div>
                    </button>
                </div>
                <div id="f11" class="divbutton">
                    <button id="b11" name="fach[]" value="<?php echo $regalnummer; ?>_05" <?php if($_SESSION['regale'][$regalnummer][1][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led110" class="fachled"></div>
                        <div id="led111" class="fachled"></div>
                        <div id="led112" class="fachled"></div>
                        <div id="led113" class="fachled"></div>
                    </button>
                </div>
                <div id="f12" class="divbutton">
                    <button id="b12" name="fach[]" value="<?php echo $regalnummer; ?>_06" <?php if($_SESSION['regale'][$regalnummer][1][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led120" class="fachled"></div>
                        <div id="led121" class="fachled"></div>
                        <div id="led122" class="fachled"></div>
                        <div id="led123" class="fachled"></div>
                    </button>
                </div>
                <div id="f13" class="divbutton">
                    <button id="b13" name="fach[]" value="<?php echo $regalnummer; ?>_07" <?php if($_SESSION['regale'][$regalnummer][1][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led130" class="fachled"></div>
                        <div id="led131" class="fachled"></div>
                        <div id="led132" class="fachled"></div>
                        <div id="led133" class="fachled"></div>
                    </button>
                </div>
            </div>
            <div id="reihe_2" class="reihe">
                <div id="f20" class="divbutton">
                    <button id="b20" name="fach[]" value="<?php echo $regalnummer; ?>_08" <?php if($_SESSION['regale'][$regalnummer][2][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led200" class="fachled"></div>
                        <div id="led201" class="fachled"></div>
                        <div id="led202" class="fachled"></div>
                        <div id="led203" class="fachled"></div>
                    </button>
                </div>
                <div id="f21" class="divbutton">
                    <button id="b21" name="fach[]" value="<?php echo $regalnummer; ?>_09" <?php if($_SESSION['regale'][$regalnummer][2][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led210" class="fachled"></div>
                        <div id="led211" class="fachled"></div>
                        <div id="led212" class="fachled"></div>
                        <div id="led213" class="fachled"></div>
                    </button>
                </div>
                <div id="f22" class="divbutton">
                    <button id="b22" name="fach[]" value="<?php echo $regalnummer; ?>_10" <?php if($_SESSION['regale'][$regalnummer][2][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led220" class="fachled"></div>
                        <div id="led221" class="fachled"></div>
                        <div id="led222" class="fachled"></div>
                        <div id="led223" class="fachled"></div>
                    </button>
                </div>
                <div id="f23" class="divbutton">
                    <button id="b23" name="fach[]" value="<?php echo $regalnummer; ?>_11" <?php if($_SESSION['regale'][$regalnummer][2][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led230" class="fachled"></div>
                        <div id="led231" class="fachled"></div>
                        <div id="led232" class="fachled"></div>
                        <div id="led233" class="fachled"></div>
                    </button>
                </div>
            </div>
            <div id="reihe_3" class="reihe">
                <div id="f30" class="divbutton">
                    <button id="b30" name="fach[]" value="<?php echo $regalnummer; ?>_12" <?php if($_SESSION['regale'][$regalnummer][3][0]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led300" class="fachled"></div>
                        <div id="led301" class="fachled"></div>
                        <div id="led302" class="fachled"></div>
                        <div id="led303" class="fachled"></div>
                    </button>
                </div>
                <div id="f31" class="divbutton">
                    <button id="b31" name="fach[]" value="<?php echo $regalnummer; ?>_13" <?php if($_SESSION['regale'][$regalnummer][3][1]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led310" class="fachled"></div>
                        <div id="led311" class="fachled"></div>
                        <div id="led312" class="fachled"></div>
                        <div id="led313" class="fachled"></div>
                    </button>
                </div>
                <div id="f32" class="divbutton">
                    <button id="b32" name="fach[]" value="<?php echo $regalnummer; ?>_14" <?php if($_SESSION['regale'][$regalnummer][3][2]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led320" class="fachled"></div>
                        <div id="led321" class="fachled"></div>
                        <div id="led322" class="fachled"></div>
                        <div id="led323" class="fachled"></div>
                    </button>
                </div>
                <div id="f33" class="divbutton">
                    <button id="b33" name="fach[]" value="<?php echo $regalnummer; ?>_15" <?php if($_SESSION['regale'][$regalnummer][3][3]==0)echo"disabled class='fachdisabled'";else echo"class='fach'"; ?>>
                        <div id="led330" class="fachled"></div>
                        <div id="led331" class="fachled"></div>
                        <div id="led332" class="fachled"></div>
                        <div id="led333" class="fachled"></div>
                    </button>
                </div>
            </div>

        </div>
        </form>

    </div>
<div>
</body>
</html>
