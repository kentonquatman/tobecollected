var Site = window.Site || {};
(function($) {
  $(function() {

    // PLACEHOLDER
    $('input, textarea').placeholder();
    
    // SLIDE TOGGLE
    
    $('.nav-toggle').click(function(){
      $('.site-header__collections ol').slideToggle();
    });

  });
})(jQuery);