<?php
/**
 * Created by PhpStorm.
 * User: Nahidul Hasan
 * Date: 14-Jul-17
 * Time: 8:56 AM
 */

class Person {

    private $name;
    private  $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}


$person = new Person('M');

$person->setAge(20);


var_dump($person->getAge());