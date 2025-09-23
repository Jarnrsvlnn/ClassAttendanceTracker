<?php

$rootDirectory = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $rootDirectory . 'app' . DIRECTORY_SEPARATOR);
define('DATA_PATH', $rootDirectory . 'data' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $rootDirectory . 'views' . DIRECTORY_SEPARATOR);


require_once APP_PATH . "Student.php";
require_once APP_PATH . "Attendance.php";
require_once APP_PATH . "helpers.php";
require_once APP_PATH . 'data_handling.php';

$datas = new DataHandling(DATA_PATH . 'students_data.csv', DATA_PATH . 'attendance_data.csv');

$students = $datas->getStudentsData();
$attendance = $datas->getAttendanceData();
$generalData = $datas->getAllData();

require_once VIEWS_PATH . 'display_record.php';
