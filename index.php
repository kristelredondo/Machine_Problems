<?php

include "./Fare.php";

$bus = new Bus ("School Bus", 60, 30);

echo "Bus Name: ". $bus->getName(). "<br>";
echo "Bus Speed: ". $bus->getSpeed(). "<br>";
echo "Bus Mileage: ". $bus->getMileage(). "<br>";
echo "Bus Fare: ". $bus->fare(). "<br>";

?>