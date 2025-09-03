<!DOCTYPE html>
<html>
<body>
    <?php

$variable = 70;
$variable = 50;

echo "The value of the variable is $variable <br>";

$name = "Tahmid Sadat";
echo "My name is $name";
echo "<br>";

$age = 20;
echo "I am $age years old.";

echo "<br>";

echo "next year i'll became " . ($age + 1). ".<br>";

class Car {
    
        public $model;

        function __construct($carModel) {
        $this->model = $carModel;
    }
}

$car1 = new Car("Toyota");
$car2 = new Car("Honda");

echo $car1->model . "<br>";
echo $car2->model . "<br>";

$var = 10;
echo $var++ . "<br>";
echo $var . "<br>";
echo ++$var . "<br>";
echo $var . "<br>";



?>
</body>
</html>

