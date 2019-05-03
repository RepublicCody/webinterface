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

<link rel="stylesheet" href="../../style/wohnzimmerstyle.css">
</head>
<body>

<div id="zimmerbackground" class="background">

    <div id="zimmerheader" class="header">

        <form action="../../mainmenu.php">
            <button id="alleregalemainmenue" class="mainmenuebutton"><div id="mainmenuebild"></div><div class="headername">Menü</div></button>
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
            <button id="regalansichtzurueck" class="zurueckbutton"><div id="zurueckbild"></div><div class="headername">Zurück</div></button>
        </form>

        <div id="schlafzimmerseitenname" class="seitenname"><div class="seitennametext">Wohnzimmer</div></div>

    </div>



    <div id="zimmer">

        <form action="../../send/steckdosen.php" method="post">
            <button id="steckdose_0" name="steckdose[]" value="11110 5 <?php echo $_SESSION['steckdosenzustand'][0][0]?>" class="steckdose"><div <?php steckdose_background(0)?>></div></button>
            <button id="steckdose_1" name="steckdose[]" value="11111 1 <?php echo $_SESSION['steckdosenzustand'][0][1]?>" class="steckdose"><div <?php steckdose_background(1)?>></div></button>
            <button id="steckdose_2" name="steckdose[]" value="11111 2 <?php echo $_SESSION['steckdosenzustand'][0][2]?>" class="steckdose"><div <?php steckdose_background(2)?>></div></button>
            <button id="steckdose_3" name="steckdose[]" value="11111 3 <?php echo $_SESSION['steckdosenzustand'][0][3]?>" class="steckdose"><div <?php steckdose_background(3)?>></div></button>
            <button id="steckdose_4" name="steckdose[]" value="11111 4 <?php echo $_SESSION['steckdosenzustand'][0][4]?>" class="steckdose"><div <?php steckdose_background(4)?>></div></button>
            <button id="steckdose_5" name="steckdose[]" value="11111 5 <?php echo $_SESSION['steckdosenzustand'][0][5]?>" class="steckdose"><div <?php steckdose_background(5)?>></div></button>
        </form>

    </div>

</div>

</body>
</html>