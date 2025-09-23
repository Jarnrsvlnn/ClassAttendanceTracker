<?php

class Attendance
{
    public $date;
    public $studentId;
    public $status;

    public function __construct($date, $id, $status)
    {
        $this->date = $date;
        $this->studentId = $id;
        $this->status = $status;
    }
}
