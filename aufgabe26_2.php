<?php 

$name= $_POST['name'];
$mail= $_POST['mail'];

$newfile = fopen("testfile.txt", "a");

fwrite($newfile, "Name: " .  $name . "\n");

fwrite($newfile, "E-Mail: " . $mail . "\n");

echo "The information about your email address and name is secured!";

