<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 03.05.2019
 * Time: 10:45
 */

include 'htmlheader.php';?>


<link rel="stylesheet" href="style/loginstyle.css">
</head>

<body>

<div id="login" class="background">

    <div id="clock">12:45:25</div>
    <script src="javascript/miniclock.js" charset="utf-8"></script>

    <div id="mitte">

        <div id="links">
            <div id="bildbackground">
                <div id="bild"></div>
            </div>
            <div id="name">Webinterface</div>
        </div>

        <div id="rechts">

            <input id="username" value="Benutzername"onfocus="if (this.value == 'Benutzername') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Benutzername';}">
            <input id="password" value="Passwort"onfocus="if (this.value == 'Passwort') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Passwort';}">

            <form action="index.php">
                <button id="anmelden" onclick="var el = document.getElementById('element'); el.webkitRequestFullscreen();"><div class="clickeffect"></div>Anmelden</button>
            </form>

        </div>

    </div>

</div>

</body>
</html>