jQuery(document).ready(function() {
 
 if (jQuery(window).width() < 640) {
   jQuery('#carte-iframe').attr('src', 'https://www.google.com/maps/d/embed?mid=1cwz8jL2qC1fS3m9t7qANeQuU_Js&hl=fr&z=11&ll=48.85212335976683%2C2.267794595581081');
}

 if (jQuery(window).width() < 395) {
   jQuery('#carte-iframe').attr('src', 'https://www.google.com/maps/d/embed?mid=1cwz8jL2qC1fS3m9t7qANeQuU_Js&hl=fr&z=10&ll=48.85212335976683%2C2.267794595581081');
}

});
