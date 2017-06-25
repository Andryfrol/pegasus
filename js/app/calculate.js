/*
Калькулятор разсчета стоимости доставки
*/
(function(win, doc,$){
	var calculate = (function (){
		  /* TABS */
			function doCalc() {
        alert('go tracking');
      }

			function _removeActive(){
				$('*').removeClass('active');
			}

			function _addActive(id){
				$('#' + id).addClass('active');
			}

			function _selecToggle() {

			}

			function select(element) {
				// console.log(che);
				// console.dir(arguments);

				var clicked_id = element.id;
				_removeActive();
				_addActive(clicked_id);
			}

			/* TOCHNII */

			function gaborit() {
				if($('.tochnostposilki').css('display') == 'block')
				{
					$('.tochnostposilki').slideUp(111);
					$('#ob-ves').css('opacity','1');
					$('#ob-vol').css('opacity','1');
					$('.change-options-more').removeClass('active')
					$('#_finger1').css('top','18px');
				}
				else
				{
					$('.tochnostposilki').slideDown(111);
					$('#ob-ves').css('opacity','0');
					$('#ob-vol').css('opacity','0');
					$('.change-options-more').addClass('active')
					$('#_finger1').css('top','55px');

				}
				// console.log(x);
				// alert('class gaborit logic')
			}

			function otDo(element) {
				var ot = element.id;
				// alert(ot);
				switch (ot) {
					case 'otDveri':
						$('#span-radio-ot-pnkt').css('background-position','-2px 0px');
						$('#span-radio-ot-dver').css('background-position','-26px 0px');
						break;
					case 'otPuncta':
						$('#span-radio-ot-pnkt').css('background-position','-26px 0px');
						$('#span-radio-ot-dver').css('background-position','-2px 0px');
						break;
					case 'doPuncta':
						$('#span-radio-do-dver').css('background-position','-2px 0px');
						$('#span-radio-do-pnkt').css('background-position','-26px 0px');
						break;
					case 'doDveri':
						$('#span-radio-do-pnkt').css('background-position','-2px 0px');
						$('#span-radio-do-dver').css('background-position','-26px 0px');
						break;

					default:

				}
				console.log(ot);
			}

			function addNewLine() {
				alert('Добавить новую строку');
			}

			function getPrice() {
				alert('Получаем сумму и дополняем интерфейс логикой заявки')
			}

			return {
					doCalc: doCalc,
					select: select,
					gaborit: gaborit,
					otDo: otDo,
					addNewLine: addNewLine,
					getPrice: getPrice
  		};

	})();

	$(doc).ready(function(){
	console.log('Init calculate.js')
	});
	if(!win.calculate) win.calculate = calculate;
})(window, document,jQuery);
