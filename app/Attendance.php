<?php

class Attendance
{
    private $date;
    private $studentId;
    private $status;

    public function __construct($date, $id, $status)
    {
        $this->date = $date;
        $this->studentId = $id;
        $this->status = $status;
    }

    public function getAttendanceDate()
    {
        return $this->date;
    }

    public function getStudentID()
    {
        return $this->studentId;
    }

    public function getAttendanceStatus()
    {
        return $this->status;
    }
}
