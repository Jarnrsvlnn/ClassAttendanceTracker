<?php

class AttendanceTracker
{
    private array $studentsData = [];
    private array $attendanceData = [];

    // gets the csv file to read from

    public function __construct(string $studentFile, string $attendanceFile)
    {
        $this->studentsData = $this->readStudentData($studentFile);
        $this->attendanceData = $this->readAttendanceData($attendanceFile);
    }

    // reads the file passed and gets the student data
    public function readStudentData(string $studentData): array
    {
        $studentsDataArray = [];
        if (($studentFile = fopen($studentData, 'r')) !== false) {
            while (($studentCsv = fgetcsv($studentFile, 0, ",", '"', "\\")) !== false) {
                $studentsDataArray[] = $studentCsv;
            }
        }
        return $studentsDataArray;
    }

    public function readAttendanceData(string $attendanceData): array
    {
        $attendanceDataArray = [];
        if (($attendanceFile = fopen($attendanceData, 'r')) !== false) {
            while (($attendanceCsv = fgetcsv($attendanceFile, 0, ",", '"', "\\")) !== false) {
                $attendanceDataArray[] = $attendanceCsv;
            }
        }
        return $attendanceDataArray;
    }

    public function getStudentsData(): array
    {
        return $this->studentsData;
    }

    public function getAttendanceData(): array
    {
        return $this->attendanceData;
    }
}
