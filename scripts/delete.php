<?php
include "connection.php";
$sql = "UPDATE `main_table` SET `deleted` = '1' WHERE `main_table`.`id` = ".$_POST['id']."";
if ($mysqli->query($sql) === TRUE) {echo "Подтвердите действие.";} else {echo "Произошла непредвиденная ошибка! Попробуйте еще раз.";}
?>