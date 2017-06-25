<!-- app -->
<div id="app">
  <div class="cities-name pad-top-1">
    <h4 style="cursor: default;" class="color-blue counter city-name-header open-sans" id="show-modal"><span class="pointer" @click="showModal = true">Москва</span></h4>
  </div>
  <div class="">
    <span class="border-dash-bottom pointer open-sans"  id="show-modal" @click="showModal = true"><small>сменить город</small></span>
  </div>

<div class="" style="">

<script type="text/x-template" id="modal-template">
  <transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container" style="position: relative; width: 555px; ">

          <div class="" style="border-bottom: 1px solid #ebebeb; padding-bottom: 15px;">
            <slot name="header">
              <h3 class="open-sans" style="color: #284d5d; margin-top: 20px;">Выбирите город</h3>
            </slot>
            <span style="position: absolute; top: 14px; right: 12px;">
              <img class="pointer modal-default-button" @click="$emit('close')" src="/img/circle_delete.png" width="19"/>
            </span>
          </div>

          <div class="modal-body" style="min-height: 300px;">
            <div style="width: 400px;">
            </div>
            <slot name="body">
              Тут надо решить как будут города выбираться
              <!-- <input class="" type="text" placeholder="Введите имя своего города" style="padding: 4px 11px; height: 44px; width: 100%; font-size: 16px;"/> -->
            </slot>
          </div>

          <div class="modal-footer">
            <slot name="footer">
              <button class="modal-default-button btn btn-default open-sans border-r2" @click="$emit('close')" style="height: 44px; margin-right: -15px;">
                Закрыть
              </button>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>
</script>
  <modal v-if="showModal" @close="showModal = false" id="city_modal_contant">

  </modal>
</div>


</div>
