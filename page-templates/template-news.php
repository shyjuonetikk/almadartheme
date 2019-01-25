<?php
/*

	Template Name: News Page
	Description: Template for displaying news.

*/
	get_header('division');
?>

<div class="row m-0 p-0 mt-3 mb-5">
	<div class="container m-auto p-0">
			<div class="col-4 float-right bread-cumb mb-1">
				<ul class="list-inline float-right">
					<li class="list-inline-item font-weight-bold purple-color">QATAR</li>
					<li class="list-inline-item purple-color">UAE</li>
				</ul>
			</div>
			<div class="col-12">
				<div class="col-12 col-md-3 col-lg-2 float-left">
					<h2 class="purple-color">News</h2>
					<div class="line"></div>
					<ul class="list-inline mt-4 projects-ul row">
						<li class="font-weight-bold col-6 col-md-12 col-sm-3 purple-color">REAL ESTATE</li>
						<li class="purple-color col-6 col-md-12 col-sm-3">CONSTRUCTION</li>
						<li class="purple-color col-6 col-md-12 col-sm-3">ENTERTAINMENT</li>
						<li class="purple-color col-6 col-md-12 col-sm-3">ALL UPDATES</li>
					</ul>
				</div>
				<div class="col-12 col-md-9 col-lg-10  pl-4 pr-0 float-left">
					<div class="row m-0 projects-list">
					<?php 
						$query = new WP_Query(array(
						    'post_type' => array('almadarnews'),
								'post_status' => 'publish',
								'posts_per_page'=> 1
						));


						while ($query->have_posts()) {
						    $query->the_post();
						    $post_id = get_the_ID();
								$post_title = get_the_title();
								$post_content = get_the_excerpt();
								$post_url= get_the_permalink();

								$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					?>

						<div class="col-12 col-md-6 mb-3 pl-0">
							<div class="card border-0 rounded-0 w-100">
								<div class="image-container">								
							  		<img class="card-img-top image news-card-image" src="<?php echo $featured_img_url;?>" alt="<?php echo $post_title; ?>">
							  		<div class="overlay"></div>
							  	</div>
							  <div class="card-body border-0 rounded-0 pl-0 ml-0">
							    <h6 class="card-title purple-color"><?php echo $post_title; ?></h6>
							    <p class="card-text fs-12 purple-color"><?php echo $post_content; ?></p>
							    <span class="purple-color float-left fs-12"><?php echo get_the_date();?> </span>
							    <a href="<?php echo $post_url; ?>" class="float-right fs-12">Read More</a>
							  </div>
							</div>
						</div>
				<?php	}

wp_reset_query();
?>
					</div>					
							<div class="col m-auto text-center">							
								<!-- <a href="#" class="float-left">More -->
								<i class="fas fa-spinner fa-spin" id="loading-indicator" style="display:none;"></i>
								<a href="#"  id="more_posts" data-post-type="almadarnews" data-posts-per-page="1" ><img class="text-center" src="<?php echo get_template_directory_uri(); ?>/img/more-button.png" /> </a>
							</div>
					</div>
				</div>
			</div>
	</div>
</div>

<?php get_footer();?>