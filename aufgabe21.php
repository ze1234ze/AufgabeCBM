<?php
// 21. Erstellen Sie eine Funktion, die zwei Argumente akzeptiert,
//     mit diesen eine Berechnung durchführt und dann eine Zeichenkette
//     mit dem Ergebnis an den Browser zurückgibt. Die Funktion soll
//     die Fläche eines Rechtecks berechnen, wobei die beiden Argumente
//     Breite und Länge sind. (Zur Erinnerung: Fläche = Breite * Länge.)
//     Der Satz, der zurückgegeben werden soll, lautet "Ein Rechteck der Länge
//     X und der Breite Y hat eine Fläche von XYZ", wobei X und Y die Argumente
//     und Z das Ergebnis sind.

$world = "hey";

function rechnen($b,$l){
    $ergebnis = ($b+$l)*2;
    echo "Ein Rechteck der Länge $l und der Breite $b hat eine Fläche von $ergebnis Quadratmeter.";
}

rechnen(5,5);

    