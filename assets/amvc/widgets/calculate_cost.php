<script type="text/javascript">

  $(document).ready(function() {
    $('input[type=radio][name=cost_vol]').change(function() {
        if (this.value == '1') {
            costClass.changeValue(1);
        }
        else if (this.value == '2') {
          costClass.changeValue(2);
        }
    });
  });
  /* Класс Рассчет стоимости */
  (function(win, doc,$){
  	var costClass = (function (){

  			function changeValue(vol_or_gab){
          switch (vol_or_gab) {
            case 1:
              $('.cost_helper1').css('opacity','0');
              $('.cost_is_vol').css('font-weight', 'bold');
              $('.gabariti_is').css('font-weight', 'normal');
              $('#cost_vol').click();
              break;
            case 2:
              $('.cost_helper1').css('opacity','1');
              $('.gabariti_is').css('font-weight', 'bold');
              $('.cost_is_vol').css('font-weight', 'normal');
              $('#cost_gab').click();
              break;

            default:

          }
          // alert('change')
  			}

    		return {
  					changeValue: changeValue
    		};
  	})();

  	$(doc).ready(function(){
  	   console.log('Init costClass')
  	});
  	if(!win.costClass) win.costClass = costClass;
  })(window, document,jQuery);

  // IF click radio BTN

  // IF click lable ->
</script>
<div class="white-bg-round shadow " style="padding-bottom: 5px;">
  <h3 class="color-blue open-sans h3-cost">
    Заявка-калькулятор
    <span class="pointer" style="float: right; margin-top: -2px;"><img src="/img/FAQ.png" alt="" width="24"></span>
  </h3>
  <div class="cost_cities">
    <div class="inli cost_city_in">
      <a href="#" onClick="$('#show-modal').click()">Москва</a>
    </div>
    <div class="inli cost_transfer">
      <img src="/img/transfer.png" alt="" width="16">
    </div>
    <div class="inli cost_city_to">
      <a href="#" onClick="$('#show-modal').click()">Калининград</a>
    </div>
  </div>
  <div class="cost_vol">
    <div class="">
      <div class="cost_vol_in">
        <div class="inli" style="padding-left: 0px; padding-top: 10px; padding-bottom: 5px;">
          <a href="/заявка-калькулятор" class="btn btn-primary cost_calculate bg-blue open-sans border-r2">
            Рассчтитать
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
