<?php
abstract class Personal{
    abstract function hello($name, $age);
}
class Person extends Personal {
    function hello($name, $age){
        echo "My name is $name and my age is $age";
    }
}
$newPerson=new Person();
$newPerson->hello("Vinn",23);