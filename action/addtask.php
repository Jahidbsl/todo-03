<?php
include "db.php";


$sql = sprintf(
    "INSERT INTO `sms`  (`name`,`email`,`phone`,`course`,`dob`) VALUES('%s','%s','%s','%s','%s')",
    $_POST['name'],
    $_POST['email'],
    $_POST['num'],
    $_POST['cours'],
    $_POST['dob'],
);
$result = $conn->query($sql);
if ($result) {
    echo 'Data INserted';
    return header('Location: /submit.php');
} else {
    echo $conn->error;
    die();
}
?>