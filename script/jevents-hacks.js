
jQuery(function(){

//========== Minicalendar title (changer tooltip) =========//

//attribut title du jour d'aujourd'hui sans évènement
jQuery('.flatcal_todaycell > .flatcal_daylink').attr('title', 'Aujourd\'hui - Pas d\'évènements');

//attribut title du jour courant sans évènement
jQuery('.flatcal_daycell > .flatcal_daylink').attr('title', 'Pas d\'évènement ce jour');

//attribut title du jour courant avec évènement
jQuery('.flatcal_daycell > .flatcal_busylink').attr('title', 'Un évènement ce jour - cliquez pour consulter sur l\'agenda');

//attribut title d'aujourd'hui avec évènement
jQuery('.flatcal_todaycell > .flatcal_busylink').attr('title', 'Un évènement aujourd\'hui - cliquez pour consulter sur l\'agenda');

//===== Calendrier switch icones jevents avec icones FA =====//

//icone mail
jQuery('.icon-envelope').attr('class', 'fa fa-envelope fa-2x');

//icone recherche
jQuery('#nav-search a img').replaceWith('<i class="fa fa-search fa-2x" aria-hidden="true"></i>');

});