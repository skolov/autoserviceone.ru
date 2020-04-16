<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Автосервис №1 | Отзывы</title>
<link href="../style/boilerplate.css" rel="stylesheet" type="text/css">
<link href="../style/style.css" rel="stylesheet" type="text/css">
<link href="../style/orbit-1.2.3.css" rel="stylesheet">
<script src="../js/respond.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.orbit-1.2.3.js"></script>	
<script src="../js/script.js"></script>
<script type="text/javascript">
  $(window).load(function() {
    $('#featured').orbit({
      bullets: false,
      autoSize: false,
      height: 360,
      fullWidth: true,
    });
  });
</script>
<!-- 
Дополнительные сведения об условных комментариях вокруг HTML-тегов в верхней части файла:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Выполните следующие действия, если вы используете модифицированную сборку modernizr (http://www.modernizr.com/):
* вставьте здесь ссылку на свой javascript;
* удалите ссылку ниже на html5shiv;
* добавьте класс no-js в HTML-теги в верхней части;
* вы также можете удалить ссылку на respond.min.js, если MQ Polyfill входит в сборку modernizr. 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<div class="gridContainer clearfix">
  <header class="wrapper clearfix" style="z-index: 10;">
    <div class="ico-box">
      <img src="../images/logo.png">
    </div>
    <div class="call-number">
      ул. Студенческая 1К:<br>
      8 (343) 200-79-90, +7 (912) 648-66-69<br>
      ул. Фронтовых бригад 33А:<br>
      8 (343) 200-79-09, +7 (922) 039-57-59
    </div>
    <ul class="menu">
      <a href="/"><li>Главная</li></a>
      <a href="../registration/"><li>Записаться</li></a>
      <a href="../reviews/"><li>Отзывы</li></a>
      <a href="../services/"><li>Услуги</li></a>
      <a href="../price/"><li>Прайс</li></a>
      <a href="../contacts/"><li>Контакты</li></a>
    </ul>
    <div class="menu-mob-btn">
      Меню
    </div>
    <ul class="menu-mob">
      <a href="/"><li>Главная</li></a>
      <a href="../registration/"><li>Записаться</li></a>
      <a href="../reviews/"><li>Отзывы</li></a>
      <a href="../services/"><li>Услуги</li></a>
      <a href="../price/"><li>Прайс</li></a>
      <a href="../contacts/"><li>Контакты</li></a>
      <a href="../about/"><li>О компании</li></a>
    </ul>
  </header>
  <section class="clearfix">
    <div class="slider clearfix">
      <div class="container">
        <div id="featured"> 
          <div class="content">
            <div class="slide-center">
                <div class="slide-center-text">
                  <h1>РАБОТА C ДВС</h1>
                  <p>Специалисты «Автосервис №1» выполняют работы любой сложности по ремонту двигателя и других агрегатов автомобиля. 
                    Сроки ремонта варьируются от нескольких часов (при выявлении небольших проблем в работе агрегата) 
                    до нескольких дней, если предстоит капитальный ремонт двигателя.
                  </p>
                </div>
              <img src="../images/bground/carousel2.png">
            </div>
          </div>
          <div class="content">
            <div class="slide-center">
              <div class="slide-center-text">
                <h1>РЕМОНТ ВАЗ, ГАЗ, ИНОМАРКОК, МАЛОТОННАЖНЫХ ГРУЗОВИКОВ</h1>
                <p>Для одних автомобиль – средство мобильного, комфортного передвижения, 
                  для других, располагающих грузовым транспортом – инструмент заработка. 
                  И весьма неприятно, когда авто выходит из строя. 
                  Если обычный автовладелец еще сможет добраться до работы вовремя, 
                  то выполняющий перевозку груза человек вынужден терять время на ремонт и платить деньги за неустойку.
                </p>
              </div>
              <img src="../images/bground/carousel_main.png">
            </div>
          </div>
          <div class="content">
            <div class="slide-center">
                <div class="slide-center-text">
                  <h1>РАБОТА С ХОДОВОЙ</h1>
                  <p>Безопасность движения на автомобиле во многом зависит от управляемости, и малейшая неполадка может привести к плачевным результатам. 
                    Избежать этого можно, если своевременно проводить регулировку развала-схождения колёс, что также поможет сэкономить на шинах и топливе.
                  </p>
                </div>
              <img src="../images/bground/carousel1.png">
            </div>
          </div>
          <div class="content">
            <div class="slide-center">
                <div class="slide-center-text">
                  <h1>РАБОТА С ЭЛЕКТРИКОЙ</h1>
                  <p>Электронные системы управления двигателем в автомобилях, которые производятся в последние годы, 
                    становятся всё сложней. Но вместе со сложностью систем управления двигателем приходит необходимость 
                    создания новейших методов диагностики систем впрыска, 
                    позволяющих выявлять неисправности в работе для точности их устранения.
                  </p>
                </div>
              <img src="../images/bground/carousel3.png">
            </div>
          </div>
        </div>
      </div>	
    </div>
  </section>
  <section class="wrapper clearfix">
    <div class="line-text  clearfix">Ремонт ГАЗ, УАЗ, ВАЗ, иномарок, малотоннажных грузовиков<br> (KIA, FORD, FIAT, Hyundai и др.)</div>
    <div class="news">В связи с открытием нового автосервиса на фронтовых бригад, мы дарим 20% скидку на выполнение работ в данном автосервисе!</div>
    <div class="icons"></div>
  </section>
  <section class="clearfix" id="features">
    <div class="wrapper books">
        <div class="bookmark-reg">
          <form>
            <h4>Оставьте отзыв:</h4>
            <div class="bookmark-reg-blox">
              <p>*Ваше имя или название организации:</p>
              <input class="take" data-type="name">
              <p>*Ваш отзыв:</p>
              <textarea class="take" data-type="problem" name="problem" cols="25" rows="7"></textarea>
              <p>*Поля, отмеченные звездочкой обязательны для заполнения.</p>
              <button>Отправить</button>
            </div>
          </form>
          <div class="answer-suc">
              <img src="/images/suc.png">
              <div class="answer-suc_div">Отзыв принят в обработку!<br> После проверки модератором он появится на этой странице.<br> Благодарим Вас за Ваше мнение, нам это очень важно!</div>
          </div>
        </div>
    </div>
  </section>
  <section class="wrapper clearfix">
    <div class="content-l" style="margin-top: 50px;">
      <?php include "../scripts/rewievs.php" ?>
    </div>
  </section>
  <footer class="clearfix" id="footer">
    <div class="wrapper clearfix">
      <div class="footer-margin-left">
        <p>COPYRIGHT © 2013 - 2018 AUTOSERVIS №1</p>
        <div class="footer-btn">
          <a href="http://ekaterinburg.avtotochki.ru/poi/view/8759819969473/"><span style="background: url(../images/AT.png) center no-repeat"></span></a>
          <a href="https://vk.com/club159946208"><span style="background: url(../images/vk.png) center no-repeat"></span></a>
        </div>
      </div>
    </div>
  </footer>
</div>
</body>
</html>
