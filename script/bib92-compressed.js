jQuery(function(){jQuery(".container").css("opacity","0.3"),jQuery("body").css("background-color","white"),jQuery("#load").show(),function(){function e(){t||(t=!0,jQuery("#load").fadeOut("1000"),jQuery(".container").css("opacity","1"),jQuery("body").css("background-color","#f6edc2"))}var t=!1,r=!1;setTimeout(function(){e()},5e3),jQuery(window).load(function(){r=!0,e()})}()}),jQuery(window).load(function(){jQuery("#carte-iframe").length<=0||(jQuery(window).width()>640&&jQuery("#carte-iframe").attr("src","https://www.google.com/maps/d/embed?mid=1cwz8jL2qC1fS3m9t7qANeQuU_Js&hl=fr&z=12&ll=48.85212335976683%2C2.267794595581081"),jQuery(window).width()<640&&jQuery("#carte-iframe").attr("src","https://www.google.com/maps/d/embed?mid=1cwz8jL2qC1fS3m9t7qANeQuU_Js&hl=fr&z=11&ll=48.85212335976683%2C2.267794595581081"),jQuery(window).width()<395&&jQuery("#carte-iframe").attr("src","https://www.google.com/maps/d/embed?mid=1cwz8jL2qC1fS3m9t7qANeQuU_Js&hl=fr&z=10&ll=48.85212335976683%2C2.267794595581081"))});var hauteur=180;jQuery(function(){jQuery(window).scroll(function(){jQuery(this).scrollTop()>hauteur?jQuery("#mainnav-scroll").show("slide",{direction:"up"},500):jQuery("#mainnav-scroll").hide("slide",{direction:"up"},100)})}),jQuery(document).ready(function(){jQuery("#btn-twt-1").click(function(){jQuery("#more-tweet, #previous-tweet").hide(),jQuery("#grp-tweet1, #grp-tweet2").css("display","none"),jQuery("#twitter-likes").toggle("slide"),jQuery("#btn-twt-2").show(),jQuery(this).hide()}),jQuery("#btn-twt-2").click(function(){jQuery("#twitter-likes").toggle("slide"),jQuery(this).hide(),jQuery("#btn-twt-1, #more-tweet, #grp-tweet1, #grp-tweet1").show()}),jQuery("#more-tweet").click(function(){jQuery("#grp-tweet1").hide(),jQuery("#grp-tweet2").toggle("slide"),jQuery(this).hide(),jQuery("#previous-tweet, #all-tweet").show()}),jQuery("#previous-tweet").click(function(){jQuery("#grp-tweet1").toggle("slide"),jQuery("#grp-tweet2").hide(),jQuery(this,"#alltweet").hide(),jQuery("#more-tweet").show()})}),jQuery(function(){jQuery(".dropdown").on("show.bs.dropdown",function(e){jQuery(this).find(".dropdown-menu").first().stop(!0,!0).slideDown(300),jQuery(this).find(".caret").first().stop(!0,!0).toggleClass("active")}),jQuery(".dropdown").on("hide.bs.dropdown",function(e){e.preventDefault(),jQuery(this).find(".dropdown-menu").first().stop(!0,!0).slideUp(300,function(){jQuery(this).parent().removeClass("open")}),jQuery(this).find(".caret").first().stop(!0,!0).removeClass("active")})}),jQuery(function(){jQuery("#carte-content").click(function(){jQuery("#carte-content iframe").css("pointer-events","auto")}),jQuery("#carte-content").mouseleave(function(){jQuery("#carte-content iframe").css("pointer-events","none")})}),jQuery(function(){jQuery(".flatcal_todaycell > .flatcal_daylink").attr("title","Aujourd'hui - Pas d'évènements"),jQuery(".flatcal_daycell > .flatcal_daylink").attr("title","Pas d'évènement ce jour"),jQuery(".flatcal_daycell > .flatcal_busylink").attr("title","Un évènement ce jour - cliquez pour consulter sur l'agenda"),jQuery(".flatcal_todaycell > .flatcal_busylink").attr("title","Un évènement aujourd'hui - cliquez pour consulter sur l'agenda"),jQuery(".icon-envelope").attr("class","fa fa-envelope fa-2x"),jQuery("#nav-search a img").replaceWith('<i class="fa fa-search fa-2x" aria-hidden="true"></i>')});