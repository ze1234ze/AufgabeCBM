<?php

$monaten = array();

$monaten["Januar"] = 31;
$monaten["Februar"] = 28;
$monaten["Marz"] = 31;
$monaten["April"] = 30;
$monaten["Mai"] = 31;
$monaten["Juni"] = 30;
$monaten["Juli"] = 31;
$monaten["August"] = 31;
$monaten["September"] = 30;
$monaten["Oktber"] = 31;
$monaten["November"] = 30;
$monaten["December"] = 31;

$selected = $_POST["monat"];

if (!empty($selected)) {

$monaten = array_flip($monaten);
$antwort = array_search($selected, $monaten);
echo $selected . " hat " . $antwort . "Tage";
}


// if ( ! empty($selected)) {

//     $monaten2 = array_flip($monaten);
	
// 	$antwort = array_search($selected, $monaten2);
	
// 	echo $selected . " hat " . $antwort . " Tage ";
	
// }

// $a=array("a"=>"red","b"=>"green","c"=>"blue");

// echo array_search("red",$a);




// if ( ! empty($selected) ) {

//     $monaten = array_flip($monaten);





	
// 	$antwort = array_search($selected, $monaten);
	
// } 

//     echo "Der Monat $selected hat $antwort Tage."; 





	// echo "Der Monat $selected hat $antwort Tage.";
	
