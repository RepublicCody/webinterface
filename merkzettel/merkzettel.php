<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 03.05.2019
 * Time: 19:21
 */

include '../htmlheader.php';?>


<link rel="stylesheet" href="../style/merkzettelstyle.css">
</head>

<body>

<div id="merkzettel" class="background">

    <div id="clock">12:45:25</div>
    <script src="../javascript/miniclock.js" charset="utf-8"></script>

    <div id="merkzettelheader" class="header">

        <form action="../mainmenu.php">
            <button id="merkzettelmainmenue" class="headerbutton"><div id="mainmenuebild"></div><div class="headername">Menü</div></button>
        </form>
        <form action="../mainmenu.php">
            <button id="merkzettelzurueck" class="headerbutton"><div id="zurueckbild"></div><div class="headername">Zurück</div></button>
        </form>

        <div id="schlafzimmerseitenname" class="seitenname"><div class="seitennametext">Merkzettel Auswahl</div></div>

    </div>

    <div id="merkzettelauswahl">

        <div id="merkzettellistenauswahl">
            <form action="merkzettelliste.php">
            <button id="l_1" class="listbutton"><div id="merkzettelliste_1_bild" class="merkzettellistebild"></div><div id="merkzettelliste_1_name" class="merkzettellistename">Liste 1</div></button>
            </form>
            <form action="merkzettelliste.php">
            <button id="l_2" class="listbutton"><div id="merkzettelliste_2_bild" class="merkzettellistebild"></div><div id="merkzettelliste_2_name" class="merkzettellistename">Liste 2</div></button>
            </form>
            <form action="merkzettelliste.php">
            <button id="l_3" class="listbutton"><div id="merkzettelliste_3_bild" class="merkzettellistebild"></div><div id="merkzettelliste_3_name" class="merkzettellistename">Liste 3</div></button>
            </form>
            <form action="merkzettelliste.php">
            <button id="neueliste" class="listbutton"><div id="neuelistebild" class="merkzettellistebild"></div><div id="neuelistename" class="merkzettellistename">Neue Liste</div></button>
            </form>
        </div>

    </div>


</div>

</body>
</html>
