<?php

session_start();

$steckdosenliste = array(array("11111","1"),array("11111","2"),array("11111","3"));


if(isset($_POST['allesteckdosenaus'])) {

    $frequenz = "00000";
    $nummer = "0";
    $zustand = 0;

    for($x = 0; $x < sizeof($steckdosenliste); $x++){
        $frequenz = $steckdosenliste[$x][0];
        $nummer = $steckdosenliste[$x][1];
        send_steckdose($frequenz, $nummer, $zustand);
    }

    include 'zimmer.php';
}else  if(isset($_POST['steckdose'])) {

    $frequenzUndNummer = explode(' ', $_POST['steckdose'][0]);

    echo $_POST['steckdose'][0];

    $frequenz = $frequenzUndNummer[0];
    $nummer = $frequenzUndNummer[1];
    $zustand = $frequenzUndNummer[2];

    send_steckdose($frequenz, $nummer, $zustand);

    steckdose_zustand($frequenz, $nummer, $zustand);

    header("Location:zimmer.php");
}


function send_steckdose ($frequenz, $nummer, $zustand){
    echo 'Ich rede mit der Steckdose: '. $frequenz . ' ' .$nummer . ' ' . $zustand;
    exec("bash /var/www/html/scripts/steckdosen.sh ". $frequenz . ' ' .$nummer . ' ' . $zustand);
    $output = exec("bash /var/www/html/scripts/steckdosen.sh ". $frequenz . ' ' .$nummer . ' ' . $zustand);
    echo $output;
}


function steckdose_zustand($frequenz, $nummer, $value){
    if($value == 0){
        $_SESSION['steckdosenzustand'][0][$nummer] = 1;
    }else {
        $_SESSION['steckdosenzustand'][0][$nummer] = 0;
    }
}

?>