<?php

// 4. Erstellen Sie die Klasse „Browser“. 
// Sie benötigen eine private Variabel für den Namen. 
// Erstellen Sie den Constructor für die Klasse die die Daten des privaten Variabel füllt.
// Erstellen Sie auch die Getter und Setter für die Variabel. 
// Erstellen Sie zusätzlich eine Methode „Ausgabe“, die die Zeichenkette:
// „Ich bin der Browser: X“ zurückgibt wobei X der Name des Browsers ist.
// Erstellen Sie dann mehrere Objekte mit den Browsertypen: 
// Firefox, Chrome, Internet Explorer, Safari, Opera, Andere.
// Geben Sie dann alle Browser zeilenweise mit Ihrer Methode „Ausgabe“ aus.


$a = "Firefox";
$b = "Chrome";
$c = "Internet Explorer";
$d = "Safari";
$e = "Opera";



class Browser {
  
  public $name;
  
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

}

$brow = new Browser();
$brow->set_name($a);

echo "Ich bin der Browser:  " . $brow->get_name();
echo "<br>";

$brow->set_name("<br>" .$b."<br>" .$c."<br>".$d. "<br>".$e."<br>");

echo "Ich bin der Browser:  " . $brow->get_name();
echo "<br>";



