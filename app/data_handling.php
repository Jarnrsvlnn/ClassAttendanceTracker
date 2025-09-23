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
    private function readStudentData(string $studentData): array
    {
        $studentsDataArray = [];

        // opens the specified file to read data from  
        if (($studentFile = fopen($studentData, 'r')) !== false) {
            while (($studentCsv = fgetcsv($studentFile, 0, ",", '"', "\\")) !== false) {
                $studentData = $this->handleStudentData($studentCsv);
                $student = new Student($studentData['id'], $studentData['name']);
                $studentsDataArray[] = $student;
            }
        }
        return $studentsDataArray;
    }

    private function readAttendanceData(string $attendanceData): array
    {
        $attendanceDataArray = [];
        if (($attendanceFile = fopen($attendanceData, 'r')) !== false) {
            while (($attendanceCsv = fgetcsv($attendanceFile, 0, ",", '"', "\\")) !== false) {
                $attendanceData = $this->handleAttendanceData($attendanceCsv);
                $attendance = new Attendance($attendanceData['date'], $attendanceData['studentId'], $attendanceData['status']);
                $attendanceDataArray[] = $attendance;
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
