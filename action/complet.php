<?php
include "db.php";
$sql = sprintf("SELECT * FROM `sms` WHERE `id` =%s", $_GET['id']);
$result = $conn->query($sql);
$row = $result->fetch_row();


// var_dump($row[6]);

if ($row[6] == 0) {

    $sql = sprintf("UPDATE `sms` SET `status` =1 WHERE `id` = %s", $_GET["id"]);
} else {
    $sql = sprintf("UPDATE `sms` SET `status` =0 WHERE `id` = %s", $_GET["id"]);

}

$result = $conn->query($sql);
if ($result) {
    header("Location: /submit.php");
    exit();
} else {
    echo "Error :" . $conn->error;
}
?>