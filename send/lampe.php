<?php

if(isset($_POST['lampe'])) {

    send_lampe();

    header("Location:../raeume/schlafzimmer/zimmer.php");
}

    function send_lampe (){
    $output = exec("bash /var/www/html/scripts/lichtschalter.sh");
    echo $output;
}

?>

