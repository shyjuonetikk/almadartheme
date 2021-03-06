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
		$("#realestate-banner").css({"display" : "flex"});
		$("html, body").animate({ scrollTop: "0" },500);
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
		e.preventDefault();
		var popupHeight = $(".divi-main").height();
		$("#contruct-banner").css({"display" : "flex"});
		$("html, body").animate({ scrollTop: "0" },500);
		$("#contruct-banner").animate({"right": "0", "height":popupHeight}, 500);
	});
	$('#const-back').click(function(e){
		e.preventDefault();
		$("#contruct-banner").animate({"right": "-200%", "height": "auto"}, 500);
		$("#contruct-banner").fadeOut();
	});
	// Entertainment popup
	$('#ent-more').click(function(e){
		e.preventDefault();
		var popupHeight = $(".divi-main").height();
		$("#enter-banner").css({"display" : "flex"});
		$("html, body").animate({ scrollTop: "0" },500);
		$("#enter-banner").animate({"right": "0", "height":popupHeight}, 500);
	});
	$('#ent-back').click(function(e){
		e.preventDefault();		
		$("#enter-banner").animate({"right": "-200%", "height": "auto"}, 500);
		$("#enter-banner").fadeOut();
	});

	// Career page popup - Send your Resume button
	$("#resume-send").click(function(e){
		e.preventDefault();
		window.scrollTo("0", "0");
		var popupHeight = 0;
		var docHeight = 0;
		popupHeight = $(".career-form").height();
		popupHeight += 50;
		var docHeight = $(window).height();
		if(popupHeight < docHeight){
			popupHeight = docHeight;
		}
		$("#apply-role").hide();
		$("#apply-function").show();
		$("#career-overlays").show();
		$(".site").css({"max-height":popupHeight, "overflow-y": "hidden"});
		$(".career-form").css({"min-height" : popupHeight });
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


	// Career page - Apply button send resume

	$("#apply-btn a").click(function(e){
		e.preventDefault();
		var role = $(this).data('role');
		$("#career-role").val(role);
		window.scrollTo("0", "0");
		var popupHeight = 0;
		var docHeight = 0;
		popupHeight = $(".career-form").height();
		popupHeight += 50;
		var docHeight = $(window).height();
		if(popupHeight < docHeight){
			popupHeight = docHeight;
		}
		$("#career-overlays").show();
		$("#apply-role").css({"display":"flex"});
		$("#apply-function").hide();
		$(".site").css({"max-height":popupHeight, "overflow-y": "hidden"});
		$(".career-form").css({"min-height" : popupHeight });
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
		var popupHeight = 0;
		var docHeight = 0;
		popupHeight = $(".contact-pop-up").height();
 		popupHeight += 20;
		var docHeight = $(window).height();
		if(popupHeight < docHeight){
			popupHeight = docHeight;
		}
		$(".contact-pop-up").show();
		$(".site").css({"max-height":docHeight, "overflow-y": "hidden"});
		$('body').css({"background-attachment": "scroll"});
		
		$(".contact-popup-back").css({"min-height" : popupHeight });
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
	$("html, body").animate({ scrollTop: "0" },500);
	$("#disclaimer-tab").addClass('disc-active');
	$("#terms-tab, #privacy-tab").removeClass('disc-active');
	$('#terms, #privacy').hide();
	$('#disclaimer').show();
}
function showPrivacy(){
	$("html, body").animate({ scrollTop: "0" },500);
	$("#privacy-tab").addClass('disc-active');
	$("#terms-tab, #disclaimer-tab").removeClass('disc-active');
	$('#terms, #disclaimer').hide();
	$('#privacy').show();
}
function showTerms(){
	$("html, body").animate({ scrollTop: "0" },500);
	$("#terms-tab").addClass('disc-active');
	$("#disclaimer-tab, #privacy-tab").removeClass('disc-active');
	$('#disclaimer, #privacy').hide();
	$('#terms').show();
}
// function careerPopup(){
// 	e.preventDefault();
// 	var role = $(this).attr("data-role");
// 	$("#career-role").val(role);
// 	window.scrollTo("0", "0");
// 	var popupHeight = 0;
// 	var docHeight = 0;
// 	popupHeight = $(".career-form").height();
// 	popupHeight += 50;
// 	var docHeight = $(window).height();
// 	if(popupHeight < docHeight){
// 		popupHeight = docHeight;
// 	}
// 	$("#career-overlays").show();
// 	$("#apply-role").css({"display":"flex"});
// 	$("#apply-function").hide();
// 	$(".site").css({"max-height":popupHeight, "overflow-y": "hidden"});
// 	$(".career-form").css({"min-height" : popupHeight });
// 	$("#career-overlays").animate({"right": "0", "top": "0"}, 1000);
// 	$("#career-cancel").css({"min-height":popupHeight});
// }