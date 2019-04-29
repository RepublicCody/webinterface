<?php include 'htmlheader.php';?>
</head>
<body>

<?php

session_start();

$_SESSION['steckdosenzustand'] = array(array(0, 0, 0, 0, 0, 0));
$_SESSION['regale'] = array(
    array(array(1,1,1,1),array(1,1,1,1),array(1,1,1,1),array(1,1,1,1)),
    array(array(1,1,1,1),array(1,1,1,1),array(1,1,0,0),array(1,1,0,0)),
    array(array(1,1,1,1),array(1,1,1,1),array(0,1,1,0),array(1,1,1,1)),
    array(array(1,1,1,1),array(1,1,1,1),array(1,1,1,1),array(0,0,0,0)),
    array(array(1,1,1,0),array(1,1,1,0),array(1,1,1,0),array(1,1,1,0)));

$_SESSION['regalzustand'] = array(
    array(array("0","0","0","0"),array("0","0","0","0"),array("0","0","0","0"),array("0","0","0","0")),
    array(array("0","0","0","0"),array("0","0","0","0"),array("0","0","0","0"),array("0","0","0","0")),
    array(array("0","0","0","0"),array("0","0","0","0"),array("0","0","0","0"),array("0","0","0","0")),
    array(array("0","0","0","0"),array("0","0","0","0"),array("0","0","0","0"),array("0","0","0","0")),
    array(array("0","0","0","0"),array("0","0","0","0"),array("0","0","0","0"),array("0","0","0","0")));

header("Location:raeume/schlafzimmer/zimmer.php");

?>

</body>
</html>