// var activeTab = document.location.href.split('?')[1];
// if (activeTab == "#term") {
// 	$("#terms-tab").addClass('disc-active');
// } 
// else if (activeTab == "#priv") {
// 	$("#privacy-tab").addClass('disc-active');
// }
// else {
// 	$("#disclaimer-tab").addClass('disc-active');
// }

$( document ).ready(function(){
	//  Real Estate Popup
	$('#real-more').click(function(e){
		e.preventDefault();
		var popupHeight = $(".divi-main").height();
		// $('body').animate({scrollTop:0}, 5000, 'swing');
		$("#realestate-banner").css({"display" : "flex"});
		window.scrollTo("0", "0");
		$("#realestate-banner").animate({"right": "0", "height":popupHeight}, 500);
	});
	$('#real-back').click(function(e){
		e.preventDefault();
		$("#realestate-banner").animate({"right": "-200%", "height": "auto"}, 500);
		$("#realestate-banner").fadeOut();
		// $("#realestate-banner").fadeOut()l
	});
	// Construction popup
	$('#const-more').click(function(e){
		e.preventDefault(e);
		var popupHeight = $(".divi-main").height();
		$("#contruct-banner").css({"display" : "flex"});
		$("#contruct-banner").animate({"right": "0", "height":popupHeight}, 500);
	});
	$('#const-back').click(function(e){
		e.preventDefault();
		$("#contruct-banner").animate({"right": "-200%", "height": "auto"}, 500);
		$("#contruct-banner").fadeOut();
	});
	// Entertainment popup
	$('#ent-more').click(function(e){
		e.preventDefault(e);
		var popupHeight = $(".divi-main").height();
		$("#enter-banner").css({"display" : "flex"});
		$("#enter-banner").animate({"right": "0", "height":popupHeight}, 500);
	});
	$('#ent-back').click(function(e){
		e.preventDefault();		
		$("#enter-banner").animate({"right": "-200%", "height": "auto"}, 500);
		$("#enter-banner").fadeOut();
	});

	// Career page popup
	$("#resume-send").click(function(e){
		e.preventDefault();
		window.scrollTo("0", "0");
		var popupHeight = $("#career-overlays").height();
		var docHeight = $(document).height();
		// popupHeight -= "50";
		$("#career-overlays").show();
		$(".site").css({"max-height":docHeight, "overflow-y": "hidden"});
		$(".career-form").css({"height" : docHeight });
		$("#career-overlays").animate({"right": "0", "top": "0"}, 1000);
		$("#career-cancel").css({"min-height":popupHeight});
	});
	$("#career-cancel").click(function(e){
		e.preventDefault();
		$("#career-overlays").animate({"right": "-200%", "top": "0"}, 1000);
		$("#career-overlays").fadeOut();
		$(".site").css({"overflow-y": "visible", "max-height":"100%"});
		$('body').css({"background-attachment": "fixed"});		
	});

	// Contact Page Popup
	$("#click-contact").click(function(e){
		e.preventDefault();
		window.scrollTo("0", "0");
		var popupHeight = $(".contact-pop-up").height();
		var docHeight = $(document).height();
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
	var activeTab = document.location.href.split('?')[1];
	if (activeTab == "#term") {
		showTerms();
	} 
	else if (activeTab == "#priv") {
		showPrivacy();
	}
	else {
		showDisclaimer();
	}
	$("#disclaimer-tab").click(function(e){
		e.preventDefault();
		showDisclaimer();
	});
	$("#terms-tab").click(function(e){
		e.preventDefault();
		showTerms();
		
	});
	$("#privacy-tab").click(function(e){
		e.preventDefault();
		showPrivacy();		
	});
});

function showDisclaimer(){
	$("#disclaimer-tab").addClass('disc-active');
	$("#terms-tab, #privacy-tab").removeClass('disc-active');
	$('#terms, #privacy').hide();
	$('#disclaimer').show();
}
function showPrivacy(){
	$("#privacy-tab").addClass('disc-active');
	$("#terms-tab, #disclaimer-tab").removeClass('disc-active');
	$('#terms, #disclaimer').hide();
	$('#privacy').show();
}
function showTerms(){
	$("#terms-tab").addClass('disc-active');
	$("#disclaimer-tab, #privacy-tab").removeClass('disc-active');
	$('#disclaimer, #privacy').hide();
	$('#terms').show();
}