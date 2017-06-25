$(window).load(function(){
  $('.flexslider').flexslider({
    animation: "slide",
    controlsContainer: $(".custom-controls-container"),
    customDirectionNav: $(".custom-navigation a"),
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
});

jQuery(document).ready(function ($) {
    $('#menu-1').megaMenu({
        // DESKTOP MODE SETTINGS
        logo_align          : 'left',    // align the logo left or right. options (left) or (right)
        links_align         : 'left',    // align the links left or right. options (left) or (right)
        socialBar_align     : 'left',    // align the socialBar left or right. options (left) or (right)
        searchBar_align     : 'right',   // align the search bar left or right. options (left) or (right)
        trigger             : 'hover',   // show drop down using click or hover. options (hover) or (click)
        effect              : 'fade',    // drop down effects. options (fade), (scale), (expand-top), (expand-bottom), (expand-left), (expand-right)
        effect_speed        : 400,       // drop down show speed in milliseconds
        sibling             : true,      // hide the others showing drop downs if this option true. this option works on if the trigger option is "click". options (true) or (false)
        outside_click_close : true,      // hide the showing drop downs when user click outside the menu. this option works if the trigger option is "click". options (true) or (false)
        top_fixed           : false,     // fixed the menu top of the screen. options (true) or (false)
        sticky_header       : false,     // menu fixed on top when scroll down down. options (true) or (false)
        sticky_header_height: 200,       // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
        menu_position       : 'horizontal',    // change the menu position. options (horizontal), (vertical-left) or (vertical-right)
        full_width          : false,            // make menu full width. options (true) or (false)
        // MOBILE MODE SETTINGS
        mobile_settings     : {
            collapse            : true, // collapse the menu on click. options (true) or (false)
            sibling             : true,  // hide the others showing drop downs when click on current drop down. options (true) or (false)
            scrollBar           : true,  // enable the scroll bar. options (true) or (false)
            scrollBar_height    : 400,   // scroll bar height in px value. this option works if the scrollBar option true.
            top_fixed           : false, // fixed menu top of the screen. options (true) or (false)
            sticky_header       : false, // menu fixed on top when scroll down down. options (true) or (false)
            sticky_header_height: 200    // sticky header height top of the screen. activate sticky header when meet the height. option change the height in px value.
        }
    });
});

// register modal component
Vue.component('modal', {
  template: '#modal-template'
})

// start app
new Vue({
  el: '#app',
  data: {
    showModal: false
  }
})
