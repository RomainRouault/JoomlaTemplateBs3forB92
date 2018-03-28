jQuery(function(){


    jQuery('#carte-content').click(function () {
    jQuery('#carte-content iframe').css("pointer-events", "auto");
});

jQuery( '#carte-content' ).mouseleave(function() {
  jQuery('#carte-content iframe').css("pointer-events", "none"); 
});

});