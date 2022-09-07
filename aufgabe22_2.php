<?php
$eingabe1 = $_POST['wert1'];
$eingabe2 = $_POST['wert2'];


function rechnen($eingabe1,$eingabe2){
    $ergebnis = ($eingabe1+$eingabe2)*2;
    echo "Ein Rechteck der Länge $eingabe1 und der Breite $eingabe2 hat eine Fläche von $ergebnis Quadratmeter.";
}

rechnen($eingabe1,$eingabe2);
