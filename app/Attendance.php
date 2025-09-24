<?php

declare(strict_types=1);

class Attendance
{
    public function __construct(
        private string $date,
        private int $studentId,
        private string $status
    ) {}

    public function getAttendanceDate(): string
    {
        return $this->date;
    }

    public function getStudentID(): int
    {
        return $this->studentId;
    }

    public function getAttendanceStatus(): string
    {
        return $this->status;
    }
}
