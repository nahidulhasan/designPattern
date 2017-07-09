<?php
class Car{
    private $numberPlate;
    function __construct(){
        $this->numberPlate = "DHA ".mt_rand(1,1000);
    }
    function honk(){
        echo "The Numberplate is {$this->numberPlate} \n";
    }
}

class RentACar{
    private static $instance;

    protected static function getCar(){
        if(!self::$instance) {
            self::$instance = new Car();
        }
        return self::$instance;
    }
}

class PassangerOne extends RentACar{
    function ride(){
        echo "I am Passanger 1. \n";
        $myCar = RentACar::getCar();
        $myCar->honk();
    }
}

class PassangerTwo extends RentACar{
    function ride(){
        echo "I am Passanger 2. \n";
        $myCar = RentACar::getCar();
        $myCar->honk();
    }
}

$p1 = new PassangerOne();
$p1->ride();

$p2 = new PassangerTwo();
$p2->ride();
