jQuery(document).ready(function($) {

$('.gform_wrapper input').focus(function(){
	$(this).parents('.gfield').addClass('focused');
});

$('.gform_wrapper input').blur(function(){
	if ( $(this).val() == '' ){
		$(this).parents('.gfield').removeClass('focused');
	}
});

//Calculate the width/height of the progress bar
petitionPercent = $('.signatureBar').attr('data-signperc');
if ($(window).width() < 720) {
   $('.signatureBar').css('width', petitionPercent + '%' );
}
else {
	petitionHeight = 100 - petitionPercent
   $('.signatureBar').css('top', petitionHeight + '%' );
   $('.signatureLabel').css('top', petitionHeight + '%' );
}

   		
	  
});



