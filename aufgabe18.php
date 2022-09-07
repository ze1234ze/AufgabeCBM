<?php

$temp= array(0,1,2,3,4,5,6,7,8,9,10,
             11,12,13,14,15,16,17,18,19,20,
             21,22,23,24,25,26,27,28,29,30);

// print_r(array_slice($temp,15));
// echo "<br>";

foreach(array_slice($temp,26) as $five1)
echo $five1 . "<br>";

$antwort = array_sum(array_slice($temp,26)) /5;
echo "Durchschnitt Hochste Temperatur: " . $antwort;

echo "<br>";

foreach(array_slice($temp,0,5) as $five2)
echo $five2 . "<br>";

$antwort2 = array_sum(array_slice($temp,0,5)) /5;
echo "Durchschnitt Nidrigest Temperatur: " . $antwort2;


// foreach(array_slice($temp,15) as $durch){
//     for($i=0;$i<30;$i++){
//         $antwort = $durch[$i++];
//     }
//     print_r($durch."<br>");
    
   
    // echo $durch / 5 ."<br>";



    // echo $durch1;
    // $durchschnitt=$durch1 / 5;
    // echo $durchschnitt;




// $a = array(2, 4, 6, 8);
// echo "sum(a) = " . array_sum($a) . "\n";

// $b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
// echo "sum(b) = " . array_sum($b) . "\n";



// foreach(array_slice($temp,15) as $durch1){
//     echo "Wärmsten hohen Temperaturen: " .$durch1 ."\n";
//     echo "Durchschnittliche Temperatur: " . $durch1 / 5;
// }

// foreach(array_slice($temp,15) as $durch2){
//     echo "Kältesten hohen Temperaturen: ".$durch2."\n";
//     echo "Durchschnittliche Temperatur: " . $durch2  / 5;
// }
