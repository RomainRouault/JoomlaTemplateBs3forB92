 var hauteur = 180;
 jQuery(function(){
   jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > hauteur) { 
            jQuery('#mainnav-scroll').show("slide", {direction: 'up'}, 500 );
      } 
     else {
            jQuery('#mainnav-scroll').hide("slide", {direction: 'up'}, 100 ); 
      }
   });
 });
