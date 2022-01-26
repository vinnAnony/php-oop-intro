<?php
require 'Employee.php';

class JobPosition extends Employee
{
    private $_position;

    public function __construct($position)
    {
        $this->_position = $position;
    }

    public function changeJobPosition($newPosition)
    {
        $this->_position = $newPosition;
    }
}