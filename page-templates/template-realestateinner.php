<?php

/**

Template Name: Al Madar Real Estate Page
Description: Template for Real Estate page

 */
get_header('division');
?>
<div class="col-lg-9 mx-auto px-3 mb-5">
	<div class="container">
		<div class="row m-0 p-0">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 my-2">
				<div class="real-image-container">
					<img class="real-image" src="<?php echo get_template_directory_uri(); ?>/img/almadarrealestate2.png" />
					<div class="real-overlay">
						<div class="real-title prmy-font">WHAT WE DO<div class="clear-fix"></div>
							<img class="pt-3" src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-white.png" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 my-2">
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
		<div class="row mt-5 p-5">
			<div class="col-lg-6 col-md-12 col-sm-12 col-12 purple-color fs-12 lh-paragraph">
				<p>Established in 1992, Al Madar Real Estate has been a significant division of Al Madar Holding.</p>
				<p>The major achievements of the Company were based on solid foundations that include excellent planning and accurate Feasibility Studies for each and every project, the effectiveness of these foundation	are corroborated by the vivid financial returns on our company’s well calculated investments in the real estate developments without exceeding the designated budgets.</p>
				<p>The Company is assisted by a highly qualified team players and it is	supported by the most advanced technologies and equipment’s to deliver the best results all the time.</p>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-12">
				<img class="img-fluid float-left float-md-left float-lg-right w-75" src="<?php echo get_template_directory_uri(); ?>/img/almadarrealestate3.png" />
			</div>
		</div>
		<div class="container text-center">
			<img class="img-fluid project-head mb-5" src="<?php echo get_template_directory_uri(); ?>/img/projectsheading.png" />
		</div>
		<div class="container pl-5 pr-5">
			<div class="col-12 col-lg-12 pl-4 pr-0 mx-auto" id="projects-list">
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
						<div class="col-12 col-md-6 mb-3 pl-0">
							<div class="card border-0 rounded-0 w-100">
								<div class="image-container">
							  		<img class="card-img-top project-card-image image" src="<?php echo $featured_img_url; ?>" alt="<?php echo $post_title; ?>">
							  		<div class="overlay"></div>
							  	</div>
							  <div class="card-body border-0 rounded-0 pl-0 ml-0">
							    <h6 class="card-title purple-color"><?php echo $post_title; ?></h6>
							    <p class="card-text fs-12 purple-color"><?php echo $post_content; ?></p>
							    <span class="purple-color float-left fs-12"><?php echo get_the_date(); ?> </span>
							    <a href="<?php echo $post_url; ?>" class="float-right fs-12">Read More</a>
							  </div>
							</div>
						</div>
						<?php	}
wp_reset_query();
?>
					</div>
					<div class="row">
							<div class="col m-auto text-center">
								<a id="estate_posts"><img class="text-center" src="<?php echo get_template_directory_uri(); ?>/img/more-button.png" /> </a>
							</div>
					</div>
				</div>
		</div>
	</div>
</div>
<?php get_footer();?>