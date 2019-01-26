$( document ).ready(function(){
	//  Real Estate Popup
	$('#real-more').click(function(e){
		e.preventDefault();
		var popupHeight = $(".divi-main").height();
		window.scrollTo("0", "0");
		// $("#realestate-banner").show();
		$("#realestate-banner").animate({"right": "0", "height":popupHeight}, 500);
	});
	$('#real-back').click(function(e){
		e.preventDefault();
		$("#realestate-banner").animate({"right": "-200%", "height": "auto"}, 500);
		// $("#realestate-banner").fadeOut()l
	});
	// Construction popup
	$('#const-more').click(function(e){
		e.preventDefault(e);
		var popupHeight = $(".divi-main").height();
		$("#contruct-banner").animate({"right": "0", "height":popupHeight}, 500);
	});
	$('#const-back').click(function(e){
		e.preventDefault();
		$("#contruct-banner").animate({"right": "-200%", "height": "auto"}, 500);
	});
	// Entertainment popup
	$('#ent-more').click(function(e){
		e.preventDefault(e);
		var popupHeight = $(".divi-main").height();
		$("#enter-banner").animate({"right": "0", "height":popupHeight}, 500);
	});
	$('#ent-back').click(function(e){
		e.preventDefault();
		$("#enter-banner").animate({"right": "-200%", "height": "auto"}, 500);
	});

	// Career page popup
	$("#resume-send").click(function(e){
		e.preventDefault();
		window.scrollTo("0", "0");
		var popupHeight = $("#career-overlays").height();
		popupHeight -= "50";
		$(".site").css({"max-height":popupHeight, "overflow-y": "hidden"});
		$("#career-overlays").animate({"right": "0", "top": "0"}, 1000);
		$("#career-cancel").css({"min-height":popupHeight});
	});
	$("#career-cancel").click(function(e){
		e.preventDefault();
		$("#career-overlays").animate({"right": "-100%", "top": "0"}, 1000);
		$(".site").css({"overflow-y": "visible"});
	});

	// Contact Page Popup
	$("#click-contact").click(function(e){
		e.preventDefault();
		window.scrollTo("0", "0");
		var popupHeight = $(".contact-pop-up").height();
		var docHeight = $(document).height()
		$(".contact-pop-up").show();
		$(".site").css({"max-height":docHeight, "overflow-y": "hidden"});
		$('body').css({"background-attachment": "scroll"});
		$(".contact-popup-back").css({"height" : docHeight });
		$(".contact-pop-up").animate({"right": "0", "top": "0"}, 1000);
		$("#career-cancel").css({"min-height":popupHeight});
	});
	$("#contact-left").click(function(e){
		e.preventDefault();
		$(".contact-pop-up").animate({"right": "-200%", "top": "0"}, 1000);
		$(".contact-pop-up").fadeOut();
		$(".site").css({"overflow-y": "visible", "max-height":"100%"});
		$('body').css({"background-attachment": "fixed"});
	});

	// Disclaimer Page
	$("#disclaimer-tab").click(function(e){
		e.preventDefault();
		$(this).addClass('disc-active');
		$("#terms-tab, #privacy-tab").removeClass('disc-active');
		$('#terms, #privacy').hide();
		$('#disclaimer').show();
	});
	$("#terms-tab").click(function(e){
		e.preventDefault();
		$(this).addClass('disc-active');
		$("#disclaimer-tab, #privacy-tab").removeClass('disc-active');
		$('#disclaimer, #privacy').hide();
		$('#terms').show();
	});
	$("#privacy-tab").click(function(e){
		e.preventDefault();
		$(this).addClass('disc-active');
		$("#terms-tab, #disclaimer-tab").removeClass('disc-active');
		$('#terms, #disclaimer').hide();
		$('#privacy').show();
	});
});