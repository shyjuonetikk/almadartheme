<?php
/*

	Template Name: News Page
	Description: Template for displaying news.

*/
	get_header('division');
?>

<div class="row m-0 p-0 mt-0 mb-5">
	<div class="container m-auto p-0">
			<div class="col-4 float-right bread-cumb mb-1">
				<ul class="list-inline float-right" id="news-place-filter">
					<li class="list-inline-item font-weight-bold purple-color" data-place="qatar">QATAR</li>
					<li class="list-inline-item purple-color" data-place="uae">UAE</li>
					<input type="hidden" id="place" value="qatar" />
				</ul>
			</div>
			<div class="col-12 float-left" id="projects-container">
				<div class="col-12 col-md-3 col-lg-2 float-left">
					<h2 class="purple-color">News</h2>
					<div class="line"></div>
					<ul class="list-inline mt-4 projects-ul row" id="news-type">
						<li class="font-weight-bold col-6 col-md-12 col-sm-3 purple-color" data-news_type="realestate" data-post_type="almadarnews" data-posts_per_page="1">REAL ESTATE</li>
						<li class="purple-color col-6 col-md-12 col-sm-3" data-news_type="construction" data-post_type="almadarnews" data-posts_per_page="1">CONSTRUCTION</li>
						<li class="purple-color col-6 col-md-12 col-sm-3" data-news_type="entertainment" data-post_type="almadarnews" data-posts_per_page="1">ENTERTAINMENT</li>
						<li class="purple-color col-6 col-md-12 col-sm-3" data-news_type="all" data-post_type="almadarnews" data-posts_per_page="1">ALL UPDATES</li>
					</ul>
				</div>
				<div class="col-12 col-md-9 col-lg-10  pl-4 pr-0 float-left" id="projects-list">
					<div class="row m-0 projects-list">
					<?php 
						$query = new WP_Query(array(
						    'post_type' => array('almadarnews'),
							'post_status' => 'publish',
							'meta_query' => array(
								'relation' => 'AND', //**** Use AND or OR as per your required Where Clause
								array(
									'key' => 'news_type',
									'value' => 'realestate',
								),
								array(
									'key' => 'news_location',
									'value' => 'qatar',
								),
							),
							'posts_per_page'=> 2
						));


						while ($query->have_posts()) {
						    $query->the_post();
						    $post_id = get_the_ID();
							$post_title = get_the_title();
							$post_content = get_the_excerpt();
							$post_url = get_the_permalink();
							$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					?>

						<div class="col-12 col-md-6 mb-3 px-4">
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
						<?php } wp_reset_query(); ?>
					</div>
							<div class="row">
								<div class="col m-auto text-center">
								<!-- <a href="#" class="float-left">More -->
									<i class="fas fa-spinner fa-spin" id="loading-indicator" style="display:none;"></i>
									<a id="more_news" data-post-type="almadarnews" data-posts-per-page="1" data-news-type="realestate">More<img class="text-center" src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" /> </a>
								</div>
							</div>
					</div>
				</div>
			</div>
	</div>
</div>

<?php get_footer();?>