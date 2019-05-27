<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 03.05.2019
 * Time: 19:21
 */

include '../htmlheader.php';?>


<link rel="stylesheet" href="../style/timerstyle.css">
</head>

<body>

<div id="countdownmain" class="background">

    <div id="clock">12:45:25</div>
    <script src="../javascript/miniclock.js" charset="utf-8"></script>


    <div class="header">

        <form action="../mainmenu.php">
            <button id="countdownmainmenue" class="headerbutton"><div id="mainmenuebild"></div><div class="headername">Menü</div></button>
        </form>
        <form action="../mainmenu.php">
            <button id="countdownzurueck" class="headerbutton"><div id="zurueckbild"></div><div class="headername">Zurück</div></button>
        </form>

        <div id="" class="seitenname"><div class="seitennametext">Timer</div></div>

    </div>

    <div id="countdownmitte">

        <div id="countdownbox">
            <div id="countdownanzeige"><div class="countdown"></div></div>
            <div id="buttons">
                <div id="buttonshochrunter">
                    <button id="buttonhoch_0" class="timerhochrunterbuttons"><div class="timerhochbild"></div></button>
                    <button id="buttonhoch_1" class="timerhochrunterbuttons"><div class="timerhochbild"></div></button>
                    <button id="buttonhoch_2" class="timerhochrunterbuttons"><div class="timerhochbild"></div></button>
                    <button id="buttonhoch_3" class="timerhochrunterbuttons"><div class="timerhochbild"></div></button>
                    <button id="buttonhoch_4" class="timerhochrunterbuttons"><div class="timerhochbild"></div></button>
                    <button id="buttonhoch_5" class="timerhochrunterbuttons"><div class="timerhochbild"></div></button>

                    <button id="buttonrunter_0" class="timerhochrunterbuttons"><div class="timerrunterbild"></div></button>
                    <button id="buttonrunter_1" class="timerhochrunterbuttons"><div class="timerrunterbild"></div></button>
                    <button id="buttonrunter_2" class="timerhochrunterbuttons"><div class="timerrunterbild"></div></button>
                    <button id="buttonrunter_3" class="timerhochrunterbuttons"><div class="timerrunterbild"></div></button>
                    <button id="buttonrunter_4" class="timerhochrunterbuttons"><div class="timerrunterbild"></div></button>
                    <button id="buttonrunter_5" class="timerhochrunterbuttons"><div class="timerrunterbild"></div></button>
                </div>
                <div id="buttonsstartstopp">
                    <button id="timerstart" class="timerstartstopbutton">Start</button>
                    <button id="timerstopp" class="timerstartstopbutton">Stopp</button>
                </div>
            </div>
        </div>


        <script src="../javascript/jquery-3.4.1.min.js"></script>
        <script src="../javascript/flipclock.min.js"></script>
        <script src="../javascript/timer.js"></script>


    </div>


</div>

</body>
</html>
