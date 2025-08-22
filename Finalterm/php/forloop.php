<?php
for ($i=0; $i<10; $i++) {
    echo "the vallue is ";
    echo $i . "<br>";
}
?>

<?php

echo "<br> For Loop <br> <br>";
$lang = array("PHP", "Java", "Python", "C++");

for ($i=0; $i<10; $i++) {
    echo "the vallue is $i <br>";
    // echo $i . "<br>";
}
echo "<br> ForEach <br><br>";
foreach ($lang as $value) {
    echo "the value is $value <br>";
}
?>