<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 26.02.2019
 * Time: 23:21
 */

session_start();

if(isset($_POST['aus'])) {
    $befehlsstring = $_POST['aus'];
    $sendestring = $befehlsstring;

    send_led_befehl($sendestring);

    header("Location:zimmer.php");

}elseif(isset($_POST['rgbhex'])) {
    $farbe = $_POST['rgbhex'];
    $befehlsstring = $_SESSION['befehlsstring'];
    $sendestring = merge_befehlsstring_und_farbe($befehlsstring, $farbe);

    send_led_befehl($sendestring);

}else {

    //$red = $_POST['red'];
    //$green = $_POST['green'];
    //$blue = $_POST['blue'];
    $befehlsstring = $_SESSION['befehlsstring'];
    $hexfarbe = $_POST['hexfarbe'];

    //$farbe = farbeninterpreter($hexfarbe, $red, $green, $blue);

    $farbe = $hexfarbe;

    $sendestring = merge_befehlsstring_und_farbe($befehlsstring, $farbe);

    send_led_befehl($sendestring);

}



function dezimaltohex($red, $green, $blue) {

    $red = dechex($red);
    $green = dechex($green);
    $blue = dechex($blue);

    if(strlen($red)<2){
        $red = '0'.$red;
    }
    if(strlen($green)<2){
        $green = '0'.$green;
    }
    if(strlen($blue)<2){
        $blue = '0'.$blue;
    }

    return $red.$green.$blue;
}

function farbeninterpreter($hexfarbe, $red, $green, $blue){
    $returnstring = '';

    $rgb = dezimaltohex($red, $green, $blue);

    if (strlen($hexfarbe) >= 1){
        $returnstring = $hexfarbe;
    }else {
        $returnstring = $rgb;
    }

    return $returnstring;
}

function merge_befehlsstring_und_farbe($befehlsstring, $farbe){
    $returnstring = '';
    if (strcmp($befehlsstring, 'all_color ') == 0) {
        $returnstring = $befehlsstring . $farbe;

    } else {
        $dummy = explode('#', $befehlsstring);
        for($x = 0; $x < sizeof($dummy) - 1; $x++){
            $returnstring .= $dummy[$x].$farbe;
        }
        $returnstring = 'hex '.$returnstring;
    }

    return $returnstring;
}

function send_led_befehl ($befehlsstring){
    $sendstring = $befehlsstring;
    echo 'Ich bin der Sendestring: '.$sendstring;
    $output = exec("/var/www/html/scripts/run.sh ".$sendstring);
    echo $output;
}


?>