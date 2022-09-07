<?php 


$wochentag = strtolower($_POST["wochentag"]);

switch ($wochentag) {
    case "montag":
        echo "Es gibt Montag!";
        break;
        case "dienstag":
            echo "Es gibt Dienstag!";
            break;
            case "mittwoch":   
                echo "Es gibt Mittwoch!";
                break;
                case "donnerstag":
                    echo "Es gibt Donnerstag!";
                    break;
                    case "freitag":
                        echo "Es gibt Freitag!";
                        break;
                        case "samstag": 
                            echo "Es gibt SAMSTAG!";
                            break;
                            case "sonntag":
                                echo "Es gibt Sonntag!";
                                break;
                                default:  echo "Falsche Tag!";}


                               
                                // ||"Montag"||"MONTAG"
                                // ||"Dienstag"||"DIENSTAG"
                                // || "Mittwoch" || "MITTWOCH"
                                // ||"Donnerstag"||"DONNERSTAG"
                                // ||"Freitag"||"FREITAG"
                                // ||"Samstag"||"SAMSTAG"
                                // ||"Sonntag"||"SONNTAG"

// if ($wochentag == "montag" || $wochentag == "Montag" || $wochentag == "MONTAG" ) {
//     echo "Es gibt Montag!";
// }
// elseif($wochentag == "dienstag" || $wochentag == "Dienstag" || $wochentag == "DIENSTAG" ){
//     echo "Es gibt Dienstag!";
// }
// elseif($wochentag == "mittwoch" || $wochentag == "Mittwoch"|| $wochentag == "MITTWOCH"){
//     echo "Es gibt Mittwoch!";
// }
// elseif($wochentag == "donnerstag" || $wochentag == "Donnerstag" || $wochentag == "DONNERSTAG"){
//     echo "Es gibt Donnerstag!";
// }
// elseif($wochentag == "freitag" || $wochentag == "Freitag" || $wochentag == "FREITAG"){
//     echo "Es gibt Freitag!";
// }
// elseif($wochentag == "samstag" || $wochentag == "Samstag" || $wochentag == "SAMSTAG"){
//     echo "Es gibt Samstag!";
// }
// elseif($wochentag == "sonntag" || $wochentag == "Sonntag" || $wochentag == "SONNTAG"){
//     echo "Es gibt Sonntag!";
// }
// else{
//     echo "Falsche Tag!";  
// }