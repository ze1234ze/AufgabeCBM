<?php

$sqlbefehl3 = "SELECT * FROM Produkte;";
$table = 0;

try {
    $data_bank = new PDO(
        "mysql:dbname=meinShop;host=localhost",
        "root",
        ""
    );

    echo "<h1>Produktname: </h1><br>";

    $ruckgabe = $data_bank->query($sqlbefehl3);
    $antwort = $ruckgabe->fetchAll(PDO::FETCH_ASSOC);

}catch(PDOException $exept){
    echo $exept->getMessage();
}

    foreach ($antwort as $line) {
        
        echo "Produktname: "   . $line["produktname"]  . "<br>";
   
    }

