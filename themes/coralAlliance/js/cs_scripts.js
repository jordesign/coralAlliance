jQuery(document).ready(function($) {

$('.gform_wrapper input').focus(function(){
	$(this).parents('.gfield').addClass('focused');
});

$('.gform_wrapper input').blur(function(){
	if ( $(this).val() == '' ){
		$(this).parents('.gfield').removeClass('focused');
	}
});
$('.gform_wrapper input').each(function(){
	if ( $(this).val() != '' ){
		$(this).parents('.gfield').addClass('focused');
	}
});

//Calculate the width/height of the progress bar
petitionPercent = $('.signatureBar').attr('data-signperc');
if ($(window).width() < 760) {
   $('.signatureBar').css('width', petitionPercent + '%' );
}
else {
	petitionHeight = 100 - petitionPercent
   $('.signatureBar').css('top', petitionHeight + '%' );
   $('.signatureLabel').css('top', petitionHeight + '%' );


}

   		
	  
});



