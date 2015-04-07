jQuery(document).ready(function($) {

$('.gform_wrapper input').focus(function(){
	$(this).parents('.gfield').addClass('focused');
});

$('.gform_wrapper input').blur(function(){
	if ( $(this).val() == '' ){
		$(this).parents('.gfield').removeClass('focused');
	}
});

   		
	  
});



