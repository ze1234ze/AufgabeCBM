<?php

//   Sie sollen mit PHP eine Datenbank mit einer Tabelle erstellen und einen
//  Datensatz schreiben und anschließend auslesen. Für die Übersicht verwenden
//  Sie für jede Aufgabe ein eigenes Skript.
//  Erstellen Sie ein PHP-Programm welches die Datenbank „meinShop“ erstellt.
//  Anschließend erstellen Sie mit PHP-Programm das die Tabelle „Produkte“ mit 
//  den Feldern „id“ und „produktname“ erzeugt.
//  Schreiben Sie mit PHP-Programm um einen beliebigen Artikel in Tabelle „Produkte“
//  hinzufügen. Benutzen Sie prepared statements.
//  Schreiben Sie ein weiteres Programm um die Daten aus der Tabelle „Produkte“
//  anzuzeigen.Alle Skripts müssen Try / Catch für die Fehlerbehandlung verwenden.
//  Verwenden Sie ausschließlich die Klasse PDO für alle Aufgaben.


$sql = "CREATE DATABASE meinShop";


try{
    $data_bank = new PDO(
        "mysql:dbname=onlineshop;host=localhost",
        "root",       // username 
        ""           // password
    );
    $data_bank->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Gut gemacht!";

    
    $data_bank->exec($sql);
    $data_bank = null;  // macht variabel frei

}catch(PDOException $exept){
    echo $exept->getMessage();
}

