<?php 


$wochentag = strtolower($_POST["wochentag"]);

if ($wochentag == "montag") {
    echo "Es gibt Montag!";
}
elseif($wochentag == "dienstag"){
    echo "Es gibt Dienstag!";
}
elseif($wochentag == "mittwoch"){
    echo "Es gibt Mittwoch!";
}
elseif($wochentag == "donnerstag"){
    echo "Es gibt Donnerstag!";
}
elseif($wochentag == "freitag"){
    echo "Es gibt Freitag!";
}
elseif($wochentag == "samstag"){
    echo "Es gibt Samstag!";
}
elseif($wochentag == "sonntag"){
    echo "Es gibt Sonntag!";
}
else{
    echo "Falsche Tag!";  
}


?>

