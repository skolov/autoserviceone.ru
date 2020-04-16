<?php
include "connection.php";

$sqlF = "SELECT * FROM main_table WHERE deleted <> '1' AND inauto = '0'";
$resultF = $mysqli->query($sqlF);

$sqlS = "SELECT * FROM main_table WHERE deleted = '0' AND inauto = '1' ORDER BY date_r";
$resultS = $mysqli->query($sqlS);

?>