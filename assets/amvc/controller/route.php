<?php
$page_is = $_GET['page'];
$last_page = $_SERVER['HTTP_REFERER'];
// $_SERVER['HTTP_HOST']; // адрес сайта
// протокол
// if $_SERVER['HTTP_UPGRADE_INSECURE_REQUESTS'] == 1 ~ https
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

// /%D0%B7%D0%B0%D1%8F%D0%B2%D0%BA%D0%B0-%D0%BA%D0%B0%D0%BB%D1%8C%D0%BA%D1%83%D0%BB%D1%8F%D1%82%D0%BE%D1%80
switch ($page_is) {

  // doc1 = документы на отправку
  case 'doc1':
    $active_doc1 = 'active';
    $title = "Документы на отправку";
    $pg_cont = "/assets/amvc/contant/doc1.php";
    break;

  case 'service':
    $active_service = 'active';
    $title = "Услуги транспортной компании Пегас Груп";
    $pg_cont = "/assets/amvc/contant/service.php";
    break;


  case 'vacancy':
    $active_vacancy = 'active';
    $title = "Вакансии";
    $pg_cont = "/assets/amvc/contant/vacancy.php";
    break;

  case 'tracking':

    $active_tracking = 'active';
    $title = "Отслеживание груза Pegas Group";
    $pg_cont = "/assets/amvc/contant/tracking.php";
    break;


  case 'calculate':
    $active_calculate = 'active';
    $title = "Заявка-калькулятор";
    $pg_cont = "/assets/amvc/contant/calculate.php";
    break;

  case 'company':
    $active_company = 'active';
    $title = "О компании";
    $pg_cont = "/assets/amvc/contant/company.php";
    break;


  case 'cabinet':
    $active_cabinet = 'active';
    $title = "Личный кабинет";
    $pg_cont = "/assets/amvc/controller/user/cabinet.php";
    break;


  default:
    $title = "Пегас - грузоперевозки по России";
    $active_index = 'active';
    $pg_cont = "/assets/amvc/contant/index.php";
    break;
}
?>
