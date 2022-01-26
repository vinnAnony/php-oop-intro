<?php

class Employee
{
    private $_name;
    private $_job;
    private $_age;

    public function __construct($name, $job, $age)
    {
        $this->_name = $name;
        $this->_job = $job;
        $this->_age = $age;
    }

    public function changeJob($newjob)
    {
        $this->_job = $newjob;
    }
}