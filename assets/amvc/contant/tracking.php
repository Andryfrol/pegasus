<?
// if get postment =>
//
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

$numPost = '';
$numPost_tmp = split('postment=', $_SERVER['REQUEST_URI']);
$numPost = $numPost_tmp[1];
// echo $numPost;
?>
<br>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="white-bg-round shadow" style="margin-bottom: 10px; margin-top: 10px; min-height: 300px;">
          <h3 class="color-blue open-sans h3-cost" style="padding-left: 20px; padding-top: 15px;">
            Отслеживание груза
            <!-- <a href="/отследить-груз">
              обновить страницу
            </a> -->
          </h3>

        <div class="" style="padding: 10px 20px; padding-top: 20px;">
          <input placeholder="Укажите номер отправления" style="min-width: 333px; padding: 7px 16px; padding-left: 7px;" type="text" name="" value="<?=$numPost?>">
        </div>
        <div class="btn btn-primary bg-blue" style="margin-left: 20px; margin-left: 220px; min-width: 133px; border-radius: 2px; margin-top: 10px;">
          Показать где
        </div>
        <br><br>
        <div class="" style="padding: 20px;">
          LOADER + RESULT 
        </div>
        <br>
      </div>
      <br>
    </div>
  </div>
</div>
