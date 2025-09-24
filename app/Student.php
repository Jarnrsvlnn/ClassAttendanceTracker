<?php

declare(strict_types=1);

class Student
{
    private $name;
    private $id;

    public function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
    }

    // applied encapsulation to only get the property by calling a function
    public function getStudentName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }
}
