<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header('posts');
?>
<div class="col-lg-9 mx-auto px-3 mb-5">
	<div class="container">
		<div class="row p-5">
			<div class="col-lg-6 col-md-12 col-sm-12 col-12 purple-color fs-12 lh-paragraph">
				<?php
					$status = get_field('status');
					while ( have_posts() ) : the_post();
						the_content();
						$title = get_the_title();
						$post_id = get_the_ID();
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
				?>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-12">
				<img class="img-fluid float-left float-md-left float-lg-right w-75" src="<?php echo $featured_img_url; ?>" />
			</div>
		<?php endwhile; ?>
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
							'meta_key' => 'status',
							'meta_value' => $status,
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
						<?php	} wp_reset_query(); ?>
					</div>
				</div>
		</div>
	</div>
</div>
<?php get_footer();?>
