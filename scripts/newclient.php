<?php
include "connection.php";

function chek_post($link, $var) {
    return mysqli_real_escape_string($link, $var);
}


function mail_to() {
    $to      = 'sokolovskijmsk@bk.ru';
    $subject = 'Новая заявка в автосервис';
    $message = 'Проверьте заявки в Ваш автосервис!';
    $headers = array(
        'From' => 'webmaster@example.com',
        'Reply-To' => 'webmaster@example.com',
        'X-Mailer' => 'PHP/' . phpversion()
    );
    mail($to, $subject, $message, $headers);
}

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['street']) && isset($_POST['problem'])) {
    if (
        chek_post($mysqli, $_POST['name']) &&
        chek_post($mysqli, $_POST['email']) &&
        chek_post($mysqli, $_POST['phone']) &&
        chek_post($mysqli, $_POST['street']) &&
        chek_post($mysqli, $_POST['problem'])
    ) {
        
        $sql = "INSERT INTO `main_table` (`name`, `mail`, `phone`, `about`, `street`, `date_r`, `time_r`, `inauto`, `deleted`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['problem']."', '".$_POST['street']."', '2018-03-21', '08:20:22', '0', '0')";

        if ($mysqli->query($sql) === TRUE) {
            mail_to();
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