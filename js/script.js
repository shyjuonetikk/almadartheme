jQuery(function($){

	/*
	 * Load More
	 */
	$('body').on('click', '#misha_loadmore', function(){

		$.ajax({
			url : misha_loadmore_params.ajaxurl, // AJAX handler
			data : {
				'action': 'loadmore', // the parameter for admin-ajax.php
				'query': misha_loadmore_params.posts, // loop parameters passed by wp_localize_script()
				'page' : misha_loadmore_params.current_page, // current page
				'first_page' : misha_loadmore_params.first_page
			},
			type : 'POST',
			beforeSend : function ( xhr ) {
				$('#misha_loadmore').text('Loading...'); // some type of preloader
			},
			success : function( data ){

					$('#misha_loadmore').remove();
					$('#misha_pagination').before(data).remove();
					misha_loadmore_params.current_page++;


			}
		});
		return false;
	});

});
