 <?php

inclued("./myapp/database.php")
use  myapp\database;

$db=Database::getInstance();


while ($row =mysqli_fetch_assoc($result)) {
	echo $row["name"];
	echo "<br/>"; 
}


require_once("./car1.php");

$Car = new car1;
$Car->setmodel("bmw"); 

echo "make:" . $Car->getmodel();










require_once("./car.php");
$Car = new car ("bmw", "f10", "2010");

echo "make:" . $car->getmake();

