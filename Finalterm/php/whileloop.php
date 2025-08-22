<?php 

$var = 1;
while ($var <= 10) {
    echo "The value is $var <br>";
    // echo $var . "<br>";
    $var++;
}

$lang = array("PHP", "Java", "Python", "C++");
$var = 0;
echo "<br>";
while ($var < count($lang)) {
    echo "The value is $lang[$var] <br>"; 
    $var++;
}
?>