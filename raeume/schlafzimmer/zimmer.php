<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 24.02.2019
 * Time: 14:59
 */

session_start();

    function steckdose_background($value){
        if($_SESSION['steckdosenzustand'][0][$value] == 0){
            echo "class='steckdosedivaus'";
        }else {
            echo "class='steckdosedivan'";
        }
    }


 include '../../htmlheader.php';?>

</head>
<body>

<div id="zimmerbackground" class="background">

    <div id="zimmerheader" class="header">

        <form action="../../mainmenu.php">
            <button id="alleregalemainmenue" name="alleregalemainmenue" value="alleregalemainmenue" class="headerbutton"><div id="alleregalemainmenudiv" class="rundbutton"></div></button>
        </form>
        <form action="zimmer.php" method="post">
            <button id="alleregalehauptmenue" name="alleregalehauptmenue" value="alleregalehauptmenue" class="headerbutton">Schlafzimmer</button>
        </form>
        <form action="farbauswahl.php" method="post">
            <button id="alleregale" name="alleregale" value="alleregale" class="headerbutton">Alle LEDs</button>
        </form>
        <form action="../../send/leds.php" method="post">
            <button id="alleregaleledsaus" name="aus" value="off" class="headerbutton">LEDs Aus</button>
        </form>
        <form action="../../send/steckdosen.php" method="post">
            <button id="allesteckdosenaus" name="allesteckdosenaus" value="allesteckdosenaus" class="headerbutton">Steckdosen Aus</button>
        </form>
        <form action="../../mainmenu.php">
            <button id="regalansichtzurueck" class="headerbutton">Zurück</button>
        </form>

    </div>

    <div id="zimmer">

        <div id="kratzbaum"></div>
        <button id="kommode" disabled></button>

        <form action="../../send/lampe.php" method="post">
            <button id="lampe" name="lampe" value="lampe"><div id="lampediv"></div></button>
        </form>

        <form action="../../send/steckdosen.php" method="post">
            <button id="steckdose_0" name="steckdose[]" value="11111 0 <?php echo $_SESSION['steckdosenzustand'][0][0]?>" class="steckdose"><div <?php steckdose_background(0)?>></div></button>
            <button id="steckdose_1" name="steckdose[]" value="11111 1 <?php echo $_SESSION['steckdosenzustand'][0][1]?>" class="steckdose"><div <?php steckdose_background(1)?>></div></button>
            <button id="steckdose_2" name="steckdose[]" value="11111 2 <?php echo $_SESSION['steckdosenzustand'][0][2]?>" class="steckdose"><div <?php steckdose_background(2)?>></div></button>
            <button id="steckdose_3" name="steckdose[]" value="11111 3 <?php echo $_SESSION['steckdosenzustand'][0][3]?>" class="steckdose"><div <?php steckdose_background(3)?>></div></button>
            <button id="steckdose_4" name="steckdose[]" value="11111 4 <?php echo $_SESSION['steckdosenzustand'][0][4]?>" class="steckdose"><div <?php steckdose_background(4)?>></div></button>
            <button id="steckdose_5" name="steckdose[]" value="11111 5 <?php echo $_SESSION['steckdosenzustand'][0][5]?>" class="steckdose"><div <?php steckdose_background(5)?>></div></button>
        </form>

        <button id="schreibtischlampe_1" name="schreibtischlampe_1" value="" class="schreibtischlampe"></button>
        <button id="schreibtischlampe_2" name="schreibtischlampe_2" value="" class="schreibtischlampe"></button>
        <button id="monitore" name="monitore" value="" class="monitore"></button>
        <button id="computer" name="computer" value="" class="computer"></button>
        <button id="regalbett" name="regalbett" value="regalbett"></button>
        <button id="nachttisch" name="nachttisch" value="nachttisch"></button>
        <button id="schreibtisch" name="schreibtisch" value="schreibtisch"></button>
        <button id="bett" name="bett" value="bett"><div id="matraze"></div></button>

        <form action="regalansicht.php" method="post">
            <button id="regal_1" name="regal[]" value="0" class="regal"></button>
            <button id="regal_2" name="regal[]" value="1" class="regal"></button>
            <button id="regal_3" name="regal[]" value="2" class="regal"></button>
            <button id="regal_4" name="regal[]" value="3" class="regal"></button>
            <button id="regal_5" name="regal[]" value="4" class="regal"></button>
        </form>
    </div>

</div>

</body>
</html>