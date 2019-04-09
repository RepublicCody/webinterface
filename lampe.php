<?php

if(isset($_POST['lampe'])) {

    send_lampe();

    include 'zimmer.php';
}

    function send_lampe (){
    echo 'Ich mach Licht';
    $output = exec("bash /var/www/html/scripts/lichtschalter.sh");
    echo $output;
}

?>

