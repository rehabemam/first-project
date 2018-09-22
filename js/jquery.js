

$( document ).ready(function() {
    console.log( "ready!" );
	if(window.innerWidth > 560) {
    $("#doctorShow").delay(2000).fadeIn( "fast"
    ,function(){
         $("#doctorShow").css( "transform", "scale(1,1)" );
    $("#doctorShow").css( "-webkit-transform", "scale(1,1)" );
    $("#doctorShow").css( "-moz-transform", "scale(1,1)" );
    });
	$("#girlShow").delay(1000).fadeIn( "fast"
    ,function(){
         $("#girlShow").css( "transform", "scale(1,1)" );
    $("#girlShow").css( "-webkit-transform", "scale(1,1)" );
    $("#girlShow").css( "-moz-transform", "scale(1,1)" );
    });
	$("#contentShowh1").delay(1000).fadeIn( "fast"
    ,function(){
         $("#contentShowh1").css( "transform", "scale(1,1)" );
    $("#contentShowh1").css( "-webkit-transform", "scale(1,1)" );
    $("#contentShowh1").css( "-moz-transform", "scale(1,1)" );
    });
	$("#contentShowh3").delay(2000).fadeIn( "fast"
    ,function(){
         $("#contentShowh3").css( "transform", "scale(1,1)" );
    $("#contentShowh3").css( "-webkit-transform", "scale(1,1)" );
    $("#contentShowh3").css( "-moz-transform", "scale(1,1)" );
    });
	$("#appoint").delay(3000).fadeIn( "fast"
    ,function(){
         $("#appoint").css( "transform", "scale(1,1)" );
    $("#appoint").css( "-webkit-transform", "scale(1,1)" );
    $("#appoint").css( "-moz-transform", "scale(1,1)" );
    });
	$("#consultant").delay(3700).fadeIn( "fast"
    ,function(){
         $("#consultant").css( "transform", "scale(1,1)" );
    $("#consultant").css( "-webkit-transform", "scale(1,1)" );
    $("#consultant").css( "-moz-transform", "scale(1,1)" );
    });
	
	
	
	
	
	
	
	}
	
	
	/*$(window).scroll(function () {
if ($(window).scrollTop() >= 50) {
$('#nav').css('background','rgba(66,99,93)');
} else {
$('#nav').css('background','rgba(66,99,93,.45)');
}
});*/




});
