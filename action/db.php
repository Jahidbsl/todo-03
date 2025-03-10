<?php
$serverName ="localhost";
$userName ="root";
$pass ="";
$db ="students";

$conn = new mysqli($serverName, $userName,$pass,$db);
if($conn->connect_error){
    die("".$conn->connect_error);
}
?>