<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hier könnte Ihre Werbung stehen</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/favicon.ico">
</head>
<body>

<?php

session_start();

$_SESSION['steckdosenzustand'] = array(array(0, 0, 0, 0, 0, 0));

header("Location:zimmer.php");

?>

</body>
</html>