jQuery(function($){
  "use strict";
  jQuery('.main-menu-navigation > ul').superfish({
    delay:       0,                            
    animation:   {opacity:'show',height:'show'},  
    speed:       'fast'                        
  });
});

// scroll
jQuery(document).ready(function () {
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 0) {
        jQuery('#scroll-top').fadeIn();
    } else {
        jQuery('#scroll-top').fadeOut();
    }
  });
  jQuery(window).on("scroll", function () {
    document.getElementById("scroll-top").style.display = "block";
  });
  jQuery('#scroll-top').click(function () {
    jQuery("html, body").animate({
        scrollTop: 0
    }, 600);
    return false;
  });

  advance_ecommerce_store_MobileMenuInit();
});

(function( $ ) {

  $(window).scroll(function(){
    var sticky = $('.sticky-header'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed-header');
    else sticky.removeClass('fixed-header');
  });

})( jQuery );

jQuery(function($){
  $(window).load(function() {
    $("#loader-wrapper").delay(1000).fadeOut("slow");
      $("#loader").delay(1000).fadeOut("slow");
  })
});

// preloader
jQuery(function($){
    setTimeout(function(){
        $("#loader-wrapper").delay(1000).fadeOut("slow");
    });
});

function advance_ecommerce_store_MobileMenuInit() {

  /* First and last elements in the menu */
  var advance_ecommerce_store_firstTab = jQuery('.main-menu-navigation ul:first li:first a');
  var advance_ecommerce_store_lastTab  = jQuery('a.closebtn'); /* Cancel button will always be last */

  jQuery(".mobiletoggle").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery("#res-sidebar").show().animate({width: "100%", opacity: 1}, 200);
    jQuery('body').addClass("noscroll");
    advance_ecommerce_store_firstTab.focus();
  });

  jQuery("a.closebtn").click(function(e){
    e.preventDefault();
    e.stopPropagation();
    jQuery("#res-sidebar").hide().animate({width: "0%", opacity: 0},200);
    jQuery('body').removeClass("noscroll");
    jQuery(".mobiletoggle").focus();
  });

  /* Redirect last tab to first input */
  advance_ecommerce_store_lastTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('noscroll'))
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      advance_ecommerce_store_firstTab.focus();
    }
  });

  /* Redirect first shift+tab to last input*/
  advance_ecommerce_store_firstTab.on('keydown', function (e) {
    if (jQuery('body').hasClass('noscroll'))
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      advance_ecommerce_store_lastTab.focus();
    }
  });

  /* Allow escape key to close menu */
  jQuery('#res-sidebar').on('keyup', function(e){
    if (jQuery('body').hasClass('noscroll'))
    if (e.keyCode === 27 ) {
      jQuery('body').removeClass('noscroll');
      advance_ecommerce_store_lastTab.focus();
    };
  });
}