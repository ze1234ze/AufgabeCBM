
<?php 


$stadt1 = $_POST["stadt1"];

if (empty($stadt1)) {
    echo "Bitte etwas schreiben!";
}
else{
echo "Ihre Lieblingsstadt ist: " . $stadt1;
}

?>

