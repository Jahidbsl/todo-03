<?php
include "db.php";

$search = isset($_GET["search"]) ? $_GET["search"] : " ";

if ($search) {
    $sql = " SELECT * FROM sms WHERE name like '%" . $search . "%'  OR email like '%" . $search . "%'  OR phone like '%" . $search . "%'  ";
    $result = $conn->query($sql);

} else {
    $sql = "SELECT * FROM `sms`";
    $result = $conn->query($sql);
}


?>