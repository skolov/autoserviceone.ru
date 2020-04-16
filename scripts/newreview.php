<?php
include "connection.php";

function chek_post($link, $var) {
    return mysqli_real_escape_string($link, $var);
}

if (isset($_POST['name']) && isset($_POST['problem'])) {
    $d = date("Y-m-d h:i:s");
    if (
        chek_post($mysqli, $_POST['name']) &&
        chek_post($mysqli, $_POST['problem'])
    ) {

        $sql = "INSERT INTO `review` (`name_au`, `date_com`, `text_com`) VALUES ('".$_POST['name']."', '".$d."', '".$_POST['problem']."')";
        if ($mysqli->query($sql) === TRUE) {
            echo true; 
        } else {
            echo false; 
        }

    }else {
        echo false;
    }

}else {
    echo false;
}
?>