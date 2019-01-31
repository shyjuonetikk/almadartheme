<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull');?>
<footer class="col-sm-12 float-left p-0 m-0 pt-3 clearfix">
	<div class="container">
		<div class="footer_main">
			<?php if (is_active_sidebar('Footer1')): ?>
	         <?php dynamic_sidebar('Footer1');?>
	        <?php endif;?>
			<?php if (is_active_sidebar('Footer2')): ?>
	         <?php dynamic_sidebar('Footer2');?>
	        <?php endif;?>
			<?php if (is_active_sidebar('Footer3')): ?>
	         <?php dynamic_sidebar('Footer3');?>
	        <?php endif;?>
			<?php if (is_active_sidebar('Footer4')): ?>
	         <?php dynamic_sidebar('Footer4');?>
	        <?php endif;?>
		</div>
	</div>
	<div class="row ml-0 mr-0 w-100 copyright_bar float-left text-center footer-bar p-3">
		<p class="float-left text-white mx-auto mb-0 fs-12">Copyright © 2006-2019 Al Madar Holding WLL. All Rights Reserved</p>
	</div>
</footer>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer();?>
<script  src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.flexslider.js"></script>
<?php
if (is_singular(['realestate', 'construction', 'entertainment']) || is_page('germany')) {
	echo "
			<script type='text/javascript'>
				$( document ).ready(function(){
					$('#divisions').addClass('current_page_item active');
				});
			</script>
			";
} else if (is_singular(['almadarnews'])) {
	echo "
			<script type='text/javascript'>
				$( document ).ready(function(){
					$('#news').addClass('current_page_item active');
				});
			</script>
			";
} else if (is_singular(['projects'])) {
	echo "
			<script type='text/javascript'>
				$( document ).ready(function(){
					$('#our-projects').addClass('current_page_item active');
				});
			</script>
			";
}
?>
<script type="text/javascript">
	(function($){
    $(document).ready(function(){
         $(window).load(function(){
	      $('.flexslider').flexslider({
	        animation: "slide",
	        slideshowSpeed: 2500,
	        animationSpeed: 1500,
	        start: function(slider){
	          $('body').removeClass('loading');
	        }
	      });
	    });
    });
})(jQuery);
  </script>
