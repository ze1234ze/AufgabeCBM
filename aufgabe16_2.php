<?php

// 16. Für diese Übung erstellen Sie ein Formular, in dem Sie den Benutzer 
//     um Eingaben zum Wetter in einem Monat seiner Wahl bitten. Zeigen Sie eine
//     Reihe von Kontrollkästchen (Checkboxes) mit Wetterbedingungen an. 
//     (Diese Werte sind: Regen, Sonnenschein, Wolken, Hagel, Graupel, Schnee, Wind.)
//     Richten Sie das Formular so ein, dass ein Array aus den angekreuzten Elementen
//     erstellt wird. Übersenden Sie Daten mit der POST-Methode.
//     Als Nächstes durchlaufen Sie das Array, das Sie vom Benutzer erhalten haben,
//     um eine Liste mit den Antworten des Benutzers auszugeben.



if (isset($_POST['wetter'])) 
{
    foreach ($_POST['wetter'] as $antwort)
    {echo $antwort."<br />";}
       
}
// print_r($_POST['wetter']); 




// if (!empty($_POST) ) {


//     $a = !empty($_POST['regen']);
//     $b = !empty($_POST['sonnenschein']);
//     $c = !empty($_POST['wolken']);
//     $d = !empty($_POST['hagel']);
//     $e = !empty($_POST['graupel']);
//     $f = !empty($_POST['schnee']);
//     $g = !empty($_POST['wind']);



//     // var_dump($a, $b, $c, $d, $e, $f, $g);
//     $arr = array($a, $b, $c, $d, $e, $f, $g);

//     foreach ($arr as $arr2) {
//     echo $arr2;
// }
// }
//     foreach ($arr as $antwort) {

//         echo $antwort;
//     }

// } else {
//     echo "Bitte etwas eingeben!";
// }
// if (empty($a)) {
//     $a1 = $a;
// }
// if (empty($b)) {
//     $b1 = $b;
// }
// if (empty($c)) {
//     $c1 = $c;
// }
// if (empty($d)) {
//     $d1 = $d;
// }
// if (empty($e)) {
//     $e1 = $e;
// }
// if (empty($f)) {
//     $f1 = $f;
// }
// if (empty($g)) {
//     $g1 = $g;
// }


// if (isset($_POST['regen'])) {
//     Echo "Dein Wahl ist Regen!<br/>";
// }
// elseif (isset($_POST['sonnenschein'])) {
//     Echo "Dein Wahl ist Sonnenschein!<br/>";
// }
// elseif (isset($_POST['wolken'])) {
//     Echo "Dein Wahl ist Wolken!<br/>";
// }
// elseif (isset($_POST['hagel'])) {
//     Echo "Dein Wahl ist Hagel!<br/>";
// }
// elseif (isset($_POST['graupel'])) {
//     Echo "Dein Wahl ist Graupel!<br/>";
// }
// elseif (isset($_POST['schnee'])) {
//     Echo "Dein Wahl ist Schnee!<br/>";
// }
// elseif (isset($_POST['wind'])) {
//     Echo "Dein Wahl ist Wind!<br/>";
// }else{
//     Echo "Du hast nichts gewahlt!<br/>";
