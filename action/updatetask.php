<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['num'];
$course = $_POST['course'];
$dob = $_POST['dob'];

$sql = sprintf("UPDATE `sms` SET `name`='$name' ,`email`='$email', `phone`='$phone', `course`='$course', `dob`='$dob' WHERE `id` = '$id'");
$result = $conn->query($sql);
if ($result) {
    echo 'Data Inserted';
    return header('Location: /submit.php');
} else {
    echo $conn->error;
    die();
}

?>