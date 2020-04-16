<?php include "../../scripts/admin.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Администратор</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../style/boilerplate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" media="screen" href="../../style/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="../../js/respond.min.js"></script>
    <script src="../../js/script.js"></script>
</head>
<body>
    <div class="center-admin">
        <div class="admin">
            <div class="admin-head">ВХОДЯЩИЕ ЗАЯВКИ:</div>
            <!--<div class="admin-btn">Добавить</div>
            <div class="admin-btn">К отзывам</div>-->
            <div class="client-line-f">
                <div class="client-id">№</div>
                <div class="client-name">Имя (ФИО)</div>
                <div class="client-email">E-mail</div>
                <div class="client-phone">Телефон</div>
                <div class="client-text">Описание проблемы</div>
                <div class="client-date">Дата/Время</div>
                <div class="client-time">Адрес</div>
            </div>

            <?php
                if ($resultF) {
                    $i = 0;
                    while ($row = $resultF->fetch_assoc()) {
                        $i++;
                        if (($i % 2) == 0) {
                            $style = "client-line-f bc";
                        }else {
                            $style = "client-line";
                        }
            ?>
                        <div class="<?php echo $style;?>" data-id="<?php echo $row['id'];?>">
                            <div class="client-id"><?php echo $i;?></div>
                            <div class="client-name"><?php echo $row['name'];?></div>
                            <div class="client-email"><?php echo $row['mail'];?></div>
                            <div class="client-phone"><?php echo $row['phone'];?></div>
                            <div class="client-text"><?php echo $row['about'];?></div>
                            <div class="client-date">
                                <input class="cdate-input" data-id="<?php echo $row['id'];?>" type="date">
                                <input class="ctime-input" data-id="<?php echo $row['id'];?>" type="time">
                            </div>
                            <div class="client-time"><?php echo $row['street'];?></div>
                            <span class="btn-ok" style="background: url(../../images/ok.png)" data-id="<?php echo $row['id'];?>"></span>
                            <span class="btn-del" style="background: url(../../images/del.png)"  data-id="<?php echo $row['id'];?>"></span>
                        </div>
            <?php
                    }
                }
            ?>

            <div class="admin-head">ПРИНЯТЫЕ ЗАЯВКИ:</div>
            <div class="client-line-f">
                <div class="client-id">№</div>
                <div class="client-name">Имя (ФИО)</div>
                <div class="client-email">E-mail</div>
                <div class="client-phone">Телефон</div>
                <div class="client-text">Описание проблемы</div>
                <div class="client-date">Дата/Время</div>
                <div class="client-time">Адрес</div>
            </div>


            <?php
                if ($resultS) {
                    $i = 0;
                    while ($row = $resultS->fetch_assoc()) {
                        $i++;
                        if (($i % 2) == 0) {
                            $style = "client-line-f bc";
                        }else {
                            $style = "client-line";
                        }
            ?>
                        <div class="<?php echo $style;?>" data-id="<?php echo $row['id'];?>">
                            <div class="client-id"><?php echo $i;?></div>
                            <div class="client-name"><?php echo $row['name'];?></div>
                            <div class="client-email"><?php echo $row['mail'];?></div>
                            <div class="client-phone"><?php echo $row['phone'];?></div>
                            <div class="client-text"><?php echo $row['about'];?></div>
                            <div class="client-date"><?php echo $row['date_r'].'<br>'.$row['time_r'];?></div>
                            <div class="client-time"><?php echo $row['street'];?></div>
                            <span class="btn-del" style="background: url(../images/del.png)"  data-id="<?php echo $row['id'];?>"></span>
                        </div>
            <?php
                    }
                }
            ?>

        </div>
    </div>
</body>
</html>