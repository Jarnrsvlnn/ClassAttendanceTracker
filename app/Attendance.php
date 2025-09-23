<?php

class Attendance
{
    private $date;
    private $id;
    private $status;

    public function __construct($date, $id, $status)
    {
        $this->date = $date;
        $this->id = $id;
        $this->status = $status;
    }
}
