jQuery(function(){

jQuery('.dropdown').on('show.bs.dropdown', function(e){
  jQuery(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
  jQuery(this).find('.caret').first().stop(true, true).toggleClass('active');
});

jQuery('.dropdown').on('hide.bs.dropdown', function(e){
  e.preventDefault();
    jQuery(this).find('.dropdown-menu').first().stop(true, true).slideUp(300, function(){
    jQuery(this).parent().removeClass('open');
  });   
    jQuery(this).find('.caret').first().stop(true, true).removeClass('active');
});

});