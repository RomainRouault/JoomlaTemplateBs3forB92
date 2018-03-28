jQuery(function(){

jQuery(".container").css('opacity', '0.3');
jQuery("body").css('background-color', 'white');
jQuery("#load").show();


(function(){
var didDone = false;
function done() {
    //Prevent multiple done calls.
    if(!didDone)
    {
        didDone = true;
        //Loading completion functionality here.
        jQuery("#load").fadeOut("1000");
        jQuery(".container").css('opacity', '1');
        jQuery("body").css('background-color', '#f6edc2');        }
}
//Variables to keep track of state.
var loaded = false;

//The maximum timeout.
setTimeout(function(){
    //Max timeout fire done.
    done();
}, 5000);

//Bind the load listener.
jQuery(window).load(function(){
    loaded = true;
    done();
});
})();;

});