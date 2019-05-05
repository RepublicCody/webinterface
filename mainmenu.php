<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 29.04.2019
 * Time: 12:41
 */

include 'htmlheader.php';?>


    <link rel="stylesheet" href="style/mainmenustyle.css">
</head>

<body>

    <div id="mainmenu" class="background">

        <div id="clock">12:45:25</div>
        <script src="javascript/miniclock.js" charset="utf-8"></script>

        <div id="mitte">
            <form action="raeume/schlafzimmer/zimmer.php">
                <button id="schlafzimmer" class="maindiv"><div id="schlafzimmerbild" class="mainbild"></div><div id="schlafzimmername" class="mainname">Schlafzimmer</div></button>
            </form>

            <form action="raeume/wohnzimmer/zimmer.php">
                <button id="wohnzimmer" class="maindiv"><div id="wohnzimmerbild" class="mainbild"></div><div id="wohnzimmername" class="mainname">Wohnzimmer</div></button>
            </form>

            <form action="raeume/bad/zimmer.php">
                <button id="bad" class="maindiv"><div id="badbild" class="mainbild"></div><div id="badname" class="mainname">Bad</div></button>
            </form>

            <form action="raeume/kueche/zimmer.php">
                <button id="kueche" class="maindiv"><div id="kuechebild" class="mainbild"></div><div id="kuechename" class="mainname">Küche</div></button>
            </form>

            <form action="raeume/flur/zimmer.php">
                <button id="flur" class="maindiv"><div id="flurbild" class="mainbild"></div><div id="flurname" class="mainname">Flur</div></button>
            </form>

            <form action="login.php">
                <button id="platzhalter" class="maindiv"><div id="platzhalterbild" class="mainbild"></div><div id="platzhaltername" class="mainname">Platzhalter</div></button>
            </form>

            <form action="merkzettel/merkzettel.php">
                <button id="merkzettel" class="maindiv"><div id="merkzettelbild" class="mainbild"></div><div id="merkzettelname" class="mainname">Merkzettel</div></button>
            </form>

            <form action="">
                <button id="sleep" class="maindiv"><div id="sleepbild" class="mainbild"></div><div id="sleepname" class="mainname">Ruhemodus</div></button>
            </form>

        </div>

    </div>

</body>
</html>


