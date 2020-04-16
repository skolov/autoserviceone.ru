<?php

$mysqli = new mysqli("localhost", "u69856", "imXCtXCbAaKm4zV", "u69856");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$mysqli->set_charset('utf8');
?>