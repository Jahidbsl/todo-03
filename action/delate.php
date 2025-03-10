<?php
include "db.php";

$sql = sprintf("DELETE FROM `sms` WHERE `id` =%s", $_GET['id']);
$result = $conn->query($sql);
if ($result) {
    header("Location: /submit.php");
    exit();
} else {
    echo "Error :" . $conn->error;
}
?>