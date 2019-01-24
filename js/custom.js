$( document ).ready(function(){
	//  Real Estate Popup
	$('#real-more').click(function(e){
		e.preventDefault();
		var popupHeight = $(".divi-main").height();
		$("#realestate-banner").animate({"right": "0", "height":popupHeight}, 500);
	});
	$('#real-back').click(function(e){
		e.preventDefault();
		$("#realestate-banner").animate({"right": "-200%", "height": "auto"}, 500);
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
});