jQuery(document).ready(function(e){e(".gform_wrapper input").focus(function(){e(this).parents(".gfield").addClass("focused")});e(".gform_wrapper input").blur(function(){e(this).val()==""&&e(this).parents(".gfield").removeClass("focused")});petitionPercent=e(".signatureBar").attr("data-signperc")+"%";e(window).width()<720&&e(".signatureBar").css("width",petitionPercent)});