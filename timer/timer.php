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

        <div class="countdown"></div>
        <div class="buttons"></div>


        <script src="../javascript/jquery-3.4.1.min.js"></script>
        <script src="../javascript/flipclock.min.js"></script>
        <script src="../javascript/timer.js"></script>



    </div>


</div>

</body>
</html>