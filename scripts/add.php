<?php
include "connection.php";

$sql = "UPDATE main_table SET `inauto` = '1', `date_r` = '".$_POST['date']."', `time_r` = '".$_POST['time']."' WHERE `main_table`.`id` = ".$_POST['id']."";
if ($mysqli->query($sql) === TRUE) {
    echo "Подтвердите действие.";
} else {
    echo "Произошла непредвиденная ошибка! Попробуйте еще раз.";
}

?>