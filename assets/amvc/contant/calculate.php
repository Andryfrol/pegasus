<div class="container">
  <div class="row pad-top-3">
    <div class="col-xs-4 maxi">
      <div class="white-bg-round shadow" style="padding-bottom: 0px; margin-bottom: 20px;">
        <img src="/images/deushka.png" alt="">

      </div>
      <?php /* Статус груза/заявки */
      include_once($_SERVER['DOCUMENT_ROOT']."/assets/amvc/widgets/cargo_status.php");
      ?>
    </div>
    <div class="col-xs-8">
      <div class="white-bg-round shadow" id="delivery-form">
        <div class="" style="position: absolute; bottom: 55px; left: 45px;">
          <span class="light-red-color">*</span>&nbsp; обязательные поля
        </div>
        <h3 class="color-blue bold open-sans h3-cost">Заявка калькулятор</h3>
        <div class="delivery-type">
          <ul class="delivery-spsb">
            <li class="active _first" onclick="calculate.select(this)" id="auto-li">
              <img class="gal_" src="/images/icons/check-ok.png" alt="" style="position:absolute; left: 12px; top: 15px;">
              Автоперевозки
            </li>
            <li class="" onclick="calculate.select(this)" id="avia-li">
              <img class="gal_" src="/images/icons/check-ok.png" alt="" style="position:absolute; left: 12px; top: 15px;">
              Авиа
            </li>
            <li class="" onclick="calculate.select(this)" id="parom-li">
              <img class="gal_" src="/images/icons/check-ok.png" alt="" style="position:absolute; left: 12px; top: 15px;">
              Паром
            </li>
            <li class="_last" onclick="calculate.select(this)" id="rjd-li">
              <img class="gal_" src="/images/icons/check-ok.png" alt="" style="position:absolute; left: 12px; top: 15px;">
              ЖД
            </li>
          </ul>
        </div>
        <div class="color-blue" style="margin-top: 20px;">
          <div class="inlineb min-250">
            <h5 class="color-blue open-sans bold h3-cost">Пункт отправления <span>*</span></h5>
          </div>
          <div class="inlineb form-delivery-toper" style="margin-left: 20px;">
             <!-- <em>Into This</em> -->
             <select data-placeholder="Выбирите город отправления" class="chosen-select" tabindex="2">
               <option value=""></option>
               <?
               $select_rus_city = "SELECT * FROM city WHERE country_id='3159' ORDER BY name ASC";
               $databaseconnect = new database;
               $db = $databaseconnect->connect();
               $result = mysqli_query($db, $select_rus_city);
               // $like = $result->fetch_assoc();
               while ($row = mysqli_fetch_assoc($result)) {
                 $name = $row['name'];
                 ?>
                  <option value="<?=$name?>"><?=$name?></option>
                 <?
               }
               ?>
             </select>
            <!-- <input type="text" placeholder="Город выбираем или предлагаем при вводе??"  class="toll-form" name="" value=""> -->
          </div>
        </div>
        <div class="ot-do">
          <ul>
            <li onClick="calculate.otDo(this)" id="otDveri">
              <div class="inlineb" id="span-radio-ot-dver"></div>
              <div class="inlineb bold small-blue">от двери</div>
            </li>
            <li  onClick="calculate.otDo(this)" id="otPuncta" style="margin-left: 15px;">
              <div class="inlineb" id="span-radio-ot-pnkt"></div>
              <div class="inlineb bold small-blue">от пункта приема</div>
            </li>
          </ul>
        </div>
        <div class="" style="margin-top: 20px;">
          <div class="inlineb min-250">
            <h5 class="color-blue open-sans bold h3-cost">Пункт назначения <span>*</span></h5>
          </div>
          <div class="inlineb form-delivery-toper" style="margin-left: 20px;">
            <!-- <em>Into This</em> -->
            <select data-placeholder="Выбирите город назначения" class="chosen-select" tabindex="2">
              <option value=""></option>
              <?
              $select_rus_city = "SELECT * FROM city WHERE country_id='3159' ORDER BY name ASC";
              $databaseconnect = new database;
              $db = $databaseconnect->connect();
              $result = mysqli_query($db, $select_rus_city);
              // $like = $result->fetch_assoc();
              while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                ?>
                 <option value="<?=$name?>"><?=$name?></option>
                <?
              }
              ?>
            </select>
          </div>
        </div>
        <div class="ot-do">
          <ul>

            <li onClick="calculate.otDo(this)" class="bold small-blue" id="doDveri">
              <div class="inlineb" id="span-radio-do-dver"></div>
              <div class="inlineb bold small-blue">до двери</div>
            </li>
            <li onClick="calculate.otDo(this)"  style="margin-left: 15px;" id="doPuncta">
              <div class="inlineb" id="span-radio-do-pnkt"></div>
              <div class="inlineb bold small-blue">до пункта приема</div>
            </li>
          </ul>
        </div>
        <div class="ves-posilki-div">
          <div class="inlineb min-250">
            <h5 class="color-blue open-sans bold h3-cost">Вес отправки, КГ</h5>
          </div>
          <div class="inlineb form-delivery-toper" style="margin-left: 20px;">
            <input type="text" class="toll-form" name="" id="ob-ves" value="">
          </div>
        </div>
        <div class="">
          <div class="inlineb min-250">
            <h5 class="color-blue open-sans bold h3-cost">Объем отправки, M3</h5>
          </div>
          <div class="inlineb form-delivery-toper" style="margin-left: 20px;">
            <input type="text" class="toll-form" name="" id="ob-vol" value="">
          </div>
        </div>
        <div class="" style="margin-bottom: 20px;">
          <div class="inlineb min-250">
            <h5 class="color-blue open-sans bold h3-cost">Объявленная ценность, руб</h5>
          </div>
          <div class="inlineb form-delivery-toper" style="margin-left: 15px;">
            <input type="text" class="toll-form" name="" value="">
          </div>
        </div>
        <div class="" style="padding: 0;">
          <div>
              <h5 onclick="calculate.gaborit()" class="color-blue open-sans h3-cost change-options-more bold" style="overflow: hidden; position: relative;">Задать габариты для точного разсчета
                <img id="_finger1" src="/images/icons/siteicons17044.png" alt="" style="position: absolute; right: 392px; top: 18px;" width="16">
              </h5>
          </div>
          <div style="margin-left: -10px; margin-right: -10px; margin-top: -10px;">
            <div class="tochnostposilki" style="padding-left: 20px;">
              <div class="tochnoknipki">
                <!-- <div class="inlineb" id="addNewPosilka">
                  Добавить посылку
                </div>
                <div class="inlineb" id="delAllPosilki" style="float: right;">
                  Удалить все посылки
                </div>
                <div class="" style="clear: both;">

                </div> -->
              </div>
              <div class="inlineb" style="margin-left: -10px;">
                Вес, кг<span class="redspan">*</span>&nbsp;
                <input type="text" id="ves-is" name="" value="">
              </div>
              <div class="inlineb">
                Длина, см<span class="redspan">*</span>&nbsp;
                <input type="text" id="dlinna-is" name="" value="">
              </div>
              <div class="inlineb">
                Ширина, см<span class="redspan">*</span>&nbsp;
                <input type="text" id="shirina-is" name="" value="">
              </div>
              <div class="inlineb">
                Высота, см<span class="redspan">*</span>&nbsp;
                <input type="text" id="visota-is" name="" value="">
              </div>
              <div class="inlineb">
                Кол-во<span class="redspan">*</span>&nbsp;
                <input type="text" id="kolvo-is" name="" value="">
              </div>
              <div class="inlineb" id="pluser-posilok" onclick="calculate.addNewLine(this)">
                +
              </div>
            </div>
          </div>
        </div>


        <div class="" id="calcprice">
          Рассчитать
        </div>
      </div>
      <br>
    </div>
  </div>
</div>
