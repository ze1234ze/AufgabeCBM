<?php
/* 1. Erstellen Sie ein Programm das mit zwei Variablen die vier 
mathematischen Operationen durchführt und zusätzlich das Modulo berechnet. 
Geben Sie das Ergebnis untereinander (Zeilenumbruch) aus. 
*/

//Variablen für Rechenoperationen

echo "<h3> Aufgabe 1 <h3>";

$var1 = 12;
$var2 = 6;

$addition = $var1 + $var2;
echo $addition ."<br>";

$subtraktion = $var1 - $var2;
echo $subtraktion ."<br>";

$multiplikation = $var1 * $var2;
echo $multiplikation ."<br>";

if ($var2 !== 0){
$division = $var1 / $var2;
echo $division ."<br>";
}
else
echo "Nenner darf keine Null haben!"."<br>";

$modulo = $var1 % $var2; //Modulo -> Rest 0 (2*6 = 12 -> Rest 0)
echo $modulo . "<br>";

$potenz = $var1 ** $var2; // Basis hoch Exponent
echo $potenz ."<br>";

echo "<br>";
echo "<br>";
echo "<br>";

/* 2. Sie sollen hintereinander mehrere mathematische 
Operationen durchführen. Gegeben ist eine Variabel mit dem Startwert 8
Addieren Sie 2 hinzu.
Subtrahieren Sie 4.
Multiplizieren Sie mit 5.
Dividieren Sie durch 3.
Inkrementieren Sie um 1.
Dekrementieren Sie um 1.
Geben Sie jede Wertveränderung zeilenweise aus und verwenden 
Sie ausschließlich die Kurzschreibweise.
*/

echo "<h3> Aufgabe 2 <h3>";

$var1 = 8;  //Variable Wert 8 zuweisein und ausgeben
echo $var1;
echo "<br>";

$var1 = $var1 + 2; //Addieren Sie 2 hinzu
echo $var1;
echo "<br>";

$var1 = $var1 - 4; //Subtrahieren Sie 4.
echo $var1;
echo "<br>";

$var1 = $var1 * 5; // Multiplizieren Sie mit 5
echo $var1;
echo "<br>";

$var1 = $var1 / 3; // Dividieren Sie durch 3
echo $var1;
echo "<br>"; 

$var1++; //inkrementieren
echo $var1;
echo "<br>"; 

$var1--; //dekrementieren
echo $var1;
echo "<br>"; 

echo "<br>";
echo "<br>";
echo "<br>";


/* 3. Wenn Sie Skripte schreiben, müssen Sie oft genau sehen,
was in Ihren Variablen steht. Überlegen Sie sich für diese Übung, 
welche Befehle Sie verwenden können, und schreiben Sie dann ein Skript, 
das Folgendes ausgibt und die echo-Anweisung nur für Zeilenumbrüche verwendet. 
Gegeben ist die Variabel $name = „Max“; und $alter = 25;
Tip: print_r() gibt ihnen auch den Inhalt einer Variabel im „menschlich“ Lesbaren
Format aus.
Erwartete Ausgabe:
string(3) „Max“
Max
int(25)
NULL
*/
echo "<h3> Aufgabe 3 <h3>";

//Variablen
$name = "Max";
$alter = 25;
//detaillierte Informationen (Datentyp)
var_dump($name);
echo "<br>";
//Menschliche Sprache -> print_r()
print_r($name);  
echo "<br>";
//detaillierte Informationen (Datentyp)
var_dump($alter);
echo "<br>";
//NULL soll ausgebeben werden
$alter = NULL; //Variable leeren
var_dump($alter);
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";


/*4. Gegeben ist die Variabel $wald = „Wald“;
Einfache Anführungszeichen und doppelte Anführungszeichen 
funktionieren in PHP nicht auf die gleiche Weise. Verwenden 
Sie einfache Anführungszeichen (' ') und den Verkettungsoperator 
und geben Sie folgendes Echo an den Browser aus, wobei Sie die 
von Ihnen erstellte Variable verwenden:
Wie man in den Wald hineinruft, so schallt es aus dem Wald heraus.
*/

echo "<h3> Aufgabe 4 <h3>";

//Variable

$wald = 'Wald';
//Achtung! Mit den ''werden die String-Variablen nicht richtig interpretiert,
//es wird buchstäblich $wald (also der Bezeichner) ausgegeben.
echo '<li>'.'Wie man in den $wald hineinruft, so schallt es aus dem $wald heraus.';
echo "<br>";
echo "<br>";

echo '<ul>'."Wie man in den $wald hineinruft, so schallt es aus dem $wald heraus.";
echo "<br>";
echo "<br>";

//Lösung für unser Problem bringt uns der Punktoperator -> Zeichenketten verknüpfen.
//und die neue Setzung der einfachen Anführungszeichen ''.
//HTML-Tags werden auch als String interpretiert -> bei Verkettung auch in "" setzen
 echo "<b>" .'Wie man in den ' . $wald . ' hineinruft, so schallt es aus dem ' 
. $wald . ' heraus.' . "</b>";


echo "<br>";
echo "<br>";
echo "<br>";



/*5. PHP bietet Ihnen verschiedene
Arten von Variablen an. In dieser Übung sollen Sie 
eine Variable erstellen, ihr verschiedene Werte 
zuweisen und dann ihren Typ für jeden Wert testen. 
Geben Sie den Typ zeilenweise aus. Verwenden Sie die Funktion 
gettype() um den Typ der Variabel zu ermitteln.
Erwartete Ausgabe:
Wert ist ein string.
Wert ist eine double.
Wert ist ein boolean.
Wert ist ein integer.
Wert ist NULL..
*/

