<?php
/**
 * Template Name: Home Page
Description: Template for home page
 *
 * @package almadar
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod('understrap_container_type');
?>

<?php if (is_front_page() && is_home()): ?>
	<?php get_template_part('global-templates/hero');?>
<?php endif;?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row float-left">

				<div class="col-12">
					<h2 class="text-center purple-color prmy-font letter-spc-2 ptb-10">DIVISIONS</h2>
					<?php
$query = new WP_Query(array(
	'post_type' => array('realestate', 'construction', 'entertainment'),
	'post_status' => 'publish',
));

while ($query->have_posts()) {
	$query->the_post();
	$post_id = get_the_ID();
	$post_title = get_the_title();
	$post_title_len = strlen($post_title);

	$title_length = strlen($post_title);
	if ($title_length > "43") {
		$post_title = substr($post_title, 0, 43) . "...";
	}

	?>
					<div class="col-lg-4 col-md-6 col-sm-12 col-12 float-left mb-3 px-2">
						<div class="thumbnail">
						  <img src="<?php the_field('divisions_home_image');?>" />
						  <?php //echo the_post_thumbnail(); ?>
						  	<a href="<?php echo get_permalink(); ?>">
						  		<div class="h_division_title">
							  		<h6 class="p-0"><?php echo $post_title; ?></h6>
							    </div>
							</a>
						</div>
					</div>
					<?php
}

wp_reset_query();
?>

				</div>
			<!-- </main> --><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->
	<div class="col-12 m-0 news-section float-left p-5">
		<div class="container">
			<div class="col-lg-4 col-md-12 col-sm-12 float-left my-4 px-1">
				<div class="head pl-3 prmy-font"> Latest News</div>
				<div class="thumb-box">
					<?php
$query = new WP_Query(array(
	'post_type' => array('almadarnews'),
	'post_status' => 'publish',
));

while ($query->have_posts()) {
	$query->the_post();
	$post_id = get_the_ID();
	$post_title = get_the_title();
	$post_title_len = strlen($post_title);
	if ($post_title_len > '18') {
		$post_title = substr($post_title, 0, 17) . "...";
	}
	$content = get_the_excerpt();
	$content_len = strlen($content);

	$content = get_the_excerpt();
	$content_len = strlen(get_the_excerpt());
	if ($content_len > "94") {
		$content = substr($content, 0, 93) . "...";
	}

	if (has_post_thumbnail()) {
		$featured_img_url = get_the_post_thumbnail_url($post_id, 'full');
	} else {
		$featured_img_url = get_template_directory_uri() . "/img/No_image.png";
	}
	$post_date = get_the_date('M j, Y');

	?>
					<div class="thumb-list-box float-left">
						<div class="col-sm-12 col-md-12 col-xs-12 mt-4 pb-3">
				            <div class="thumbnail-news-section text-center">
								<div class="col-12 col-sm-4 col-md-5 float-left px-0 mr-0">
									<img src="<?php echo $featured_img_url ?>" class="img-fluid mb-2" alt="<?php echo $post_title ?>" />
					              </div>
							</div>
							<div class="col-12 col-sm-8 col-md-7 float-left mr-0 text-center text-sm-left">
								<h6 class="p-0 m-0 mb-2 purple-color prmy-font"><?php echo $post_title; ?></h6>
								<p class="mb-4 purple-color para-limit"><?php echo $content ?></p>
								<p>
									<span class="float-left purple-color fs-10 sc-font"><?php echo $post_date; ?></span>
									<a href="<?php echo get_the_permalink(); ?>#" class="float-right fs-10 second-color prmy-font">Read More</a>
								</p>
							</div>
						</div>
						<div class="col-sm-12 col-md-12 col-xs-12 float-left mt-3">
							<div class="h-line m-auto"></div>
						</div>
					</div>
					<?php
}

wp_reset_query();
?>
				</div>
			</div> <!-- list 1 -->
			<div class="col-lg-4 col-md-12 col-sm-12 float-left my-4 px-1">
				<div class="head pl-3 prmy-font"> Completed Projects</div>
				<div class="thumb-box">
<?php
$query = new WP_Query(array(
	'post_type' => array('projects'),
	'meta_key' => 'status',
	'meta_value' => 'completed',
));

while ($query->have_posts()) {
	$query->the_post();
	$post_id = get_the_ID();
	$post_title = get_the_title();

	$post_title_len = strlen($post_title);
	if ($post_title_len > '18') {
		$post_title = substr($post_title, 0, 17) . "...";
	}

	if (has_post_thumbnail()) {
		$featured_img_url = get_the_post_thumbnail_url($post_id, 'full');
	} else {
		$featured_img_url = get_template_directory_uri() . "/img/No_image.png";
	}
	$value = get_field("status", $post_id);
	$content = get_the_excerpt();
	$content_len = strlen(get_the_excerpt());
	if ($content_len > "94") {
		$content = substr($content, 0, 93) . "...";
	}
	$post_date = get_the_date('M j, Y');
	if ($value == 'completed') {
		?>
		<div class="thumb-list-box float-left">
			<div class="col-sm-12 col-md-12 col-xs-12 mt-4 pb-3">
	            <div class="thumbnail-news-section text-center">
					<div class="col-12 col-sm-4 col-md-5 float-left px-0 mr-0">
						<img src="<?php echo $featured_img_url ?>" class="img-fluid mb-2" alt="<?php echo $post_title ?>" />
					</div>
				</div>
				<div class="col-12 col-sm-8 col-md-7 float-left mr-0 text-center text-sm-left">
					<h6 class="p-0 m-0 mb-2 purple-color prmy-font"><?php echo $post_title; ?></h6>
					<p class="mb-4 purple-color para-limit"><?php echo $content; ?></p>
					<p>
						<span class="float-left purple-color fs-10 sc-font"><?php echo $post_date; ?></span>
						<a href="<?php echo get_the_permalink(); ?>#" class="float-right fs-10 second-color prmy-font">Read More</a>
					</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-xs-12 float-left mt-3">
				<div class="h-line m-auto"></div>
			</div>
		</div>
		<?php
}
}

wp_reset_query();
?>
				</div>
			</div><!-- list 2 -->
			<div class="col-lg-4 col-md-12 col-sm-12 float-left my-4 px-1">
				<div class="head pl-3 prmy-font"> On-going Projects</div>
				<div class="thumb-box">
<?php
$query = new WP_Query(array(
	'post_type' => array('projects'),
	'post_status' => 'publish',
	'meta_key' => 'status',
	'meta_value' => 'ongoing',
));

while ($query->have_posts()) {
	$query->the_post();
	$post_id = get_the_ID();
	$post_title = get_the_title();
	$post_title_len = strlen($post_title);
	if ($post_title_len > '18') {
		$post_title = substr($post_title, 0, 17) . "...";
	}

	if (has_post_thumbnail()) {
		$featured_img_url = get_the_post_thumbnail_url($post_id, 'full');
	} else {
		$featured_img_url = get_template_directory_uri() . "/img/No_image.png";
	}
	get_field('status', $post_id);
	$value = get_field("status", $post_id);
	$content = get_the_excerpt();
	$content_len = strlen(get_the_excerpt());
	if ($content_len > "94") {
		$content = substr($content, 0, 93) . "...";
	}
	$post_date = get_the_date('M j, Y');

	if ($value == 'ongoing') {
		?>
		<div class="thumb-list-box float-left">
			<div class="col-sm-12 col-md-12 col-xs-12 mt-4 pb-3">
	            <div class="thumbnail-news-section text-center">
					<div class="col-12 col-sm-4 col-md-5 float-left px-0 mr-0">
						<img src="<?php echo $featured_img_url ?>" class="img-fluid mb-2" alt="<?php echo $post_title ?>" />
		              </div>
				</div>
				<div class="col-12 col-sm-8 col-md-7 float-left mr-0 text-center text-sm-left">
					<h6 class="p-0 m-0 mb-2 purple-color prmy-font"><?php echo $post_title; ?></h6>
					<p class="mb-4 purple-color para-limit"><?php echo $content; ?></p>
					<p>
						<span class="float-left purple-color fs-10 sc-font"><?php echo $post_date; ?></span>
						<a href="<?php echo get_the_permalink(); ?>#" class="float-right fs-10 second-color prmy-font">Read More</a>
					</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-xs-12 float-left mt-3">
				<div class="h-line m-auto"></div>
			</div>
		</div>
		<?php
}
}

wp_reset_query();
?>
				</div>
			</div><!-- list 3 -->
		</div>
	</div><!-- newssection -->
	<div class="newsletter-container py-5 float-left mb-5">
		<div class="col-xl-5 col-lg-8 col-md-8 col-12 m-auto text-center">
			<h3 class="text-light prmy-font">SUBSCRIBE TO OUR NEWSLETTERS</h3>
			<p class="text-light font-weight-light fs-15 mt-4 sc-font">
				Enter your E-mail address to receive latest news and updates. Morbi euismod
				fermentum tempus. Mauris molestie facilisis eros id dictum.
			</p>
			<div class="col-12 mt-4 pt-2">
				<form id="newsletter-form" method="post" action="<?php echo get_template_directory_uri(); ?>/newsletter.php">
				  <div class="form-group row">
				    <div class="col-12 col-sm-9 m-auto">
				      	<div class="input-group mb-3 newsletter-txt-field prmy-font">
						  <input id="newslettter-mail" name="newslettter-mail" type="email" class="form-control" placeholder="YOUR E-MAIL ADDRESS" aria-label="YOUR E-MAIL ADDRESS" aria-describedby="basic-addon2" data-required="true">
						  <div class="input-group-append">
						    <span class="input-group-text" id="basic-addon2">SUBMIT</span>
						  </div>
						</div>
				     </div>
				  </div>
				  <div id="newsletter-response"></div>
				</form>
			</div>
		</div>
	</div>
</div><!-- #index-wrapper -->

<?php get_footer();?>


<script type="text/javascript">

$(".input-group-append").click(function(e){
    e.preventDefault(); //prevent default action
	proceed = true;

	//simple input validation
	// $($(this).find("input[data-required=true], select[data-required=true]")).each(function(){
 //            if(!$.trim($(this).val())){ //if this field is empty
 //                $(this).css('border-color','red'); //change border color to red
 //                proceed = false; //set do not proceed flag
 //            }
 //            //check invalid email
 //            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 //            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
 //                $(this).css('border-color','red'); //change border color to red
 //                proceed = false; //set do not proceed flag
 //            }
	// })
	// .on("input", function(){ //change border color to original
	// 	 $(this).css('border-color', border_color);
	// });


	//if everything's ok, continue with Ajax form submit
	if(proceed){
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		// var data = {};
		var newsMail = $("#newslettter-mail").val();
    	// data[varName] = varValue;
		$.ajax({ //ajax form submit
			url : post_url,
			type: "POST",
			data: {"newsMail":newsMail},
			dataType : "json"
		}).done(function(res){ //fetch server "json" messages when done
			if(res.type == "error"){
				$("#newsletter-response").show();
				$("#newsletter-response").html('<div class="error">'+ res.text +"</div>");
			}
			if(res.type == "done"){
				$("#newsletter-response").show();
				$("#newsletter-response").html('<div class="success">'+ res.text +"</div>");
				$("#newsletter-response").delay(4000).hide();
			}
            $("#cv-button").prop('disabled', true);
		});
	}
});
$("#newslettter-mail").click(function(e){
    e.preventDefault(); //prevent default action
	proceed = true;
	alert("form submit")

	//simple input validation
	// $($(this).find("input[data-required=true], select[data-required=true]")).each(function(){
 //            if(!$.trim($(this).val())){ //if this field is empty
 //                $(this).css('border-color','red'); //change border color to red
 //                proceed = false; //set do not proceed flag
 //            }
 //            //check invalid email
 //            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 //            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
 //                $(this).css('border-color','red'); //change border color to red
 //                proceed = false; //set do not proceed flag
 //            }
	// })
	// .on("input", function(){ //change border color to original
	// 	 $(this).css('border-color', border_color);
	// });


	//if everything's ok, continue with Ajax form submit
	if(proceed){
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		// var data = {};
		var newsMail = $("#newslettter-mail").val();
    	// data[varName] = varValue;
		$.ajax({ //ajax form submit
			url : post_url,
			type: "POST",
			data: {"newsMail":newsMail},
			dataType : "json"
		}).done(function(res){ //fetch server "json" messages when done
			if(res.type == "error"){
				$("#newsletter-response").show();
				$("#newsletter-response").html('<div class="error">'+ res.text +"</div>");
			}
			if(res.type == "done"){
				$("#newsletter-response").show();
				$("#newsletter-response").html('<div class="success">'+ res.text +"</div>");
				$("#newsletter-response").delay(4000).hide();
			}
            $("#cv-button").prop('disabled', true);
		});
	}
});
</script>
