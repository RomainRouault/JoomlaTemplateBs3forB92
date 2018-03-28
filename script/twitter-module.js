jQuery(document).ready(function() {
    jQuery('#btn-twt-1').click(function() {
        jQuery('#more-tweet, #previous-tweet').hide();    
        jQuery('#grp-tweet1, #grp-tweet2').css('display', 'none');
        jQuery('#twitter-likes').toggle("slide");
        jQuery('#btn-twt-2').show();
        jQuery(this).hide();
    });

    jQuery('#btn-twt-2').click(function() {
        jQuery('#twitter-likes').toggle("slide");
        jQuery(this).hide();
        jQuery('#btn-twt-1, #more-tweet, #grp-tweet1, #grp-tweet1').show();
    });

    jQuery('#more-tweet').click(function() {
        jQuery('#grp-tweet1').hide();
        jQuery('#grp-tweet2').toggle("slide");
        jQuery(this).hide();
        jQuery('#previous-tweet, #all-tweet').show();    
    });

    jQuery('#previous-tweet').click(function() {
        jQuery('#grp-tweet1').toggle("slide");
        jQuery('#grp-tweet2').hide();
        jQuery(this, '#alltweet').hide();
        jQuery('#more-tweet').show();
    });

});