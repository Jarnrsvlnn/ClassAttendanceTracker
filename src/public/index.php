<?php

$rootDirectory = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $rootDirectory . 'app' . DIRECTORY_SEPARATOR);
define('DATA_PATH', $rootDirectory . 'data' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $rootDirectory . 'views' . DIRECTORY_SEPARATOR);


require_once APP_PATH . "Student.php";
require_once APP_PATH . "Attendance.php";
require_once APP_PATH . "helpers.php";
require_once APP_PATH . 'data_handling.php';


$track = new DataHandling(DATA_PATH . 'students_data.csv', DATA_PATH . 'attendance_data.csv');

echo '<pre>';
print_r($track->getStudentsData());
echo '<pre/>';

echo '<pre>';
print_r($track->getAttendanceData());
echo '<pre/>';
