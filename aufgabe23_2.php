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
     echo $selected . " hat " . $monaten[$selected] . " Tage";
}
