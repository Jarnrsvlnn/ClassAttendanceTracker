<?php

class Student
{
    public $name;
    public $id;

    public function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
    }
}
