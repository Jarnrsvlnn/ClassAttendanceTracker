<?php

declare(strict_types=1);

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

    public function getAttendanceDate(): string
    {
        return $this->date;
    }

    public function getStudentID(): string
    {
        return $this->studentId;
    }

    public function getAttendanceStatus(): string
    {
        return $this->status;
    }
}