<script type="text/javascript">

	var pageId= <?php echo get_the_ID(); ?>;
	var ongoingProjects = null;
	var completedProjects = null;
	var allProjects = null;

	if(pageId ===7){
		loadInitialProjects();
	}


	function loadInitialProjects(){
		var ajaxUrl = "<?php echo admin_url('admin-ajax.php') ?>";
			/*Load ongoing Projects*/
			var post_type = 'projects';
			var post_per_page = 1;
			var status = 'ongoing';
			var place = $("#place").val();
			$.post(ajaxUrl,{action:"load_projects_status",
				ppp: post_per_page,
				posttype: post_type,
				status: status,
				place: place
			},
			 function(data){
				 ongoingProjects = data;
			});


			var post_type = 'projects';
			var post_per_page = 1;
			var status = 'completed';
			var place = $("#place").val();
			$.post(ajaxUrl,{action:"load_projects_status",
				ppp: post_per_page,
				posttype: post_type,
				status: status,
				place: place
			},
			 function(data){
				 completedProjects = data;
			});


			var post_type = 'projects';
			var post_per_page = 1;
			var status = 'all';
			var place = $("#place").val();
			$.post(ajaxUrl,{action:"load_projects_status",
				ppp: post_per_page,
				posttype: post_type,
				status: status,
				place: place
			},
			 function(data){
				 allProjects = data;
			});
	}

	var images = ['<?php the_field('home_header_image1');?>', '<?php the_field('home_header_image2');?>'];
		    $('.slideshow-image').css('background-image','url('+images[Math.floor(Math.random() * images.length)]+')');
	$( document ).ready(function(){
	$('a').removeAttr('title');
	var ajaxUrl = "<?php echo admin_url('admin-ajax.php') ?>";
    var page = 1; // What page we are on.
	$("#more_posts").on("click",function(){
		 // When btn is pressed.
		var place = $("#place").val();
		var post_type = $(this).data('post-type');
		var post_per_page = $(this).data('posts-per-page');
		var status_project = $(this).data('status-project');
		var max_pages = $(this).data('max-pages');
		$("#more_posts").hide();
		$("#loading-indicator").toggle();
		$.post(ajaxUrl,{action:"more_post_ajax",
            offset: (page * post_per_page) + 1,
			ppp: post_per_page,
			postype: post_type,
			status: status_project,
			place: place
		},
			 function(data){
			 	if(data == ''){
			 		$("#loading-indicator").toggle();
			 		$("#more_posts").hide();
			 	}
			 	else{
				 	 page++;
					 $(".projects-list").append(data);
					 $("#loading-indicator").toggle();
					 if(max_pages == page){
					 	$("#more_posts").hide();
					 }else{
					 	$("#more_posts").show();
					 }
			 	}
  			});
   });
	$("#status-list li").on("click",function(){
			//$("#projects-list").fadeOut(800);

			var post_type = $(this).data('post_type');
			var post_per_page = $(this).data('posts_per_page');
			var status = $(this).data('status_list');
			var place = $("#place").val();
			$(this).addClass('projects-active').siblings().removeClass('projects-active');
			switch(status){
				case 'ongoing':
				 if(ongoingProjects != null){
					$("#projects-list").html(ongoingProjects);
				 }else{
						loadProjects();
				 }
				 break;

				 case 'completed':
				 if(completedProjects != null){
					$("#projects-list").html(completedProjects);
				 }else{
						loadProjects();
				 }
				 break;
				 case 'all':
				 if(allProjects != null){
					$("#projects-list").html(allProjects);
				 }else{
						loadProjects();
				 }
				 break;

			}

			function loadProjects(){
				$.post(ajaxUrl,{action:"load_projects_status",
								ppp: post_per_page,
								posttype: post_type,
								status: status,
								place: place
							},
							 function(data){
								 $("#projects-list").html(data);
								 switch(status){
										case 'ongoing':
												 ongoingProjects = data;
												 break;
										 case 'completed':
												completedProjects = data;
											 	break;
										 case 'all':
												 allProjects = data;
												 break;
									}
							});

	}


	   });



	$("#place-filter li").on("click",function(){

		var place = $(this).data('place');
		$(this).addClass('projects-active').siblings().removeClass('projects-active');
		$("#place").val(place);
		$.post(ajaxUrl,{action:"filter_country",
				place: place
			},
			 function(data){
				 $("#projects-container").html(data);
				 loadInitialProjects();
				 $("#loading-indicator").hide();
				});
	 });

	$("#more_news").on("click",function(){
		 // When btn is pressed.
		var place = $("#place").val();
		var post_type = $(this).data('post-type');
		var post_per_page = $(this).data('posts-per-page');
		var news_type = $(this).data('news-type');
		var max_pages = $(this).data('max-pages');
		$("#more_news").hide();
		$("#loading-indicator").toggle();
		$.post(ajaxUrl,{action:"more_news_ajax",
            offset: (page * post_per_page) + 1,
			ppp: post_per_page,
			postype: post_type,
			news_type: news_type,
			place: place
		},
			 function(data){
				 if(data == ''){
			 		$("#loading-indicator").toggle();
			 		$("#more_news").hide();
			 	}
			 	else{
				 	 page++;
					 $(".projects-list").append(data);
					 $("#loading-indicator").toggle();
					 if(max_pages == page){
					 	$("#more_news").hide();
					 }else{
					 	$("#more_news").show();
					 }
			 	}
  			});
    });
    $("#news-type li").on("click",function(){
    		$("#projects-list").fadeOut(800);
			var post_type = $(this).data('post_type');
			var post_per_page = $(this).data('posts_per_page');
			var news_type = $(this).data('news_type');
			var place = $("#place").val();
			$(this).addClass('projects-active').siblings().removeClass('projects-active');
			$.post(ajaxUrl,{action:"load_news_by_type",
				ppp: post_per_page,
				posttype: post_type,
				news_type: news_type,
				place: place
			},
			function(data){
				$("#projects-list").html(data).fadeIn(400);
			});
	   });
    $("#news-place-filter li").on("click",function(){
		var place = $(this).data('place');
		$(this).addClass('projects-active').siblings().removeClass('projects-active');
		$("#place").val(place);
		$.post(ajaxUrl,{action:"news_filter_country",
				place: place
			},
			 function(data){
				 $("#projects-container").html(data);
				 $("#loading-indicator").hide();
				});
	 });

	    $("#what-we-do").click(function() {
		    $('html,body').animate({
		        scrollTop: $("#content-area").offset().top - 190},
		        1300);
		});

		$("#our-projects-section").click(function() {
		    $('html,body').animate({
	        scrollTop: $("#project-section").offset().top - 160},
	        1500);
		});

	});

</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<script type="text/javascript">
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});
	});
</script>
<?php

if (is_page(['home', 'about-us', 'careers']) || is_single()) {?>

<script type="text/javascript">
	window.onscroll = function() { stickyFunction() };
	var header = document.getElementById("myHeader");
	var sticky = header.offsetTop;

	function stickyFunction() {
	  if (window.pageYOffset > sticky) {
	    header.classList.add("sticky");
	    header.classList.remove("menu-new");
	  } else {
	    header.classList.remove("sticky");
	    header.classList.add("menu-new");
	  }
	}
</script>
<?php } else {?>
<script type="text/javascript">
	window.onscroll = function() { stickyFunction() };
	var header = document.getElementById("divisionHeader");
	var sticky = header.offsetTop;

	function stickyFunction() {
	  if (window.pageYOffset > sticky) {
	    header.classList.add("sticky");
	    header.classList.remove("menu-custom");
	  } else {
	    header.classList.remove("sticky");
	    header.classList.add("menu-custom");
	  }
	}
</script>
<?php }?>
</body>

</html>

