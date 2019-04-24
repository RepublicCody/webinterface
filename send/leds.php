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

    header("Location:../zimmer.php");

}elseif(isset($_POST['rgbhex'])) {
    $farbe = $_POST['rgbhex'];
    $befehlsstring = $_SESSION['befehlsstring'];
    $sendestring = merge_befehlsstring_und_farbe($befehlsstring, $farbe);

    send_led_befehl($sendestring);

}else {

    $befehlsstring = $_SESSION['befehlsstring'];
    $hexfarbe = $_POST['hexfarbe'];

    $farbe = explode('#',$hexfarbe);

    $sendestring = merge_befehlsstring_und_farbe($befehlsstring, $farbe[1]);

    send_led_befehl($sendestring);

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