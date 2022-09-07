<?php

$a = $_POST['regen'];
$b = $_POST['sonnenschein'];
$c = $_POST['wolken'];
$d = $_POST['hagel'];
$e = $_POST['graupel'];
$f = $_POST['schnee'];
$g = $_POST['wind'];


$arr = array($a, $b, $c, $d, $e, $f, $g);

foreach ($arr as $antwort){
    
    echo $antwort;
  
}

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
// }
