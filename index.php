<?php

include_once($_SERVER['DOCUMENT_ROOT']."/assets/amvc/config.php"); // Конфигурация БД и т.п.
include_once($_SERVER['DOCUMENT_ROOT']."/assets/amvc/translater.php"); // Для быстрой смены информации на сайте
include_once($_SERVER['DOCUMENT_ROOT']."/assets/amvc/controller/route.php");
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Грузоперевозки по России и Москве: перевозка и доставка грузов - грузовые перевозки от транспортной компании Пегас">
    <meta name="author" content="Frolenok-Andrey.ru">
    <!-- Note there is no responsive meta tag here -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=1140">
    <link rel="icon" href="/favicon.ico">
    <title><?=$title?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="/css/style-prism.css">
    <!-- <link rel="stylesheet" href="/css/prism.css"> -->
    <link rel="stylesheet" href="/css/chosen.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="/css/non-responsive.css" rel="stylesheet">
    <link href="/css/flexslider.css" rel="stylesheet">
    <link href="/css/colors.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/mega_menu.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/js/ie-emulation-modes-warning.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.cookie.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/app/calculate.js"></script>
    <script src="/js/app/track.js"></script>


    <? if($active_company=='active') {
      echo '<script src="https://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>';};
      echo '<script src="/js/gomapjq.js" type="text/javascript"></script>';
    ?>
    <style>
       .flexslider {
         margin-bottom: 10px;
       }

       .flex-control-nav {
         position: relative;
         bottom: auto;
       }

       .custom-navigation {
         display: table;
         width: 100%;
         table-layout: fixed;
       }

       .custom-navigation > * {
         display: table-cell;
       }

       .custom-navigation > a {
         width: 50px;
       }

       .custom-navigation .flex-next {
         text-align: right;
       }
     </style>
    <script src="/js/mega_menu.min.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="up">
    <?php /* Виджеты */
    include_once($_SERVER['DOCUMENT_ROOT']."/assets/amvc/widgets/chat.php"); // Чат
    include_once($_SERVER['DOCUMENT_ROOT']."/assets/amvc/widgets/fix_menu_left.php"); // Левое фиксменю
    ?>
    <section class="shadow" style="background: #fff; margin-bottom: -25px;">
      <div class="container">
        <div class="row">
          <div class="col-xs-3 top-logo-coll">
            <a href="/">
              <img class="logotype inlineblock" src="/images/pegas-logo.png" alt="Пегас - быстрее ветра">
            </a>

          </div>
        <div class="col-xs-2">
          <div class="pad-top-2" style="padding-top: 23px; padding-left: 25px;">
            <?php /* Виджет городов */
            include_once($_SERVER['DOCUMENT_ROOT']."/assets/amvc/widgets/cities.php");
            ?>
          </div>

        </div>
        <div class="col-xs-7">
          <div class="row">
            <div class="col-xs-4" style="padding-top: 49px;">

              <a style="font-size: 17px;" class="header-phone bold color-blue" href="<?=$phone1_tel?>"><?=$phone1;?></a><br/>
              <a style="font-size: 12px;" class="header-phone  color-blue" href="<?=$phone2_tel?>"><?=$phone2;?></a>

            </div>
            <div class="col-xs-8  text-right" style="padding-top: 50px;">

              <!-- <button class="btn btn-default bg-red border-r2 open-sans" style="height: 44px;  margin-right: 30px; color: white;">
                &nbsp;&nbsp;&nbsp;Подать заявку&nbsp;&nbsp;
              </button> -->
              <?
              if($_GET['page']!='cabinet') {
                ?>
                <a href="/личный-кабинет" class="btn btn-default bg-blue border-r2 open-sans" style="height: 40px; line-height: 1.8em; color: white; padding-bottom: 0px; margin-bottom: 0;">
                  &nbsp;&nbsp;&nbsp;&nbsp;Личный кабинет&nbsp;&nbsp;&nbsp;&nbsp;
                </a>
                <?
              }
              ?>

            </div>

          </div>
        </div>
      </div>

    </div>
    <br/><br/>
  </section>

    <?php /* Меню */
    include_once($_SERVER['DOCUMENT_ROOT']."/assets/amvc/widgets/menu.php");
    include_once($_SERVER['DOCUMENT_ROOT']."/assets/amvc/controller/router.php");
    include_once($_SERVER['DOCUMENT_ROOT']."/assets/amvc/footer.php");
    ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
    <script src="/js/jquery.flexslider.js"></script>
    <script src="/js/vue.js"></script>
    <script src="/js/chosen.jquery.js" type="text/javascript"></script>
    <script src="/js/prism.js" type="text/javascript" charset="utf-8"></script>
    <script src="/js/init.js" type="text/javascript" charset="utf-8"></script>
    <!-- JS APP -->
    <script src="/js/app/main.js"></script>
  </body>
</html>