echo "<h3> Aufgabe 5 <h3>";

//Variable
$variable = array ("Hallo", 2.22, true, 14, NULL);

//foreach-Schleife, um die Felder des Arrays zu druchlaufen
foreach ($variable AS $hilfsvariable){
    //jeweilige Werte werden ausgegeben
      echo "Wert ist ein " . gettype($hilfsvariable) . "<br>";
}


echo "<br>";
echo "<br>";
echo "<br>";


/*6. In dieser Übung werden Sie Kontrollstrukturen verwenden, 
um zu bestimmen, was im Browser ausgegeben wird. Schreiben Sie 
ein Skript, das den aktuellen Monat abfragt und diesen dann ausgibt. 
Es sollen alle 12 Monate geprüft werden.
Mit der Ausdruck $aktuellerMonat = date('F', time()); 
können Sie den aktuellen Monat ermitteln.
*/

echo "<h3> Aufgabe 6 <h3>";

//Variable

$aktuellerMonat = date('F', time());
$monatsangabe = "September";
//echo $aktuellerMonat;


switch($monatsangabe){

    case "Januar":
        if ($monatsangabe == $aktuellerMonat){
        echo $aktuellerMonat;
       } 
       else{
         echo "Nicht aktueller Monat"  ; 
         break;
           }

     case "Februar":
       if ($monatsangabe == $aktuellerMonat){
        echo $aktuellerMonat;
        } 
        else{
         echo "Nicht aktueller Monat"  ; 
        break;
             }


      case "September":
        if ($monatsangabe == $aktuellerMonat){
        echo $aktuellerMonat;
        } 
        else{
        echo "Nicht aktueller Monat"  ; 
        break;
             }
        

    
}


echo "<br>";
echo "<br>";
echo "<br>";

echo "<h3> Aufgabe 6 Teil 2 <h3>";

//Variable

$aktuellerMonat = date('F', time());
$monatsangabe = "September";
//echo $aktuellerMonat;



        if ($monatsangabe == $aktuellerMonat){
        echo $aktuellerMonat;
       } 
       else
         echo "Nicht aktueller Monat"  ; 
         
           

     

echo "<br>";
echo "<br>";
echo "<br>";


/*7.In dieser Übung werden Sie alle Schleifen 
auf Herz und Nieren prüfen. Schreiben Sie ein 
Skript, das zunächst eine while-Schleife, dann 
eine do while-Schleife und schließlich eine for-Schleifen 
enthält. Das Skript gibt folgendes im Browser aus:
abc abc abc abc abc abc abc abc abc
xyz xyz xyz xyz xyz xyz xyz xyz xyz
1 2 3 4 5 6 7 8 9
*/
echo "<h3> Aufgabe 7 <h3>";

//Variablen (+Schleifenzähler)
$var1 = "abc";
$var2 = "xyz";
$i = 1;
$j = 1;
$z = 1;

//while-Schleife
while ($i < 10){
echo $var1 . " ";
$i++;
}
echo "<br>";
echo "<h3> do-while-Schleifen </h3>";

//do-while-Schleife
do{
    echo $var2 . " ";
    $j++;
}while($j < 10);

echo "<br>";
echo "<h3> for-Schleife </h3>";

//for-Schleife

for($z = 1; $z < 10; $z++){
    echo $z . " ";
}


echo "<br>";
echo "<br>";
echo "<br>";


/*8. Schreiben Sie ein Programm, das mithilfe einer Schleife 
die Quadratzahlen bis einschließlich 10 zeilenweise ausgibt.
Bsp: 1*1=1 …usw.
*/

echo "<h3> Aufgabe 8 <h3>";

//Variablen
$ergebnis = array();

//for-Schleife

for($z = 1; $z <= 10; $z++){
    $ergebnis[$z] = $z**2;
    echo  $z . " * " . $z . " = ". $ergebnis[$z] . "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";


/*9. In dieser Übung verwenden Sie zwei for-Schleifen, 
von denen eine in die andere verschachtelt ist.
Es wird diese Ausgabe erwartet:
1.1|1.2|1.3|1.4|1.5|1.6|1.7|1.8|1.9| 
2.1|2.2|2.3|2.4|2.5|2.6|2.7|2.8|2.9| 
3.1|3.2|3.3|3.4|3.5|3.6|3.7|3.8|3.9| 
4.1|4.2|4.3|4.4|4.5|4.6|4.7|4.8|4.9| 
5.1|5.2|5.3|5.4|5.5|5.6|5.7|5.8|5.9| 
6.1|6.2|6.3|6.4|6.5|6.6|6.7|6.8|6.9| 
7.1|7.2|7.3|7.4|7.5|7.6|7.7|7.8|7.9| 
8.1|8.2|8.3|8.4|8.5|8.6|8.7|8.8|8.9| 
9.1|9.2|9.3|9.4|9.5|9.6|9.7|9.8|9.9|
*/

echo "<h3> Aufgabe 9 <h3>";

//Variable -> Ergebnisarray
$zahlenpaare = array();

//verschachtelte for-Schleife
for ($i = 1; $i <= 9; $i++){ //äußere Schleife -> zeilenweise
                             //1.x, 1.y....danach 2.x, 2.y etc
    for ($j = 1; $j <= 9; $j++){ //innere Schleife

        echo $i . "." . $j  . "|";
        
    }
  echo "<br>"; //nach jeder Zeile ein break
}

echo "<br>";
echo "<br>";
echo "<br>";
