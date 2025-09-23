<?php

class DataHandling
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
                $studentsDataArray[] = $this->handleStudentData($studentCsv);
            }
        }
        return $studentsDataArray;
    }

    public function readAttendanceData(string $attendanceData): array
    {
        $attendanceDataArray = [];
        if (($attendanceFile = fopen($attendanceData, 'r')) !== false) {
            while (($attendanceCsv = fgetcsv($attendanceFile, 0, ",", '"', "\\")) !== false) {
                $attendanceDataArray[] = $this->handleAttendanceData($attendanceCsv);
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

    private function handleStudentData(array $studentData): array
    {
        // destructure the studentData array
        [$id, $name] = $studentData;

        return [
            'id' => $id,
            'name' => $name
        ];
    }

    private function handleAttendanceData(array $attendanceData): array
    {
        // destructure the attendanceData array
        [$date, $studentId, $status] = $attendanceData;

        return [
            'date' => $date,
            'studentId' => $studentId,
            'status' => $status
        ];
    }
}
