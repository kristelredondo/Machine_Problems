<?php

   class Vehicle {
       
     public $name;
       public $speed;
       public $mileage;

       public function __construct($name, $speed, $mileage) {
           $this->name = $name;
           $this->speed = $speed;
           $this->mileage = $mileage;
        }

       public function getName(){
            return $this->name;
        }

       public function getSpeed(){
            return $this->speed;
        }

       public function getMileage(){
            return $this->mileage;
        }
    }

   ?>