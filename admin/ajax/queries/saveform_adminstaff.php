<?php
include('../../../config.php');

$today = date('Y-m-d H:i:s');
$username = $_SESSION['username'];
$staff_name = mysqli_real_escape_string($mysqli, $_POST['staff_name']);
$employment_type = mysqli_real_escape_string($mysqli, $_POST['employment_type']);
$staff_id = mysqli_real_escape_string($mysqli, $_POST['staff_id']);
$staff_position = mysqli_real_escape_string($mysqli, $_POST['staff_position']);
$staff_telephone = mysqli_real_escape_string($mysqli, $_POST['staff_telephone']);
$staff_email = mysqli_real_escape_string($mysqli, $_POST['staff_email']);
$staff_qualification = mysqli_real_escape_string($mysqli, $_POST['staff_qualification']);
$staff_department = mysqli_real_escape_string($mysqli, $_POST['staff_department']);
$date_started = mysqli_real_escape_string($mysqli, $_POST['date_started']);
$datetime = date("Y-m-d H:i:s");

$mysqli->query("INSERT INTO `admin_staff`
            (
             `staff_name`,
             `employment_type`,
             `staff_id`,
             `staff_position`,
             `staff_telephone`,
             `staff_email`,
             `staff_qualification`,
             `staff_department`,
             `date_started`)
VALUES (
        '$staff_name',
        '$employment_type',
        '$staff_id',
        '$staff_position',
        '$staff_telephone',
        '$staff_email',
        '$staff_qualification',
        '$staff_department',
        '$date_started')") or die(mysqli_error($mysqli));


$mysqli->query("INSERT INTO `taymac_logs_mis`
        (`message`,
         `logdate`,
         `username`,
         `mac_address`,
         `ip_address`,
         `action`)
VALUES ('Added to staff',
    '$today',
    '$username',
    '$mac_address',
    '$ip_add',
    'Successful')") or die(mysqli_error($mysqli));

echo 1;
