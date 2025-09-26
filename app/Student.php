<?php

declare(strict_types=1);

namespace App\Student;

class Student
{
    public function __construct(
        private string $name,
        private int $id
    ) {}

    // applied encapsulation to only get the property by calling a function
    public function getStudentName(): string
    {
        return $this->name;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
