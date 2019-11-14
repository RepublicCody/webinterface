<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 04.05.2019
 * Time: 08:40
 */

//txtfiles/regalledfarbe.txt
//txtfiles/regalzustand.txt
/**
 * @param $pfad Pfad der Datei zB: txtfiles/regalledfarbe.txt
 * @return string Inhalt der Datei
 */
function read_Files($pfad){
    $file = fopen($pfad, "r") or die("Unable to open file!");
    $inhalt = fread($file, filesize($pfad));
    fclose($file);
    return $inhalt;
}

/**
 * @param $pfad Pfad der Datei zB: txtfiles/regalledfarbe.txt
 * @param $inhalt Der Inhalt, der in die Datei geschrieben werden soll
 */
function write_Files($pfad, $inhalt){
    $file = fopen($pfad, "w") or die("Unable to open file!");
    fwrite($file, $inhalt);
    fclose($file);
}

function load_Regalzustand($pfad){

    $regale = array(
        array(
            array(),array(),array(),array()
        ),
        array(
            array(),array(),array(),array()
        ),
        array(
            array(),array(),array(),array()
        ),
        array(
            array(),array(),array(),array()
        ),
        array(
            array(),array(),array(),array()
        )
    );

    $inhalt = read_Files($pfad);

    $regal = explode("\n", $inhalt);

    for($i = 0; $i < sizeof($regal); $i++){

        $reihe = explode("|", $regal[$i]);
        for($x = 0; $x < sizeof($reihe); $x++) {

            $dummy = explode(",", $reihe[$x]);
            for($y = 0; $y < sizeof($dummy); $y++) {

                $regale[$i][$x][$y] = $dummy[$y];
            }
        }
    }
    //TODO muss in Globale Variable gepackt werden
}

function load_Regalledfarbe($pfad){
    //TODO
}

?>