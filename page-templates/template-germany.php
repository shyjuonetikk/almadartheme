<?php

/**

Template Name: Germany Page
Description: Template for Germany page

 */
get_header('posts');
?>
<div class="col-lg-9 mx-auto px-3 mb-5">
	<div class="container">
		<div class="row m-0 p-0">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 my-2" id="what-we-do">
				<div class="real-image-container">
					<img class="real-image" src="<?php echo get_template_directory_uri(); ?>/img/almadarrealestate2.png" />
					<div class="real-overlay">
						<div class="real-title prmy-font">WHAT WE DO<div class="clear-fix"></div>
							<img class="pt-3" src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-white.png" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 my-2" id="our-projects-section">
				<div class="real-image-container prmy-font">
					<img class="real-image" src="<?php echo get_template_directory_uri(); ?>/img/almadarrealestate1.png" />
					<div class="real-overlay">
						<div class="real-title">OUR PROJECTS<div class="clear-fix"></div>
						<img class="pt-3" src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-white.png" />
					</div>
					</div>
				</div>
			</div>
		</div>
	<div id="content-area">
		<div class="row mt-5 p-5">
			<div class="col-lg-6 col-md-12 col-sm-12 col-12 purple-color fs-12 lh-paragraph">
				<?php
				while (have_posts()): the_post();
					the_content();
					$title = get_the_title();
					$post_id = get_the_ID();
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
					?>

						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-12">
							<img class="img-fluid float-left float-md-left float-lg-right w-75" src="<?php echo $featured_img_url; ?>" />
						</div>
					<?php endwhile;?>
		</div>
	</div>
	<div id="project-section">
		<div class="container text-center">
			<img class="img-fluid project-head mb-5" src="<?php echo get_template_directory_uri(); ?>/img/projectsheading.png" />
		</div>
		<div class="container  px-0">
			<div class="col-12 col-lg-12 px-0 mx-auto" id="projects-list">
					<div class="row m-0 projects-list">
					<?php
$query = new WP_Query(array(
	'post_type' => array('projects'),
	'post_status' => 'publish',
	'posts_per_page' => 2,
));

while ($query->have_posts()) {
	$query->the_post();
	$post_id = get_the_ID();
	$post_title = get_the_title();
	$post_content = get_the_excerpt();
	$post_url = get_the_permalink();
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
	?>
						<div class="col-12 col-md-6 mb-3 px-4">
							<div class="card border-0 rounded-0 w-100">
								<a href="<?php echo $post_url; ?>">
									<div class="image-container">
								  		<img class="card-img-top project-card-image image" src="<?php echo $featured_img_url; ?>" alt="<?php echo $post_title; ?>">
								  		<div class="overlay"></div>
								  	</div>
							  	</a>
							  <div class="card-body border-0 rounded-0 pl-0 ml-0">
							    <h6 class="card-title purple-color"><?php echo $post_title; ?></h6>
							    <p class="card-text fs-12 purple-color"><?php echo $post_content; ?></p>
							    <span class="purple-color float-left fs-12"><?php echo get_the_date(); ?> </span>
							    <a href="<?php echo $post_url; ?>" class="float-right fs-12">Read More</a>
							  </div>
							</div>
						</div>
						<?php	} wp_reset_query(); ?>
					</div>
				</div>
		</div>
	</div>
	</div>
</div>
<?php get_footer();?>