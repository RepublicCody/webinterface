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
        <form action="merkzettel.php">
            <button id="merkzettelzurueck" class="headerbutton"><div id="zurueckbild"></div><div class="headername">Zurück</div></button>
        </form>

        <div id="schlafzimmerseitenname" class="seitenname"><div class="seitennametext">Merkzettel Liste</div></div>

    </div>

    <div id="listeneintraege">

        <div id="eintrag_1" class="listeneintrag"><div class="status"></div><input id="" class="inhalt"/>
            <div class="checkdiv">
                <div class="round">
                    <input type="checkbox" id="checkbox_1"/>
                    <label for="checkbox_1"></label>
                </div>
            </div>
        </div>
        <div id="eintrag_2" class="listeneintrag"><div class="status"></div><input id="" class="inhalt"/>
            <div class="checkdiv">
                <div class="round">
                    <input type="checkbox" id="checkbox_2"/>
                    <label for="checkbox_2"></label>
                </div>
            </div>
        </div>
        <div id="eintrag_3" class="listeneintrag"><div class="status"></div><input id="" class="inhalt"/>
            <div class="checkdiv">
                <div class="round">
                    <input type="checkbox" id="checkbox_3"/>
                    <label for="checkbox_3"></label>
                </div>
            </div>
        </div>
        <div id="eintrag_4" class="listeneintrag"><div class="status"></div><input id="" class="inhalt"/>
            <div class="checkdiv">
                <div class="round">
                    <input type="checkbox" id="checkbox_4"/>
                    <label for="checkbox_4"></label>
                </div>
            </div>
        </div>
        <div id="neu" class="listeneintrag"><input id="" class="inhalt" value="Neuer Eintrag"onfocus="if (this.value == 'Neuer Eintrag') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Neuer Eintrag';}"/><button id="neuereintrag"><div id="neuereintargbild"></div></button></div>

    </div>


</div>

</body>
</html>
