<?php


class AttendanceTracker
{
    private string $studentFile;
    private string $attendanceFile;

    // gets the csv file to read from

    public function __construct(string $studentFile, string $attendanceFile)
    {
        $this->studentFile = $studentFile;
        $this->attendanceFile = $attendanceFile;
    }

    // reads the file passed and gets the student data
    public function readStudentData(): AttendanceTracker
    {


        return $this;
    }
}
