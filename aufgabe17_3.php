<?php

$landern = array();

$landern["Japan"] = "Tokyo";
$landern["Mexico"] = "Mexico City";
$landern["USA"] = "New York City";
$landern["Indien"] = "mumbai";
$landern["Korea"] = "Seoul";
$landern["China"] = "Shanghai";
$landern["Nigeria"] = "Lagos";
$landern["Argentina"] = "Buenos Aires";
$landern["Agypten"] = "Cairo";
$landern["England"] = "London";



if ( ! empty( $_POST['stadt'] ) ) {
	
	$stadt = $_POST['stadt'];
	
	$antwort = array_search($stadt, $landern);
	
	echo $stadt . ' das ist ' . $antwort;
	
}






