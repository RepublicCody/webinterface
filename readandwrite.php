<?php
/**
 * Created by PhpStorm.
 * User: maxzi
 * Date: 04.05.2019
 * Time: 08:40
 */

/*
$steckdosenzustaendeFile = fopen("txtfiles/steckdosenzustand.txt", "w");
$txt = "John Doe\n";
fwrite($steckdosenzustaendeFile, $txt);
$txt = "Jane Doe\n";
fwrite($steckdosenzustaendeFile, $txt);
fclose($steckdosenzustaendeFile);

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













?>