<?php

include "./Vehicle.php";

class Bus extends Vehicle {
    private $seatingCapacity = 50;

    public function fare() {
        $fareCharge = $this->seatingCapacity * 100;
        $maintenanceCharge = $fareCharge * 0.10;
        return $fareCharge + $maintenanceCharge;
    }
}

?>