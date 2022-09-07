<?php

$g_stadt = array("Tokio", "Mexiko City", "New York City",
                 "Mumbai", "Seoul", "Shanghai", "Lagos",
                 "Buenos Aires", "Kairo", "London");

                 sort($g_stadt, SORT_STRING | SORT_FLAG_CASE);

$g_stadt2 = array("Los Angeles", "Kalkutta", "Osaka", "Peking");                 


foreach ($g_stadt as $a_stadt)
    echo $a_stadt . ", ";
    echo "<br />";
 
    array_push($g_stadt, "Los Angeles", "Kalkutta", "Osaka", "Peking");    
    sort($g_stadt, SORT_STRING | SORT_FLAG_CASE);
    foreach ($g_stadt as $a_stadt2)

    echo $a_stadt2 . ", ";





